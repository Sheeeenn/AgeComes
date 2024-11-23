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
            <a href="/register"><button><p>REGISTER</p></button></a>
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



$colorGreen = [0, 255, 0];
$barcode = (new Picqer\Barcode\Types\TypeCode128())->getBarcode('081231723897');
$renderer = new Picqer\Barcode\Renderers\PngRenderer();
$renderer->setForegroundColor($colorGreen);
// Save PNG to the filesystem, with widthFactor 3 (width of the barcode x 3) and height of 50 pixels
file_put_contents('barcode.png', $renderer->render($barcode, $barcode->getWidth() * 3, 50));
?>