<?php
require_once dirname(__FILE__).'/../../vendor/autoload.php';
require_once '../../app/models/Propietarios.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    $propietarios = new Propietarios();
    $listaPropietarios = $propietarios->getAll();

    ob_start();
    include_once '../../public/css/estilos-reporte.html';
    include_once '../contents/content-reporte4.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'es', uniqid(), true, array(20, 15, 15, 15));
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('reporte4.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}