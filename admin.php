<?php
include 'PHPscripts/db_connection.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='Musisz sie zalogować!';</script>");
}else{
    $now = time();
    if ($now > $_SESSION["timeout"]){
        session_destroy();
        header("Location: login.php?message=<script type='text/javascript'>document.getElementById('message').style.display='block'; document.getElementById('error').innerText='Nastąpiło wylogowanie!';</script>");
    }
}

if(isset($_GET['edit'])){
    $ID = $_GET['edit'];
    $connect->query("UPDATE graduates SET payment='TAK' WHERE ID_user = $ID");
}

if(isset($_GET['delete'])){
    $ID = $_GET['delete'];
    $connect->query("UPDATE graduates SET payment='NIE' WHERE ID_user = $ID");
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/bootstrap.min.css">
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
        <form method="post" action="PHPscripts/exportCSV.php">
            <button type="submit" name="export" class="btn btn-success">Pobierz tabele CSV</button>
        </form>
        <form method="post" action="PHPscripts/exportPDF.php">
            <button type="submit" name="exportPDF" class="btn btn-success">Pobierz tabele PDF</button>
        </form>
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
    <div class="wrapper">
        <div class="alert alert-danger alert-dismissible" id="message">
            <div id="error"></div>
            <a href="#" class="close" onclick="closeMsg()" aria-label="close">&times;</a>
        </div>

        <div class="alert alert-success alert-dismissible" id="message2">
            <div id="error2"></div>
            <a href="#" class="close" onclick="closeMsg2()" aria-label="close">&times;</a>
        </div>

        <div class="alert alert-warning alert-dismissible" id="message3">
            <div id="error3">Pamiętaj, aby się wylogować! Automatyczne wylogowanie nastąpi po 3 godzinach</div>
            <a href="#" class="close" onclick="closeMsg3()" aria-label="close">&times;</a>
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
                    <th scope="col">Niepełnosprawna</th>
                    <th scope="col">Potrzebny<br> opiekun</th>
                    <th scope="col">Opłata</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "select * from graduates";
                $result = $connect->query($sql);

                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['ID_user'];
                    $firstName = $row['first_name'];
                    $lastName = $row['last_name'];
                    $email = $row['email'];
                    $year = $row['year'];
                    $diet = $row['diet'];
                    $disabled = $row['disabled'];
                    $care = $row['care'];
                    $payment = $row['payment'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo $id?></th>
                        <td><?php echo $firstName?></td>
                        <td><?php echo $lastName?></td>
                        <td><?php echo $email?></td>
                        <td><?php echo $year?></td>
                        <td><?php echo $diet?></td>
                        <td><?php echo $disabled?></td>
                        <td><?php echo $care?></td>
                        <td><?php echo $payment?></td>
                        <td>
                            <a href="admin.php?edit=<?php echo $id; ?>" class="btn btn-success">Zapłacono</a>
                            <a href="admin.php?delete=<?php echo $id; ?>" class="btn btn-danger">Nie zapłacono</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
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

    function closeMsg3() {
        document.getElementById('message3').style.display = 'none';
    }

</script>
