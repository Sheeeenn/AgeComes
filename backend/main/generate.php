<?php
    require 'vendor/autoload.php';
    require_once("backend/start.php");

    // Make Barcode object of Code128 encoding.
    $barcode = (new Picqer\Barcode\Types\TypeCode128())->getBarcode($_SESSION['CardID']);

    // Output the barcode as HTML in the browser with a HTML Renderer
    $renderer = new Picqer\Barcode\Renderers\HtmlRenderer();
?>