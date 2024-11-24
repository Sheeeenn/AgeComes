<?php

    require 'vendor/autoload.php';
    require_once("backend/start.php");
    $colorGreen = [0, 255, 0];
    $download_barcode = (new Picqer\Barcode\Types\TypeCodabar())->getBarcode($_SESSION['CardID']);
    $renderer = new Picqer\Barcode\Renderers\JpgRenderer();
    $renderer->setForegroundColor($colorGreen);
   
    file_put_contents('ouput_barcode.jpeg', $renderer->render($download_barcode, $download_barcode->getWidth() * 3, 50));
    header("Location: /dashboard");
    exit;
?>