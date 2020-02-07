<?php
include 'PHPscripts/db_connection.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='musisz sie zalogować';</script>");
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style2.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zjazd absolwentów</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="admin.php">Panel administracyjny</a>

    <div class="form-inline">
<!--        <form action="">-->
<!--            <input class="form-control" type="search" placeholder="Szukaj" aria-label="Szukaj osoby">-->
<!--            <button class="btn btn-info" type="submit">Wyszukaj</button>-->
<!--        </form>-->
        <div id="login_name">
            <?php
            echo $_SESSION["email"];
            ?>
            <a type="button" name="edit" href="editAccount.php" class="btn btn-info">Edytuj dane logowania</a>
            <a type="button" name="logout" href="PHPscripts/logout.php" class="btn btn-danger">Wyloguj</a>
        </div>
    </div>
</nav>

<main>
    <div class="container">
        <div class="alert alert-danger alert-dismissible" id="message">
            <div id="error"></div>
            <a href="#" class="close" onclick="closeMsg()" aria-label="close">&times;</a>
        </div>

        <div class="alert alert-success alert-dismissible" id="message2">
            <div id="error2"></div>
            <a href="#" class="close" onclick="closeMsg2()" aria-label="close">&times;</a>
        </div>

        <div class="card" id="login">

            <?php
            if (isset($_GET['message'])) {
                $message = $_GET['message'];
                echo $message;
            }
            ?>
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Email</th>
                <th scope="col">Rocznik</th>
                <th scope="col">Dieta</th>
                <th scope="col">Opłata</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>1999</td>
                <td>Mięsna</td>
                <td>Nie</td>
                <td><button class="btn btn-success">Zapłacono</button>
                    <button class="btn btn-danger">Nie zapłacono</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>1967</td>
                <td>Mięsna</td>
                <td>Nie</td>
                <td><button class="btn btn-success">Zapłacono</button>
                    <button class="btn btn-danger">Nie zapłacono</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>1999</td>
                <td>Wegetariańska</td>
                <td>Nie</td>
                <td><button class="btn btn-success">Zapłacono</button>
                    <button class="btn btn-danger">Nie zapłacono</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</main>

</body>
</html>
<script>
    function closeMsg() {
        document.getElementById('message').style.display = 'none';
    }

    function closeMsg2() {
        document.getElementById('message2').style.display = 'none';
    }
</script>
