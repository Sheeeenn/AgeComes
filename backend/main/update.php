<?php

require("backend/database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $storename = $_POST['pname'];
    $budgetspent = intval($_POST['bname']);
    require_once("backend/start.php");
    $id = $_SESSION["CardID"];


    $prep = $conn->prepare("UPDATE agecomes SET LastStoreSpent = ?, LastSpent = ? WHERE BarCodeNumber = $id");

    if ($prep === false) {
        die("Error preparing the query: " . $conn->error);
    }

    $prep->bind_param("si", $storename, $budgetspent);
    $prep->execute();
    $prep->close();

    // require_once("backend/start.php");
    // $_SESSION["CardID"] = $cardNumber;
    header("location: /dashboard");

}

$conn->close();
?>