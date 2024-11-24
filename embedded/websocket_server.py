import asyncio
import websockets
import json
import serial
import serial.tools.list_ports

# Find the Arduino port automatically
def find_arduino_port():
    ports = list(serial.tools.list_ports.comports())
    for port in ports:
        if "Arduino" in port.description or "CH340" in port.description:
            return port.device
    return None

# Store connected WebSocket clients
clients = set()

async def register(websocket):
    clients.add(websocket)
    try:
        await websocket.wait_closed()
    finally:
        clients.remove(websocket)

async def broadcast_barcode(barcode):
    if clients:
        message = json.dumps({"barcode": barcode})
        await asyncio.gather(
            *[client.send(message) for client in clients]
        )

async def serial_reader():
    arduino_port = find_arduino_port()
    if not arduino_port:
        print("Arduino not found!")
        return

    try:
        ser = serial.Serial(arduino_port, 9600, timeout=1)
        print(f"Connected to Arduino on {arduino_port}")
        
        while True:
            if ser.in_waiting > 0:
                barcode = ser.readline().decode('utf-8').strip()
                print(f"Received barcode: {barcode}")
                await broadcast_barcode(barcode)
            await asyncio.sleep(0.1)
    except Exception as e:
        print(f"Serial error: {e}")

async def main():
    # Start WebSocket server
    async with websockets.serve(register, "localhost", 8765):
        # Start serial reader in the background
        asyncio.create_task(serial_reader())
        # Keep the server running
        await asyncio.Future()

if __name__ == "__main__":
    asyncio.run(main()) 