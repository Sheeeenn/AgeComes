<?php

require("backend/database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $surname = $_POST['sname'];
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $email = $_POST['ename'];
    $cardNumber = intval($_POST['cname']);
    $cbudget = 1500;

    $prep1 = $conn->prepare("Select * from agecomes where BarCodeNumber = ?");
    if ($prep1 === false) {
        die("Error preparing the query: " . $conn->error);
    }

    $prep1->bind_param("i", $cardNumber);
    $prep1->execute();

    $result = $prep1->get_result();
    if ($result->num_rows > 0) {
        echo "<script>alert('Please Enter different Card Number!');</script>";
    } else {

        $prep = $conn->prepare("INSERT INTO agecomes (FirstName, MiddleName, LastName, Email, BarCodeNumber, CurrentBudget) VALUES (?, ?, ?, ?, ?, ?)");

        if ($prep === false) {
            die("Error preparing the query: " . $conn->error);
        }

        $prep->bind_param("ssssii", $firstname, $middlename, $surname, $email, $cardNumber , $cbudget);
        $prep->execute();
        $prep->close();

        require_once("backend/start.php");
        $_SESSION["CardID"] = $cardNumber;
        header("location: /dashboard");

    }

}

$conn->close();
?>