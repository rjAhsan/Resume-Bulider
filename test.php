<?php

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$filename = "newpdffile";
$dompdf->loadHtml('<h3>Hello World</h3>');

$dompdf->setPaper('A4', 'landscape');


$dompdf->render();

$dompdf->stream($filename,array("Attachment"=>0));




?>