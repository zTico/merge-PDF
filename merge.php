<?php


if($_SERVER["REQUEST_METHOD"] === "POST"){
    $file = $_FILES['arquivo'];
    $file2 = $_FILES['arquivo2'];
    $dirUp = '../www/';
   move_uploaded_file($file['tmp_name'], $dirUp . DIRECTORY_SEPARATOR . 'extra.pdf');
   move_uploaded_file($file2['tmp_name'], $dirUp . DIRECTORY_SEPARATOR . 'extra2.pdf');
}

sleep(5);
/**
 * Simply import all pages and different bounding boxes from different PDF documents.
 */
use setasign\Fpdi;
use setasign\fpdf;
require_once 'vendor/autoload.php';
require_once 'vendor/setasign/fpdf/fpdf.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(0);
date_default_timezone_set('UTC');
$start = microtime(true);

$pdf = new Fpdi\Fpdi();
//$pdf = new Fpdi\TcpdfFpdi('L', 'mm', 'A3');


if ($pdf instanceof \TCPDF) {
    $pdf->SetProtection(['print'], '', 'owner');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
}



//$arquivoName=$arquivo['name'];


// $uploads_dir = './';


//move_uploaded_file($arquivo['tmp_name'], $uploads_dir.$arquivoName);

// return 0;
//sleep(10);
    $files = [
        'extra.pdf',
		'extra2.pdf',
            
    ];

   // var_dump($files);


      foreach ($files as $file) {
        $pageCount = $pdf->setSourceFile($file);

        for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
            $pdf->AddPage();
            $pageId = $pdf->importPage($pageNo, '/MediaBox');
            //$pageId = $pdf->importPage($pageNo, Fpdi\PdfReader\PageBoundaries::ART_BOX);
            $s = $pdf->useTemplate($pageId, 10, 10, 200);
        }
    }
    $file = uniqid().'.pdf';
    $file2 = uniqid().'.pdf';
    $pdf->Output('D', 'simple.pdf');
   
        
    
    
    
    
    
    //$pdf->Output('output/'.$file, 'I');

?>
