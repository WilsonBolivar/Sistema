<?php
require('force_justify.php');

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','C',10);
//Set the interior cell margin to 1cm
$pdf->cMargin=10;
$y=$pdf->GetY();
$pdf->MultiCell(190,10,"Hola  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo  asd asdas das da sda sd asd  asd asd as da sd asd as das das da sd adsa da d asd sadas Mundo",0,'J',0);
$pdf->Output();

?>
