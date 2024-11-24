<?php

require("backend/database/connection.php");
require("backend/start.php");

if (!isset($_SESSION["CardID"])) {
    header("location: /");
} else {

    $id = $_SESSION["CardID"];

    $sql = "SELECT * FROM agecomes WHERE BarCodeNumber = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["FirstName"] = $row["FirstName"];
            $_SESSION["MiddleName"] = $row["MiddleName"];
            $_SESSION["LastName"] = $row["LastName"];
            $_SESSION["CurrentBudget"] = $row["CurrentBudget"];
            $_SESSION["LastSpent"] = $row["LastSpent"];
            $_SESSION["LastDateSpent"] = $row["LastDateSpent"];
            $_SESSION["LastStoreSpent"] = $row["LastStoreSpent"];
        }
    } else {
    echo "0 results";
    }
    $conn->close();

}

?>