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
                if ($password == $row["password"]) {
//                    password_verify($password, $row["password"])
                    $_SESSION["name"] = $row["email"];

                    header("Location: ../admin.php?message=<script type='text/javascript'>document.getElementById('message2').style.display='block'; document.getElementById('error2').innerText='zalogowany';</script>");
                } else {
                    header("Location: ../login.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='błędne hasło';</script>");
                }
            }
        } else {
            header("Location: login.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='podany email jest nieprawidłowy';</script>");
        }
    }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
