#include <SoftwareSerial.h>

SoftwareSerial barcodeScanner(2, 3);

void setup() {

  Serial.begin(9600);
  barcodeScanner.begin(9600); 
  
  pinMode(LED_BUILTIN, OUTPUT); 
}

void loop() {
  String barcode = "";

  while (barcodeScanner.available()) {
    char c = barcodeScanner.read();
  
    if (c == '\n' || c == '\r') {
      break;
    }
    barcode += c;
  }

 
  if (barcode.length() > 0) {
    Serial.println("Barcode scanned: " + barcode);

    digitalWrite(LED_BUILTIN, HIGH);  
    delay(100); 
    digitalWrite(LED_BUILTIN, LOW);   
    delay(200); 
  }
}