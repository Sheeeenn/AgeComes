<?php
header('Content-Type: application/json');
// Enable CORS for local development
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data from the request body
    $data = json_decode(file_get_contents("php://input"));

    // Check if data is valid
    if (isset($data->barcode)) {                                                                                                            

        $dbname = "arduino";
        $dbusername = "root";
        $dbpassword = "";
        $dbhost = "localhost";

        // Create connection
        $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

    
        $sql = "INSERT INTO users (firstname, lastname, middlename, email, cardnumber, lastpurchase, usedbudget, budgetleft)
        VALUES ('John', 'Doe', 'Mendoza', 'john@example.com', 123456789, 'ue store', '200', '1500')";

        $conn->query($sql);

        // if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        // } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        // $conn->close();


    } else {

        echo json_encode(["status" => "error", "message" => "Missing name or email"]);
        
    }

} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>