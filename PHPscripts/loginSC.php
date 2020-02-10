<?php

include 'db_connection.php';

try {
    if (isset($_POST['login'])) {

        $email = $connect->real_escape_string($_POST['email']);
        $password = $connect->real_escape_string($_POST['password']);

        $query = "SELECT * FROM administrators where email = '$email'";
        $result = $connect->query($query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                if (password_verify($password, $row["password"])) {
                    session_start();
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["time"] = time();
                    $_SESSION["timeout"] = $_SESSION["time"] + 10800;

                    header("Location: ../admin.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='Zalogowany!';</script>");
                } else {
                    header("Location: ../login.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='Błędne hasło!';</script>");
                }
            }
        } else {
            header("Location: ../login.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='Podany email jest nieprawidłowy!';</script>");
        }
    }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
