<?php
require 'vendor/autoload.php';

use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;

// Create an instance of BarcodeGeneratorHTML
$generator = new BarcodeGeneratorHTML();

// Create a barcode for a given text
$barcode = $generator->getBarcode('1234567890', $generator::TYPE_CODE_128);

// Display the barcode
echo '<html><body>';
echo '<h1>Barcode</h1>';
echo $barcode;
echo '</body></html>';
