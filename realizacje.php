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
                <div class="respo_2 center">
                    <img class="rea_img" src="zdj/strona_g_jpg_1.jpg" alt="Zdjecie łazienki" >
                </div>
                <div class="respo_2 center">
                    <img class="rea_img" src="zdj/strona_g_jpg_5.jpg" alt="Zdjecie łazienki" >
                </div>
                <div class="respo_2 center">
                    <img class="rea_img" src="zdj/strona_g_jpg_6.jpg" alt="Zdjecie łazienki" >
                </div>
            </div>
            <div class="respo_1">
                <div class="respo_2 center">
                    <img class="rea_img" src="zdj/strona_g_jpg_7.jpg" alt="Zdjecie łazienki" >
                </div>
                <div class="respo_2 center">
                    <img class="rea_img" src="zdj/strona_g_jpg_8.jpg" alt="Zdjecie łazienki" >
                </div>
                <div class="respo_2 center">
                    <img class="rea_img" src="zdj/strona_g_jpg_9.jpg" alt="Zdjecie łazienki" >
                </div>
            </div>
            <div class="respo_1">
                <div class="respo_2 center">
                    <img class="rea_img" src="zdj/strona_g_jpg_10.jpg" alt="Zdjecie łazienki" >
                </div>
                <div class="respo_2 center">
                    <img class="rea_img" src="zdj/strona_g_jpg_11.jpg" alt="Zdjecie łazienki" >
                </div>
                <div class="respo_2 center">
                    <img class="rea_img" src="zdj/strona_g_jpg_12.jpg" alt="Zdjecie łazienki" >
                </div>
            </div>

    </div>

    </div>
    <p class="stopka">Rafał Bartoń 2022 &copy;</p>
<script src="scripts/navbar.js"></script>
<script src="scripts/menu.js"></script>
<script src="scripts/bcktop.js"></script>
</body>

</html>