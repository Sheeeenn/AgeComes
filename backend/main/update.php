<?php

require("backend/database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $storename = $_POST['pname'];
    $budgetspent = intval($_POST['bname']);
    require_once("backend/start.php");
    $id = $_SESSION["CardID"];


    // Check if CurrentBudget is sufficient before updating
    $query = $conn->prepare("SELECT CurrentBudget FROM agecomes WHERE BarCodeNumber = ?");
    if ($query === false) {
        die("Error preparing the validation query: " . $conn->error);
    }

    $query->bind_param("i", $id);
    $query->execute();
    $query->bind_result($currentBudget);
    $query->fetch();
    $query->close();

    // Validate CurrentBudget
    if ($currentBudget < $budgetspent) {
        die("Error: Insufficient budget. The transaction cannot proceed.");
    }

    // Proceed with the update if validation passes
    $prep = $conn->prepare("UPDATE agecomes SET LastStoreSpent = ?, LastSpent = ?, CurrentBudget = CurrentBudget - ?, LastDateSpent = NOW() WHERE BarCodeNumber = ?");
    if ($prep === false) {
        die("Error preparing the update query: " . $conn->error);
    }

    $prep->bind_param("siii", $storename, $budgetspent, $budgetspent, $id);
    $prep->execute();
    $prep->close();

    // require_once("backend/start.php");
    // $_SESSION["CardID"] = $cardNumber;
    header("location: /dashboard");

}

$conn->close();
?>