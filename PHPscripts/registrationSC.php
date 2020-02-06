<?php

include 'db_connection.php';

try {
    if (isset($_POST['register'])) {

        $name = $connect->real_escape_string($_POST['name']);
        $email = $connect->real_escape_string($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $accountType = $_POST['typeAccount'];

        if ($accountType == "option1") {
            $query1 = "select email from register where email='$email'";
            $result1 = $connect->query($query1);
            $query2 = "select email from users where email='$email'";
            $result2 = $connect->query($query2);

            $msgbox = header("Location: registration.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='rejestracja udana';</script>");

            if (mysqli_num_rows($result1) > 0 || mysqli_num_rows($result2) > 0) {
                header("Location: registration.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='ten email jest zajety';</script>");
            } else {
                $sql = "insert into register values (DEFAULT, '$name', '$email', '$password')";
                $connect->query($sql);
                echo $msgbox;
            }
        } else {
            $query1 = "select email from users where email='$email'";
            $result1 = $connect->query($query1);
            $query2 = "select email from register where email='$email'";
            $result2 = $connect->query($query2);

            $msgbox = header("Location: registration.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='rejestracja udana';</script>");

            if (mysqli_num_rows($result1) > 0 || mysqli_num_rows($result2) > 0) {
                header("Location: registration.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='ten email jest zajety';</script>");
            } else {
                $sql = "insert into users values (DEFAULT, '$name', '$email', '$password')";
                $connect->query($sql);
                echo $msgbox;

            }
        }
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
