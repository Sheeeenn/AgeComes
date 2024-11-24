<?php
    require 'vendor/autoload.php';
    require_once("backend/start.php");

    $colorGreen = [0, 0, 0];
    $download_barcode = (new Picqer\Barcode\Types\TypeCodabar())->getBarcode($_SESSION['CardID']);
    $renderer = new Picqer\Barcode\Renderers\JpgRenderer();
    $renderer->setForegroundColor($colorGreen);

    $filePath = 'output_barcode.jpeg';

    file_put_contents($filePath, $renderer->render($download_barcode, $download_barcode->getWidth() * 8, 200));

    header('Content-Type: image/jpeg');
    header('Content-Disposition: attachment; filename="barcode.jpeg"');
    header('Content-Length: ' . filesize($filePath));

    readfile($filePath);

    unlink($filePath);

    exit;
?>
