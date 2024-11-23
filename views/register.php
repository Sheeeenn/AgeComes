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
        <form action="/action_page.php" class="container">
        
            <label for="fname" class="txtfields">NAME:</label>
            <input type="text" id="fname" name="fname" class="fields spanfields">
            <input type="text" id="fname" name="fname" class="fields spanfields">
            <input type="text" id="fname" name="fname" class="fields spanfields"><br><br>
            
            <div class="names">SURNAME</div>

            <div class="names">FIRST NAME</div>

            <div class="names">MIDDLE NAME</div>
                
        
            <label for="lname" class="txtfields2">EMAIL:</label>
            <input type="text" id="lname" name="lname" class="fields fields2">
            <div class="empty"></div>
            <label for="lname" class="txtfields2">CARD NUMBER:</label>
            <input type="text" id="lname" name="lname" class="fields fields2">
            
        </form>
        <button><p>REGISTER</p></button>
    </div>

    



</body>

</html>