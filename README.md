# AgeComes
 AGE COMES WITH A PRICE: A Purchase-Tracking System Database for  Senior Citizens

## Requirements
1. XAMPP
2. Arduino IDE
3. Composer
4. Any IDE for Python (e.g. VS code)

## Setup
1. Download as ZIP or clone the Project.
2. Launch Composer setup executable and reference the php.exe usually in `C:\xampp\php\php.exe`.
3. Unzip the downloaded project and move it inside the `C:/xampp/htdocs` directory.
   
   > Make sure the moved folder has all the files inside like `index.php`. (not just another age-comes folder, as it will not work)
   
5. Open XAMPP and click `Config` button in Apache module then `Apache (httdp.conf)`.
6. Scroll down to find `DocumentRoot "C:/xampp/htdocs"` and `<Directory "C:/xampp/htdocs"`.
7. Modify it to reflect `DocumentRoot "C:/xampp/htdocs/age-comes"` and `<Directory "C:/xampp/htdocs/age-comes">` respectively and save it.
8. Start the Apache and MySQL module.

## Running
1. Open the Arduino IDE and plug in the electronics, namely, the Barcode Reader module and the Arduino Uno R3.
2. Through the Arduino IDE, open the file which is located in the project folder `age-comes > embedded > barcode_reader > barcode_reader.ino
3. Select the open arduino port in the dropdown.

   > Take note of the port (e.g. "COM3") number of the arduino as it will be crucial for the python script
4. Upload the code to the arduino via the `Upload` button.
5. Open any IDE like VScode and open the `age-comes` folder located in the `C:/xampp/htdocs` directory.
6. Select the python script inside the `embedded` folder named: `barcode_api_handler.py`.
7. Before running, make sure the arduino_port variable matches what is showing in the arduino IDE. Simply replace `"COM5"` with `<"your_arduino_port"`
8. Run the python script.
9. While the python script is running, go to your browser and type in `localhost`. The website should show up.
10. Try registering to the website and try to see if everything works, including the barcode reader.
