<?php
include 'db_connection.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='musisz sie zalogować';</script>");
}

try {
    if (isset($_POST['saveEmail'])) {

        $email = $_SESSION['email'];

        $formEmail = $connect->real_escape_string($_POST['email']);

        $query1 = "select * from administrators where email='$formEmail'";
        $result1 = $connect->query($query1);

        if (mysqli_num_rows($result1) > 0) {
            header("Location: ../editAccount.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='ten email jest zajety';</script>");
        } else {

            $query1 = "UPDATE administrators SET email='$formEmail' where email='$email'";
            $connect->query($query1);

            $_SESSION['email'] = $formEmail;

            header("Location: ../editAccount.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='Email zmieniony pomyślnie';</script>");
        }
    }

    if (isset($_POST['savePassword'])) {

        $email = $_SESSION['email'];
        $formEmail = $connect->real_escape_string($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query1 = "UPDATE administrators SET password='$password' where email='$email'";
        $connect->query($query1);
        $_SESSION['email'] = $formEmail;
        header("Location: ../editAccount.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='Hasło zmienione pomyślnie';</script>");

    }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
