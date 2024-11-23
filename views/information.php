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
        <button type="submit" class="button where"><p>SHOW BARCODE</p></button>
        <button type="submit" class="button where2"><p>UPDATE</p></button>
    </div>
    

    
</body>

</html>