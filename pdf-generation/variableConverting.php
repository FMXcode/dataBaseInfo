<?php
require_once "../config/connect.php";
require_once '../dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
//$options = new Options();
//$options->set('chroot', realpath(''));
$dompdf = new Dompdf();
ob_start();
require "../layoutPortfolioPDF/variablePortfolioFormat1.php";
$content = ob_get_clean();
$dompdf->loadHtml($content);


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'vertical');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Портфолио');
