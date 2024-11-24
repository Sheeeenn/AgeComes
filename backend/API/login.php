<?php
require("backend/database/connection.php");


$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['barcode'])) {
    $barcode = $data['barcode'];

    
    $sql = "SELECT * FROM agecomes WHERE BarCodeNumber = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $barcode); 


    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {

        require("backend/database/start.php");
        
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user; 
        
        header("location: /dashboard"); 
    } else {
       
        echo json_encode([
            "success" => false,
            "message" => "Barcode not found."
        ]);
    }

    $stmt->close();
} else {
    
    echo json_encode([
        "success" => false,
        "message" => "Barcode not provided."
    ]);
}

$conn->close();
?>
