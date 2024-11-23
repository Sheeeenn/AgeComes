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

        $barcode = $data->barcode;
        header("location: /update");
        

    } else {

        echo json_encode(["status" => "Error", "message" => "Card is not Registered"]);
        
    }

} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}
?>