import serial
import requests


arduino_port = "COM5"
baud_rate = 9600
server_url = "http://192.168.1.19/api/login" 

# Open serial connection
ser = serial.Serial(arduino_port, baud_rate, timeout=1)

print("Listening on port", arduino_port)

while True:
    try:
        # Read data from Arduino
        if ser.in_waiting > 0:
            data = ser.readline().decode('utf-8').strip()
            print(f"Received: {data}")

            # Send data to backend API
            response = requests.post(server_url, json={"barcode": data})
            print(f"Response: {response.status_code}, {response.text}")

    except KeyboardInterrupt:
        print("Stopping script...")
        ser.close()
        break
    except Exception as e:
        print(f"Error: {e}")
