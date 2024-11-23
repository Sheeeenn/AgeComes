<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "age_comes";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "
CREATE TABLE IF NOT EXISTS AgeComes (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    BarCodeNumber CHAR(9) UNIQUE NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    MiddleName VARCHAR(255),
    LastName VARCHAR(255) NOT NULL,
    CurrentBudget DECIMAL(7,2) NOT NULL,
    LastSpent DECIMAL(7,2) NOT NULL,
    LastDateSpent DATETIME NOT NULL,
    LastStoreSpent VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Database and Tables created successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();


?>