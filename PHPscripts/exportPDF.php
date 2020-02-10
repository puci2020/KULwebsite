<?php

include "db_connection.php";

require ('TFPDF/tfpdf.php');

if (isset($_POST['exportPDF'])){

    $sql = "select * from graduates";
    $result = $connect->query($sql);

    $pdf = new tFPDF('l', 'mm', 'A4');
    $pdf -> AddPage();
    $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $pdf->SetFont('DejaVu','',14);
    $pdf -> Cell(10,10,"ID", 1,0,'C');
    $pdf -> Cell(50,10,"Imię", 1,0,'C');
    $pdf -> Cell(50,10,"Nazwisko", 1,0,'C');
    $pdf -> Cell(70,10,"E-mail", 1,0,'C');
    $pdf -> Cell(20,10,"Rocznik", 1,0,'C');
    $pdf -> Cell(40,10,"Dieta", 1,0,'C');
    $pdf -> Cell(20,10,"Płatność", 1,1,'C');

    while($row = mysqli_fetch_array($result)){
        $pdf -> Cell(10,10,$row['ID_user'], 1,0,'C');
        $pdf -> Cell(50,10,$row['first_name'], 1,0,'C');
        $pdf -> Cell(50,10,$row['last_name'], 1,0,'C');
        $pdf -> Cell(70,10,$row['email'], 1,0,'C');
        $pdf -> Cell(20,10,$row['year'], 1,0,'C');
        $pdf -> Cell(40,10,$row['diet'], 1,0,'C');
        $pdf -> Cell(20,10,$row['payment'], 1,1,'C');
    }

    $pdf -> Output();
}
?>
