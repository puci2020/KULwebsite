<?php
include 'db_connection.php';

if (!isset($_SESSION['name'])) {
    header("Location: login.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='musisz sie zalogować';</script>");

}

try {
    if (isset($_POST['saveEmail'])) {

        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $accoutnType = $_SESSION['type'];
        $formEmail = $connect->real_escape_string($_POST['email']);

        $query1 = "select * from register where email='$formEmail'";
        $result1 = $connect->query($query1);

        $query2 = "select * from users where email='$formEmail'";
        $result2 = $connect->query($query2);
        if ($accoutnType == "teacher") {
            if (mysqli_num_rows($result1) > 0) {
                header("Location: edit_account.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='ten email jest zajety';</script>");
            } else {

                if (is_dir('uploads/' . $email)) {
                    rename('uploads/' . $email, 'uploads/' . $formEmail);

                    $query1 = "UPDATE register SET email='$formEmail' where email='$email'";
                    $connect->query($query1);

                    $_SESSION['email'] = $formEmail;

                    header("Location: edit_account.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='Email zmieniony pomyślnie';</script>");
                }
            }


        }
        if ($accoutnType == "student") {
            if (mysqli_num_rows($result2) > 0) {
                header("Location: edit_account.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='ten email jest zajety';</script>");
            } else {
                $query1 = "UPDATE users SET email='$formEmail' where email='$email'";
                $connect->query($query1);

                $_SESSION['email'] = $formEmail;

                header("Location: edit_account.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='Email zmieniony pomyślnie';</script>");
            }
        }
    }

    if (isset($_POST['savePassword'])) {

        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $formEmail = $connect->real_escape_string($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $accoutnType = $_SESSION['type'];

        if ($accoutnType == "teacher") {
            $query1 = "UPDATE register SET password='$password' where email='$email'";
            $connect->query($query1);
            header("Location: edit_account.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='Hasło zmienione pomyślnie';</script>");
        }

        if ($accoutnType == "student") {
            $query1 = "UPDATE users SET password='$password' where email='$email'";
            $connect->query($query1);
            header("Location: edit_account.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='Hasło zmienione pomyślnie';</script>");

        }

    }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
