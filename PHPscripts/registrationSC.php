<?php

include 'db_connection.php';

try {
    if (isset($_POST['submit'])) {

        $firstName = $connect->real_escape_string($_POST['firstName']);
        $lastName = $connect->real_escape_string($_POST['lastName']);
        $email = $connect->real_escape_string($_POST['email']);
        $year = $_POST['Rocznik'];
        $diet = $_POST['food'];

        $query1 = "select email from graduates where email='$email'";
        $result1 = $connect->query($query1);

        $msgbox = header("Location: ../index.php?message=<script type='text/javascript'>alert('Rejestracja udana');</script>");

        if (mysqli_num_rows($result1) > 0 || mysqli_num_rows($result2) > 0) {
//            header("Location: ../index.php?message=<script type='text/javascript'>alert('Podany email został już zarejestrowany');</script>");
            header("Location: ../index.php");
            echo '<script type="text/javascript">';
            echo ' alert("Podany email został już zarejestrowany")';  //not showing an alert box.
            echo '</script>';
        } else {
            $sql = "insert into graduates values (DEFAULT, '$firstName', '$lastName', '$email', '$year', '$diet', DEFAULT)";
            $connect->query($sql);
            echo $msgbox;
        }

    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
