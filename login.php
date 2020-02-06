<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/loginStyle.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zjazd absolwentów</title>
</head>
<body>
<div class="container">

    <div class="card" id="login">

        <div class="card-header">
            <h3 class="panel-title">Logowanie</h3>

        </div>
        <div class="card-body">
            <form method="post" action="PHPscripts/loginSC.php">
                <div class="form-group">
                    <label>Podaj email</label>
                    <input type="text" id="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Podaj haslo</label>
                    <input type="password" id="password" name="password" class="form-control"/>
                </div>
                <div class="form-group" align="center">
                    <input type="submit" name="login" class="btn btn-primary" value="Zaloguj"/>

                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>