<?php
?>

<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="animate.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6bc5f061dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zjazd absolwentów</title>
</head>
<body>

<div class="first">
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-md-6 col-sm-12">-->
    <!--                <div class="name">-->
    <!--                    <p class="one animated bounceInUp" style="animation-delay: .5s">ZJAZD ABSOLWENTÓW</br></p>-->
    <!--                        <p class="two animated bounceInUp" style="animation-delay: .8s">PSYCHOLOGII</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-6 col-sm-12">-->
    <!--                <div class="form-box animated fadeIn" style="animation-delay: 1.5s">-->
    <!--                    <h1>Zapisz się</h1>-->
    <!--                    <form>-->
    <!--                        <label>Imię</label>-->
    <!--                        <input type="text" name="firstName" id="firstName" placeholder="Podaj imię">-->
    <!--                        <label>Nazwisko</label>-->
    <!--                        <input type="text" name="lastName" id="lastName" placeholder="Podaj nazwisko">-->
    <!--                        <label>E-mail</label>-->
    <!--                        <input type="text" name="email" id="email" placeholder="Podaj email">-->
    <!---->
    <!--                        <input type="submit" name="submit" id="submit" value="Zapisz">-->
    <!--                    </form>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</div>

<div class="caption text-center col">
    <h2 class="animated bounceInUp" style="animation-delay: .5s">ZJAZD ABSOLWENTÓW</h2>
    <h1 class="animated bounceInUp" style="animation-delay: .8s">PSYCHOLOGII</h1>
    <h3 class="animated bounceInUp" style="animation-delay: 1.1s">KATOLICKIEGO UNIWERSYSYTETU LUBELSKIEGO</h3>
    <a class="btn btn-outline-light btn-lg animated bounceInDown" style="animation-delay: 1.3s" href="#sec-1">ZAPISZ
        SIĘ</a>
</div>
<div class="content" id="sec-1">
    <div class="title">
        <h2>Najważniejsze informacje</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 boxes">
                alskdaslkdj
            </div>
            <div class="col-sm-12 col-md-6 boxes">
                alskdaslkdj
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 boxes">
                alskdaslkdj
            </div>
            <div class="col-sm-12 col-md-6 boxes">
                alskdaslkdj
            </div>
        </div>
    </div>
</div>
<div class="first secound" id="sec-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="form-box">
                    <h1>Zapisz się</h1>
                    <form>
                        <label>Imię</label>
                        <input type="text" name="firstName" id="firstName" placeholder="Podaj imię">
                        <label>Nazwisko</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Podaj nazwisko">
                        <label>E-mail</label>
                        <input type="text" name="email" id="email" placeholder="Podaj email">

                        <input type="submit" name="submit" id="submit" value="Zapisz">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Wróć na górę"><i class="fas fa-angle-up fa-2x"></i></button>
</body>
</html>
<script type="text/javascript">
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
