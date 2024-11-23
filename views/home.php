<html>
    <head>
        <title>Age Comes With Price</title>
        <link rel="stylesheet" type="text/css" href="other/header.css">
        <link rel="stylesheet" type="text/css" href="other/button.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>

    <body>

        <?php include("other/header.php")?>

        <p class="scan-text">Scan the barcode.</p>

        <div class="bar-div">
            <img class="bar-image" src="other/img/barcode.png">
        </div>

        <div class="dgrid">
            <button><p>REGISTER</p></button>
        </div>

    </body>

<html>

<?php

require 'vendor/autoload.php';

// Make Barcode object of Code128 encoding.
$barcode = (new Picqer\Barcode\Types\TypeCode128())->getBarcode('222111');

// Output the barcode as HTML in the browser with a HTML Renderer
$renderer = new Picqer\Barcode\Renderers\HtmlRenderer();
echo $renderer->render($barcode);
echo $renderer->render($barcode);
echo $renderer->render($barcode);

?>