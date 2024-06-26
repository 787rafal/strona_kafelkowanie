<?php
session_start();

if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true))
{
    header('Location: zalog.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="respo.css">
    <link rel="stylesheet" href="fontello/css/animation.css">
    <link rel="stylesheet" href="fontello/css/fontello.css">
    <link rel="shortcut icon" href="ikona.ico">
    <title>Kafelkowanie</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>
<body onscroll="sticky_nav()"> 
    <div class="loader">
        <div></div>
    </div>
    <div class="content">
    <a href="javascript:" id="return-to-top"><i class="icon-up-open"></i></a>
    <div id="wrapper" >
        <a class="logo_link" href="index.html">
            <img src="logo.jpg" alt="logo" id="logo"></a>
        
        <div id="navbar">
            <div class="nav_option"><a href="index.html">Strona główna</a></div>
            <div class="nav_option"><a href="realizacje.html">Nasze realizacje</a></div>
            <div class="nav_option"><a href="produkty.html">Produkty</a></div>
            <div class="nav_option"><a href="kontakt.html">Kontakt</a></div>
            <div class="nav_option"><a href="logowanie.html">Logowanie</a></div>
            <div id="hamburg"><button onclick="menu()"><i class="demo-icon icon-menu"></i></button></div>
            <div id="ham_option">
                <table>
                    <tr>
                        <td><a href="index.html">Strona główna</a></td>
                    </tr>
                    <tr>
                        <td><a href="realizacje.html">Nasze realizacje</a></td>
                    </tr>
                    <tr>
                        <td><a href="produkty.html">Produkty</a></td>
                    </tr>
                    <tr>
                        <td><a href="kontakt.html">Kontakt</a></td>
                    </tr>
                    <tr>
                        <td><a href="logowanie.html">Logowanie</a></td>
                    </tr>
                </table>
            </div>
        </div>

        <div id="main">
            <div class="respo_1">
                <div class="respo_2" style="flex:2;">
                    <p>     Twoja łazienka juz cie sie nie podoba? Planujesz jej remont? Urządzasz sobie nowe mieszkanie? Jeżeli tak to trafiłeś idealnie! Nasza firma działa na rynku od 2017 roku i specjalizuje się w glazurnictwie. Realizujemy wszelkie zachcianki klientów oraz posiadamy same pozytywne opinie! Na co jeszcze czekasz? Zadzwoń do nas i przekonaj sie sam!</p>
                    <hr>
                    <div class="respo_2 center">
                        <p>Zakres naszych usług:</p>
                        <ul style="margin:2px">
                            <li>Kafelkowanie ścian</li>
                            <li>Kafelkowanie posadzek</li>
                            <li>Demontaż starych kafli</li>
                            <li>Biały montaż</li>
                        </ul>
                        <p style="color:#f73f3f;font-weight: bold;font-size: 20px;">WYCENA GRATIS!</p>
                    </div>
                </div>
                <div class="respo_2">
                    <img src="zdj/strona_g_jpg_4.jpg" alt="Zdjecie łazienki" >
                </div>
            </div>
            <div class="respo_1">
                <div class="respo_2">
                    <img src="zdj/strona_g_jpg_3.jpg" alt="Zdjecie łazienki" >
                </div>
                <div class="respo_2 center">
                    <h1>CENNIK</h1>
                    <table class="cennik">
                        <tr>
                            <td>Cena za metr (Posadzki)</td>
                            <td>Cena za metr (Ściany)</td>
                            <td>Cena za godzine (Łazienka)</td>
                            <td>Cena za godzine (Fugowanie)</td>
                        </tr>
                        <tr>
                            <td>50zł</td>
                            <td>60zł</td>
                            <td>65zł</td>
                            <td>30zł</td>
                        </tr>
                    </table>
                    <p style="text-align: right; font-size: 9px;">*Zastrzegamy sobie prawo do zmiany cen</p>
                    <h1 style="text-decoration: underline;">ZADZWON DO NAS I UMÓW SIE NA WYCENE!</h1>
                </div>
            </div>
            <div id="ajax"></div>
        </div>
        
    </div>
    <p class="stopka">Rafał Bartoń 2022 &copy;</p>
</div>
<script src="scripts/navbar.js"></script>
<script src="scripts/menu.js"></script>
<script src="scripts/bcktop.js"></script>
<script src="scripts/loader.js"></script>
<script src="scripts/ajax.js"></script>
</body>

</html>