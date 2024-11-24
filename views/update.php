<?php
require("backend/main/update.php");
?>

<html lang="en">

<head>
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="other/header.css">
    <link rel="stylesheet" type="text/css" href="other/button.css">
    <link rel="stylesheet" type="text/css" href="css/update.css">
</head>

<body>

    <?php include("other/header.php") ?>

    <div class="container">
        <h1 class="text">TRANSACTION DETAILS</h1>
        <form method="POST">
        <div class="container2 grid">
            <div class="line grid">
                <label for="lname" class="details">Last Store Purchase:</label>
                <input type="text" name="pname" class="fields">
            </div>

            <div class="line grid">
                <label for="lname" class="details">Used Budget:</label>
                <input type="text" name="bname" class="fields">
            </div>

            <div class="line grid">
                <label for="lname" class="details">Date of Last Purchase:</label>
            </div>

            <div class="line grid">
                <label for="lname" class="details">Budget Left:</label>
            </div>

            <button type="submit">
                <p>UPDATE</p>
            </button>
        </form>


        </div>


    </div>





</body>

</html>