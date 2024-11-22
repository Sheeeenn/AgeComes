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
        <div class="container2 grid">
            <div class="line grid">
                <label for="lname" class="details">Last Store Purchase:</label>
                <input type="text" id="lname" name="lname" class="fields">
            </div>

            <div class="line grid">
                <label for="lname" class="details">Used Budget:</label>
                <input type="text" id="lname" name="lname" class="fields">
            </div>

            <div class="line grid">
                <label for="lname" class="details">Date of Last Purchase:</label>
                <input type="text" id="lname" name="lname" class="fields" readonly>
            </div>

            <div class="line grid">
                <label for="lname" class="details">Budget Left:</label>
                <input type="text" id="lname" name="lname" class="fields" readonly>
            </div>


        </div>


        <button>
            <p>UPDATE</p>
        </button>
    </div>





</body>

</html>