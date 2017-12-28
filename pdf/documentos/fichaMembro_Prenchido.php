<?php
	require_once('../html2pdf.class.php');
	require_once('../mpdf/mpdf.php');
    // get the HTML
     ob_start();
     include('res/ver_fichaMembro_preenchido.php');
    $content = ob_get_clean();

        // init HTML2PDF
        $html2pdf   = new mPDF('c', 'A4');
        // display the full page
        $html2pdf->SetDisplayMode('fullpage');
		$html2pdf->SetHTMLFooter("<small><div align='botton'><label style='text-align=left' class='h6'>&copy; Copyright <strong>FRELIMO</strong></label></div> <div align='right'>{PAGENO}</div></small>");
        // convert
		$html2pdf->writeHTML($content);
        // send the PDF
		$html2pdf->Output('Ficha do Membro.pdf', 'I');
		
		