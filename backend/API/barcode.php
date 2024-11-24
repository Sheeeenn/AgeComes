<?php
// Prevent any HTML error output
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Ensure we're sending JSON header before any output
header('Content-Type: application/json');

try {
    // Use absolute paths or correct relative paths
    require_once __DIR__ . "/../../backend/start.php";
    require_once __DIR__ . "/../../backend/database/connection.php";

    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['barcode'])) {
        $barcode = $data['barcode'];
        
        $sql = "SELECT * FROM agecomes WHERE BarCodeNumber = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $barcode);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION["CardID"] = $row["BarCodeNumber"];
            }
            
            echo json_encode([
                "success" => true,
                "redirect" => "/dashboard"
            ]);
        } else {
            echo json_encode([
                "success" => false,
                "message" => "Barcode not found."
            ]);
        }

        $stmt->close();
    } 

    $conn->close();

} catch (Exception $e) {
    // Log error to file instead of displaying it
    error_log($e->getMessage());
    
    // Return proper JSON error response
    echo json_encode([
        "success" => false,
        "message" => "Server error occurred"
    ]);
}
?> 