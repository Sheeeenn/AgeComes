<?php
require("backend/main/dashboard.php");
require("backend/main/generate.php");
?>

<html lang="en">

<head>
    <title>Information</title>
    <link rel="stylesheet" type="text/css" href="other/header.css">
    <link rel="stylesheet" type="text/css" href="css/information.css">
    
</head>

<body class="pad">

    <?php include("other/header.php") ?>

    
    <div class="container">
        <h1 class="text">PERSONAL DETAILS</h1>
        <div class="container2 grid">
            <div class="line grid">
                <label for="lname" class="details span2">Card Number:</label>
                <input type="text" id="lname" name="lname" class="fields span10" readonly>
            </div>

            <div class="line grid">
                <label for="lname" class="details span2">Name:</label>
                <input type="text" id="lname" name="lname" class="fields span10" readonly>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text">TRANSACTION DETAILS</h1>
        <div class="container2 grid">
            <div class="line grid">
                <label for="lname" class="details span4">Last Store Purchase:</label>
                <input type="text" id="lname" name="lname" class="fields span8" readonly>
            </div>
            <div class="line grid">
                <label for="lname" class="details span4">Date of Last Purchase:</label>
                <input type="text" id="lname" name="lname" class="fields span8" readonly>
            </div>
            <div class="line grid">
                <label for="lname" class="details span4">Used Budget:</label>
                <input type="text" id="lname" name="lname" class="fields span8" readonly>
            </div>

            <div class="line grid">
                <label for="lname" class="details span4">Budget Left:</label>
                <input type="text" id="lname" name="lname" class="fields span8" readonly>
            </div>
        </div>

    </div>
    
    <div class="space">
        <div class="bar-div">
            <a class="barcode" id="openModal"><?php echo $renderer->render($barcode , $barcode->getWidth() * 4, 100);  ?></a>
        </div>
        <div class="button-div">
            <button type="submit" class="button where2"><p>UPDATE</p></button>
        </div>
        <div class="click-div">
            <p class="click">(CLICK TO VIEW FULLSCREEN)</p>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modalOverlay" class="modal-overlay">
        <div class="modal">
            <a class="close-btn" id="closeModal">&times;</a>
            <h2>Your Barcode</h2>
            <br>
            <?php echo $renderer->render($barcode , $barcode->getWidth() * 8, 200);  ?>
            <br>
            <a href="">Download as PDF.</a>
        </div>
    </div>
    
    <script src="js/information.js"></script>
    
</body>

</html>