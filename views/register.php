<?php
require("backend/database/connection.php");
?>

<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="other/header.css">
    <link rel="stylesheet" type="text/css" href="other/button.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body>

    <?php include("other/header.php") ?>

    <div class="registercard container">
        <h1 class="regtxt">REGISTRATION</h1>
        <form action="" class="container" method="POST">
        
            <label for="fname" class="txtfields">NAME:</label>
            <input type="text" name="sname" class="fields spanfields" required>
            <input type="text" name="fname" class="fields spanfields" required>
            <input type="text" name="mname" class="fields spanfields" required><br><br>
            <div class="empty2"></div>
            <div class="names">SURNAME</div>

            <div class="names">FIRST NAME</div>

            <div class="names">MIDDLE NAME</div>
                
        
            <label for="lname" class="txtfields2">EMAIL:</label>
            <input type="text" name="ename" class="fields fields2" required>
            <div class="empty"></div>
            <label for="lname" class="txtfields2">CARD NUMBER:</label>
            <input type="text" name="cname" class="fields fields2 margin" required>
            <button type="submit"><p>REGISTER</p></button>
            
        </form>
    </div>

    



</body>

</html>