<?php
include 'db_connection.php';

if(isset($_POST['export'])){
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('ID', 'Imie', 'Nazwisko', 'Email', 'Rocznik', 'Dieta', 'Niepełnosprawność', 'Potrzeba opiekuna', 'Płatność'));
    $sql = "select * from graduates order by ID_user ASC";
    $result = $connect->query($sql);
    while ($row = mysqli_fetch_assoc($result)){
        fputcsv($output, $row);
    }
    fclose($output);
}
?>
