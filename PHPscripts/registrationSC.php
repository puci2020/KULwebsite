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

        if (mysqli_num_rows($result1) > 0) {
            header("Location: ../index.php?registrationSC=exist");
            exit();
        } else {
            $sql = "insert into graduates values (DEFAULT, '$firstName', '$lastName', '$email', '$year', '$diet', DEFAULT)";
            $connect->query($sql);
            header("Location: ../index.php?registrationSC=success");
            exit();
        }

    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
