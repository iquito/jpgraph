<?php

/**
 * JPGraph v4.0.3
 */

// Include the library
require_once __DIR__ . '/../../src/config.inc.php';

require_once 'jpgraph/QR/qrencoder.inc.php';

$readFromFilename = 'qr-input.txt';

// Create a new instance of the encoder and let the library
// decide a suitable QR version and error level
$encoder = new QREncoder();

// Use the image backend
$backend = QRCodeBackendFactory::Create($encoder, BACKEND_IMAGE);

// Set the module size (quite big)
$backend->SetModuleWidth(5);

// Use blue and white colors instead
$backend->SetColor('navy', 'white');

// .. send the barcode back to the browser for the data in the file
$backend->StrokeFromFile($readFromFilename);
