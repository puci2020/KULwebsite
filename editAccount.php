<?php

include 'PHPscripts/editAccountSC.php';



?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style2.css"/>
    <meta charset="UTF-8"/>
    <title>Edytuj dane</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="admin.php">Panel administracyjny</a>

    <div class="form-inline">
        <div id="login_name">
            <?php
            echo $_SESSION["email"];
            ?>
            <a type="button" name="logout" href="PHPscripts/logout.php" class="btn btn-danger">Wyloguj</a>
        </div>
    </div>
</nav>

<div class="container form_style double_form">

    <div class="alert alert-danger alert-dismissible" id="message">
        <div id="error"></div>
        <a href="#" class="close" onclick="closeMsg()" aria-label="close">&times;</a>
    </div>

    <div class="alert alert-success alert-dismissible" id="message2">
        <div id="error2"></div>
        <a href="#" class="close" onclick="closeMsg2()" aria-label="close">&times;</a>
    </div>

    <div class="card">

        <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            echo $message;
        }
        ?>

        <div class="card-header">
            <h3 class="panel-title">Edytuj dane</h3>
        </div>
        <div class="row">
            <div class="card-body col-6" id="edit_password">
                <form method="post" action="PHPscripts/editAccountSC.php">
                    <div class="form-group">
                        <label>Podaj nowe haslo</label>
                        <input type="password" id="password" name="password" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Powtórz nowe haslo</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control"/>
                    </div>
                    <div class="form-group" align="center">
                        <input type="submit" name="savePassword" class="btn btn-success" value="Zmień hasło"/>
                    </div>
                </form>
            </div>
            <div class="card-body col-6" id="edit_email">
                <form method="post" action="PHPscripts/editAccountSC.php">
                    <div class="form-group">
                        <label>Podaj nowy email</label>
                        <input type="text" id="email" name="email" class="form-control"/>
                    </div>
                    <div class="form-group" align="center">
                        <input type="submit" name="saveEmail" class="btn btn-success" value="Zmień email"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="JSscripts/editAccountValidation.js"></script>
</body>
</html>

