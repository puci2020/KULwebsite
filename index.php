<?php
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/lightbox.min.css">
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
        if (strpos($fullUrl, "registrationSC=exist") == true) {
            echo "<div class='alert alert-danger' id='alertForm'>Podany email został już zarejestrowany w bazie!</div>";
        } else
            if (strpos($fullUrl, "registrationSC=success") == true) {
                echo "<div class='alert alert-success' id='alertForm'>Rejestracja zakończona sukcesem! Prosimy o wniesienie opłaty na podany numer konta do 30 kwietnia. Informacje dotyczące przelewu znajdzesz w sekcji KOSZT klikając w link
                       </div>";
            }
        ?>
    </div>
    <h2>II ZJAZD ABSOLWENTÓW</h2>
    <h1>PSYCHOLOGII</h1>
    <h3>KATOLICKIEGO UNIWERSYTETU LUBELSKIEGO</h3>
<!--    <h3>27-28 czerwca 2020</h3>-->
    <div class='alert alert-warning' id="epidemia"><h4><p>Szanowni Państwo,</p>
        <p>W związku z niepewną sytuacją spowodowaną pandemią oraz w trosce o zdrowie nas wszystkich z przykrością informujemy, że II Zjazd Absolwentów Psychologii zostaje w tym roku odwołany. Mamy nadzieję, że nasze wysiłki organizacyjne nie pójdą na marne, a Wasza energia do spotkania zostanie i zobaczymy się cali i zdrowi w czerwcu 2021.</p>

        *Rejestracja zostaje wstrzymana, a tym z Państwa, którzy już dokonali opłaty w najbliższych dniach zwrócimy pieniądze. </h4></div>
<!--    <a class="btn btn-outline-light btn-lg" href="#sec-1">WIĘCEJ INFORMACJI</a>-->
</div>
<div class="content" id="sec-1">
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="close">&times;</span>
            <h5><b>Ważne!</b></h5>
            <p>*Na opłatę czekamy do 30 kwietnia, po tym czasie koszt wzięcia udziału w wydarzeniu wzrasta do 170zł.</p>
            <p>*Koszt nie obejmuje noclegu!</p>
            <div class="line"></div>
            <h5><b>Dane do przelewu:</b></h5>
            <b>Nazwa odbiorcy:</b>
            <p>Fundacja Rozwoju KUL</p>
            <b>Numer rachunku: </b>
            <p>03 1050 1953 1000 0090 3079 8087</p>
            <b>Tytuł przelewu: </b>
            <p>Zjazd absolwentów 2020</p>
        </div>
    </div>
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
                    Rejestracja uczestników rusza o 9:00 w Gmachu Głównym<br>
                    Planowane rozpoczęcie wydarzenia o 12:30
                </div>
            </div>
            <div class="col-lg-6 col-md-12 boxes" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
                <div class="boxes-icon">
                    <img src="img/money.png">
                </div>
                <div class="boxes-content">
                    <p>KOSZT</p>
                    Koszt wzięcia udziału to 150zł*<br>
                    Prosimy przelać kwotę na rachunek bankowy<br>
                    Więcej informacji odnośnie płatności znajdziesz klikając <a href="#sec-1" id="popup"> tutaj</a>
                </div>
            </div>
            <div class="space"></div>
            <div class="col-lg-6 col-md-12 boxes" data-aos="fade-up" data-aos-once="true">
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
            <div class="col-lg-6 col-md-12 boxes" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
                <div class="boxes-icon">
                    <img src="img/mail.png">
                </div>
                <div class="boxes-content">
                    <p>KONTAKT</p>
                    Wszelkie pytania prosimy kierować na:<br>
                    <a href="mailto:absolwent.psychologii@gmail.com" id="mail">absolwent.psychologii@gmail.com</a>
                </div>
            </div>
            <div class="space"></div>
            <div class="space button">
                <a class="btn btn-outline-light btn-lg animated" href="#sec-2" data-aos="flip-up" data-aos-delay="500"
                   data-aos-once="true">ZAPISZ
                    SIĘ JUŻ
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
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-once="true">
                <a href="img/gallery-link/1.jpg" data-lightbox="mygallery"> <img src="img/gallery-small/1.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="200"
                 data-aos-once="true">
                <a href="img/gallery-link/2.jpg" data-lightbox="mygallery"><img src="img/gallery-small/2.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="300"
                 data-aos-once="true">
                <a href="img/gallery-link/3.jpg" data-lightbox="mygallery"><img src="img/gallery-small/3.jpg"></a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-once="true">
                <a href="img/gallery-link/4.jpg" data-lightbox="mygallery"> <img src="img/gallery-small/4.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="200"
                 data-aos-once="true">
                <a href="img/gallery-link/5.jpg" data-lightbox="mygallery"><img src="img/gallery-small/5.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="300"
                 data-aos-once="true">
                <a href="img/gallery-link/6.jpg" data-lightbox="mygallery"><img src="img/gallery-small/6.jpg"></a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-once="true">
                <a href="img/gallery-link/7.jpg" data-lightbox="mygallery"><img src="img/gallery-small/7.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="200"
                 data-aos-once="true">
                <a href="img/gallery-link/8.jpg" data-lightbox="mygallery"><img src="img/gallery-small/8.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="300"
                 data-aos-once="true">
                <a href="img/gallery-link/9.jpg" data-lightbox="mygallery"><img src="img/gallery-small/9.jpg"></a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-once="true">
                <a href="img/gallery-link/10.jpg" data-lightbox="mygallery"><img src="img/gallery-small/10.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="200"
                 data-aos-once="true">
                <a href="img/gallery-link/11.jpg" data-lightbox="mygallery"><img src="img/gallery-small/11.jpg"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 boxes-img" data-aos="flip-left" data-aos-delay="300"
                 data-aos-once="true">
                <a href="img/gallery-link/12.jpg" data-lightbox="mygallery"><img src="img/gallery-small/12.jpg"></a>
            </div>
        </div>
    </div>
</div>
<div class="content" id="sec-3">
    <div class="title">
        <h2>Program wydarzenia</h2>
        <h4>Szczegółowy program udostępnimy wkrótce</h4>
    </div>
    <!--    <div class="container" data-aos="fade-up" data-aos-once="true">-->
    <!--        <div class="row header">27 czerwca</div>-->
    <!--        <div class="row item">-->
    <!--                <div class="plan-hour">9:00 - 10:00</div>-->
    <!--                <div class="plan-desc">Rejestracja</div>-->
    <!--        </div>-->
    <!--        <div class="row item">-->
    <!--            <div class="plan-hour">9:00 - 10:00</div>-->
    <!--            <div class="plan-desc">Rejestracja</div>-->
    <!--        </div>-->
    <!--        <div class="row item">-->
    <!--            <div class="plan-hour">9:00 - 10:00</div>-->
    <!--            <div class="plan-desc">Rejestracja</div>-->
    <!--        </div>-->
    <!--        <div class="row item">-->
    <!--            <div class="plan-hour">9:00 - 10:00</div>-->
    <!--            <div class="plan-desc">Rejestracja</div>-->
    <!--        </div>-->
    <!--        <div class="row item">-->
    <!--            <div class="plan-hour">9:00 - 10:00</div>-->
    <!--            <div class="plan-desc">Rejestracja</div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="container" data-aos="flip-up" data-aos-delay="300"-->
    <!--         data-aos-once="true">-->
    <!--        <div class="row header">28 czerwca</div>-->
    <!--        <div class="row item">-->
    <!--            <div class="plan-hour">9:00 - 10:00</div>-->
    <!--            <div class="plan-desc">Rejestracja</div>-->
    <!--        </div>-->
    <!--    </div>-->
</div>
<div class="first secound" id="sec-2">
    <div id="myModal2" class="modal">
        <div class="modal-content">
            <span class="close" id="close2">&times;</span>
            <p>Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do organizacji i realizacji
                II Zjazdu Absolwentów Psychologii KUL 2020 (zgodnie z ustawą z dnia 10 maja 2018 roku o ochronie danych
                osobowych
                (Dz. Ustaw z 2018, poz. 1000) oraz zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE)
                2016/679 z
                dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i
                w
                sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (RODO)).</p>
            <p>Dane osobowe będą przetwarzane wyłącznie w celu organizacji i przeprowadzenia Zjazdu.
                Dane nie będą udostępniane odbiorcom danych w rozumieniu art. 7 pkt 6 ustawy o ochronie danych
                osobowych.
                Osobie, której dane dotyczą, przysługuje prawo dostępu do treści jej danych oraz możliwość ich
                poprawiania.
                Podanie danych osobowych jest dobrowolne, przy czym odmowa ich podania jest równoznaczna z brakiem
                możliwości
                uczestniczenia w procesie rejestracyjnym na ww. Zjazd a tym samym uczestnictwa w nim. </p>
        </div>
    </div>

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
                <label>Rok ukończenia studiów</label>
                <select id="year" name="Rocznik" required
                        oninvalid="setCustomValidity('Pole Rocznik nie może pozostać puste')"
                        onchange="setCustomValidity('')">
                </select>
            </div>
            <div class="group">
                <label>Dieta</label>
                <select id="diet" name="Dieta" required
                        oninvalid="setCustomValidity('Pole Dieta nie może pozostać puste')"
                        onchange="setCustomValidity('')">
                    <option value='' disabled selected>Wybierz rodzaj diety</option>
                    <option value='Standardowa'>Standardowa</option>
                    <option value='Wegetariańska'>Wegetariańska</option>
                    <option value='Wegańska'>Wegańska</option>
                    <option value='Bezglutenowa'>Bezglutenowa</option>
                </select>
            </div>
            <div class="group">
                <div class="group" id="radio">
                    <label>Osoba z niepełnosprawnością</label>
                    <div class="radio-group">
                        <input type="radio" name="check" id="check2" onclick="showOptions1()" value="Tak">
                        <label for="check2">Tak</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" name="check" id="check1" onclick="hideOptions1()" value="Nie">
                        <label for="check1">Nie</label>
                    </div>
                </div>
                <div class="group" id="care">
                    <label>Czy potrzebujesz opiekuna/wolontariusza na czas zjazdu</label>
                    <div class="radio-group">
                        <input type="radio" name="checkC" id="check4" value="Tak">
                        <label for="check4">Tak</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" name="checkC" id="check3" value="Nie">
                        <label for="check3">Nie</label>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="rodo" id="rodo" value="Zgadzam się">
                <span>Zapoznałem się z <a href="#sec-2" id="popup2">informacją o przetwarzaniu danych </a></span>
            </div>
            <input type="submit" name="submit" id="submit" value="Zapisz">
        </form>
    </div>
</div>
<div class="footer">
    <img src="img/absolwentkul.jpg" id="absolwent" alt="absolwent_kul">
    <img src="img/tpkul.jpg" id="tp" alt="towarzystwo_przyjaciol_kul">
    <img src="img/fundacjakul.jpg" alt="fundacja_rozwoju_kul">
    <div class="author"> Adam Pucicki © 2020 All rights reserved.</div>
</div>
<div class="scrollTop">
    <button onclick="topFunction()" id="myBtn" title="Wróć na górę"><img src="img/up-arrow.png"></button>
</div>
</body>


<div id="simplecookienotification_v01" style="display: block; z-index: 99999; min-height: 35px; width: 100%; position: fixed; background: rgb(43, 54, 67); border-image: initial; border-top: 1px solid rgb(160, 178, 192); text-align: center; color: rgb(119, 119, 119); bottom: 0px; left: 0px; border-radius: 0px; right: 0px; border-right-color: rgb(160, 178, 192); border-bottom-color: rgb(160, 178, 192); border-left-color: rgb(160, 178, 192);">
    <div style="padding:10px; margin-left:15px; margin-right:15px; font-size:14px; font-weight:normal;">
        <span id="simplecookienotification_v01_powiadomienie">Ta strona używa plików cookie w celu usprawnienia i ułatwienia dostępu do serwisu oraz prowadzenia danych statystycznych. Dalsze korzystanie z tej witryny oznacza akceptację tego stanu rzeczy.</span><span id="br_pc_title_html"><br></span>
        <a id="simplecookienotification_v01_polityka" href="http://jakwylaczyccookie.pl/polityka-cookie/" style="color: rgb(160, 178, 192);">Polityka Prywatności</a><span id="br_pc2_title_html"> &nbsp;&nbsp; </span>
        <a id="simplecookienotification_v01_info" href="http://jakwylaczyccookie.pl/jak-wylaczyc-pliki-cookies/" style="color: rgb(160, 178, 192);">Jak wyłączyć cookies?</a><span id="br_pc3_title_html"> &nbsp;&nbsp; </span>
        <a id="simplecookienotification_v01_info2" href="https://nety.pl/cyberbezpieczenstwo" style="color: rgb(160, 178, 192);">Cyberbezpieczeństwo</a><div id="jwc_hr1" style="height: 10px; display: none;"></div>
        <a id="okbutton" href="javascript:simplecookienotification_v01_create_cookie('simplecookienotification_v01',1,7);" style="position: absolute; background: rgb(160, 178, 192); color: rgb(255, 255, 255); padding: 5px 15px; text-decoration: none; font-size: 12px; font-weight: normal; border: 0px solid rgb(43, 54, 67); border-radius: 5px; bottom: 5px; right: 5px;">AKCEPTUJĘ</a><div id="jwc_hr2" style="height: 10px; display: none;"></div>
    </div>
</div>
<script type="text/javascript">var galTable= new Array(); var galx = 0;</script><script type="text/javascript">function simplecookienotification_v01_create_cookie(name,value,days) { if (days) { var date = new Date(); date.setTime(date.getTime()+(days*24*60*60*1000)); var expires = "; expires="+date.toGMTString(); } else var expires = ""; document.cookie = name+"="+value+expires+"; path=/"; document.getElementById("simplecookienotification_v01").style.display = "none"; } function simplecookienotification_v01_read_cookie(name) { var nameEQ = name + "="; var ca = document.cookie.split(";"); for(var i=0;i < ca.length;i++) { var c = ca[i]; while (c.charAt(0)==" ") c = c.substring(1,c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length); }return null;}var simplecookienotification_v01_jest = simplecookienotification_v01_read_cookie("simplecookienotification_v01");if(simplecookienotification_v01_jest==1){ document.getElementById("simplecookienotification_v01").style.display = "none"; }</script></html>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="JSscripts/lightbox-plus-jquery.min.js"></script>
<script>
    AOS.init({
        disable: 'mobile'
    });

</script>
<script src="JSscripts/indexValidation.js"></script>
