<?php

require("backend/database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST['sname'];
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $email = $_POST['ename'];
    $cardNumber = intval($_POST['cname']);

    $prep = $conn->prepare("INSERT INTO agecomes (FirstName, MiddleName, LastName, Email, BarCodeNumber) VALUES (?, ?, ?, ?, ?)");

    if ($prep === false) {
        die("Error preparing the query: " . $conn->error);
    }

    $prep->bind_param("sssssi", $firstname, $middlename, $surname, $ename, $cname );
    $prep->execute();
    $prep->close();

    require_once("backend/start.php");
    $_SESSION["CardID"] = $cardNumber;
    header("location: /information");
}

$conn->close();
?>