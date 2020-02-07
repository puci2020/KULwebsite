<?php
?>

<!DOCTYPE html>
<html lang="pl">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="style/animations.css"/>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <meta charset="UTF-8"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Zjazd absolwentów</title>
</head>
<body onload="selectGenerate()">

<div class="first">
</div>

<div class="caption text-center col">
   <div class="errorForm">
    <?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullUrl, "registrationSC=exist") == true){
        echo "<div class='alert alert-danger' id='alertForm'>Podany email został już zarejestrowany w bazie</div>";
    }else
        if(strpos($fullUrl, "registrationSC=success") == true){
            echo "<div class='alert alert-success' id='alertForm'>Rejestracja zakończona sukcesem!</div>";
        }
    ?>
   </div>
    <h2 class="animated">II ZJAZD ABSOLWENTÓW</h2>
    <h1 class="animated">PSYCHOLOGII</h1>
    <h3 class="animated">KATOLICKIEGO UNIWERSYSYTETU LUBELSKIEGO</h3>
    <a class="btn btn-outline-light btn-lg animated" href="#sec-1">WIĘCEJ INFORMACJI</a>
</div>

<div class="content" id="sec-1">
    <div class="title">
        <h2>Najważniejsze informacje</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 boxes" data-aos="fade-up" data-aos-once="true">
                <div class="boxes-icon">
                    <img src="img/clock.png">
                </div>
                <div class="boxes-content">
                    <p>KIEDY</p>
                    Zjazd odbędzie się 27-28 czerwca 2020<br>
                    Rejestracja uczestników rusza o 9:00<br>
                    Planowane rozpoczęcie wydarzenia o 12:00
                </div>
            </div>
            <div class="col-lg-6 col-md-12 boxes" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
                <div class="boxes-icon">
                    <img src="img/place.png">
                </div>
                <div class="boxes-content">
                    <p>GDZIE</p>
                    Widzimy się w Gmachu Głównym KUL<br>
                    Al. Racławickie 14<br>
                    20-950 Lublin
                </div>
            </div>
            <div class="space"></div>
            <div class="col-lg-6 col-md-12 boxes" data-aos="fade-up">
                <div class="boxes-icon">
                    <img src="img/money.png">
                </div>
                <div class="boxes-content">
                    <p>KOSZT</p>
                    Koszt wzięcia udziału to 150zł<br>
                    Prosimy przelać kwotę na podany numer konta: 00 1111 2222 3333 4455 5566 6677
                </div>
            </div>
            <div class="col-lg-6 col-md-12 boxes" data-aos="fade-up" data-aos-delay="200">
                <div class="boxes-icon">
                    <img src="img/mail.png">
                </div>
                <div class="boxes-content">
                    <p>KONTAKT</p>
                    Wszelkie pytania prosimy kierować na:<br>
                    absolwent.psychologii@gmail.com
                </div>
            </div>
            <div class="space"></div>
            <div class="space">
                <a class="btn btn-outline-light btn-lg animated" href="#sec-2" data-aos="flip-up" data-aos-delay="500">ZAPISZ SIĘ JUŻ
                    TERAZ!</a>
            </div>
        </div>
    </div>
</div>

<div class="gallery">
    <div class="container">
        <div class="title">
            <h2>Zobacz pierwszą edycję zjazdu</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left">
                <a href="img/gallery-link/1.jpg" data-lightbox="mygallery"> <img src="img/gallery-small/1.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="200">
                <a href="img/gallery-link/2.jpg" data-lightbox="mygallery"><img src="img/gallery-small/2.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="300">
                <a href="img/gallery-link/3.jpg" data-lightbox="mygallery"><img src="img/gallery-small/3.jpg"></a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left">
                <a href="img/gallery-link/4.jpg" data-lightbox="mygallery"> <img src="img/gallery-small/4.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="200">
                <a href="img/gallery-link/5.jpg" data-lightbox="mygallery"><img src="img/gallery-small/5.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="300">
                <a href="img/gallery-link/6.jpg" data-lightbox="mygallery"><img src="img/gallery-small/6.jpg"></a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left">
                <a href="img/gallery-link/7.jpg" data-lightbox="mygallery"><img src="img/gallery-small/7.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="200">
                <a href="img/gallery-link/8.jpg" data-lightbox="mygallery"><img src="img/gallery-small/8.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="300">
                <a href="img/gallery-link/9.jpg" data-lightbox="mygallery"><img src="img/gallery-small/9.jpg"></a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left">
                <a href="img/gallery-link/10.jpg" data-lightbox="mygallery"><img src="img/gallery-small/10.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="200">
                <a href="img/gallery-link/11.jpg" data-lightbox="mygallery"><img src="img/gallery-small/11.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="300">
                <a href="img/gallery-link/12.jpg" data-lightbox="mygallery"><img src="img/gallery-small/12.jpg"></a>
            </div>
        </div>
    </div>
</div>

<div class="first secound" id="sec-2">
    <div class="form-box">
        <h2>Zapisz się</h2>
        <form method="post" id="form" action="PHPscripts/registrationSC.php">
            <div class="group">
                <label>Imię</label>
                <input type="text" name="firstName" id="firstName" placeholder="Podaj imię">
            </div>
            <div class="group">
                <label>Nazwisko</label>
                <input type="text" name="lastName" id="lastName" placeholder="Podaj nazwisko">
            </div>
            <div class="group">
                <label>E-mail</label>
                <input type="text" name="email" id="email" placeholder="Podaj email">
            </div>
            <div class="group">
                <label>Rocznik</label>
                <select id="year" name="Rocznik" required
                        oninvalid="setCustomValidity('Pole Rocznik nie może pozostać puste')"
                        onchange="setCustomValidity('')">
                </select>
            </div>
            <div class="group">
                <label>Dieta</label>
                <div class="radio-group">
                    <input type="radio" name="food" id="food1" value="Mięsna">
                    <label for="food1">Mięsna</label>
                </div>
                <div class="radio-group">
                    <input type="radio" name="food" id="food2" value="Wegetariańska">
                    <label for="food2">Wegetariańska</label>
                </div>
            </div>
            <input type="submit" name="submit" id="submit" value="Zapisz">
        </form>
    </div>
</div>
<div class="footer">
    Adam Pucicki © 2020 All rights reserved.
</div>
<div class="scrollTop">
    <button onclick="topFunction()" id="myBtn" title="Wróć na górę"><img src="img/up-arrow.png"></button>
</div>
</body>
</html>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="JSscripts/lightbox-plus-jquery.min.js"></script>
<script>
    AOS.init({
        once: true

    });
</script>
<script src="JSscripts/indexValidation.js"></script>
