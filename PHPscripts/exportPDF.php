<?php

include "db_connection.php";

require('TFPDF/tfpdf.php');

if (isset($_POST['exportPDF'])) {

    $sql = "select * from graduates";
    $result = $connect->query($sql);

    $pdf = new tFPDF('l', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->AddFont('DejaVu', '', 'DejaVuSans.ttf', true);
    $pdf->SetFont('DejaVu', '', 10);
    $pdf->Cell(7, 10, "ID", 1, 0, 'C');
    $pdf->Cell(45, 10, "Imię", 1, 0, 'C');
    $pdf->Cell(45, 10, "Nazwisko", 1, 0, 'C');
    $pdf->Cell(60, 10, "E-mail", 1, 0, 'C');
    $pdf->Cell(15, 10, "Rocznik", 1, 0, 'C');
    $pdf->Cell(30, 10, "Dieta", 1, 0, 'C');
    $pdf->Cell(35, 10, "Niepełnosprawny", 1, 0, 'C');
    $pdf->Cell(25, 10, "Czy opiekun", 1, 0, 'C');
    $pdf->Cell(17, 10, "Płatność", 1, 1, 'C');

    while ($row = mysqli_fetch_array($result)) {
        $pdf->Cell(7, 10, $row['ID_user'], 1, 0, 'C');
        $pdf->Cell(45, 10, $row['first_name'], 1, 0, 'C');
        $pdf->Cell(45, 10, $row['last_name'], 1, 0, 'C');
        $pdf->Cell(60, 10, $row['email'], 1, 0, 'C');
        $pdf->Cell(15, 10, $row['year'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['diet'], 1, 0, 'C');
        $pdf->Cell(35, 10, $row['disabled'], 1, 0, 'C');
        $pdf->Cell(25, 10, $row['care'], 1, 0, 'C');
        $pdf->Cell(17, 10, $row['payment'], 1, 1, 'C');
    }

    $pdf->Output();
}
?>
