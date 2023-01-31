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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">


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
            <div id="hamburg"><button onclick="menu()"><i class="icon-menu demo-icon"></i></button></div>
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

                <div class="respo_2 prod">
                    <h1 class="center"> KLEJ Sopro FF450 </h1>
                    <div style="display:flex;">
                        <div class="respo_2 center">
                            <img class="" src="zdj/produkty/sopro.jpg" alt="Klej Sopro" >
                        </div>
                        <div class="respo_2 marg">
                            <p>Wysokoelastyczna, cementowa zaprawa klejowa cienkowarstwowa do przyklejania i mocowania płytek ceramicznych, niewrażliwych na przebarwienia kamieni naturalnych i konglomeratów.</p>
                            <p class="cena_prod">59 zł</p>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        
                        <button class="button_prod">DODAJ DO KOSZYKA</button>
                    </div>
                </div>

                <div class="respo_2 prod">
                    <h1 class="center"> KLEJ Botament M19 </h1>
                    <div style="display:flex;">
                        <div class="respo_2 center">
                            <img class="" src="zdj/produkty/botament.jpg" alt="Klej botament" >
                        </div>
                        <div class="respo_2 marg">
                            <p>Cienkowarstwowa zaprawa klejowa do klejenia większości okładzin ceramicznych wewnątrz i na zewnątrz. Bardzo stabilna, mrozodporna, na ściaby i podłogi</p>
                            <p class="cena_prod">39 zł</p>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        
                        <button class="button_prod">DODAJ DO KOSZYKA</button>
                    </div>
                </div>
                
            </div>

            <div class="respo_1">

                <div class="respo_2 prod">
                    <h1 class="center"> SILIKON Sopro </h1>
                    <div style="display:flex;">
                        <div class="respo_2 center">
                            <img class="" src="zdj/produkty/silikon.jpg" alt="Silikon Sopro" >
                        </div>
                        <div class="respo_2 marg">
                            <p>Silikon sanitarny jest gotowym do użytku, utwardzającym się pod wpływem kwasu octowego silikonowym materiałem uszczelniającym, o działaniu hamującym rozwój grzybów, przeznaczonym do elastycznego wypełniania spoin łączących.</p>
                            <p class="cena_prod">35 zł</p>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        
                        <button class="button_prod">DODAJ DO KOSZYKA</button>
                    </div>
                </div>

                <div class="respo_2 prod">
                    <h1 class="center"> FUGA Sopro </h1>
                    <div style="display:flex;">
                        <div class="respo_2 center">
                            <img class="" src="zdj/produkty/fuga.jpg" alt="Fuga sopro" >
                        </div>
                        <div class="respo_2 marg">
                            <p>Cementowa, elastyczna, szybkowiążąca zaprawa fugowa o trwałych barwach i wysokiej wytrzymałości, nie tworząca osadów wapiennych na powierzchni</p>
                            <p class="cena_prod">89 zł</p>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        
                        <button class="button_prod">DODAJ DO KOSZYKA</button>
                    </div>
                </div>
                
            </div>

            
    </div>

    </div>
    <p class="stopka">Rafał Bartoń 2022 &copy;</p>
<script src="scripts/navbar.js"></script>
<script src="scripts/menu.js"></script>
<script src="scripts/bcktop.js"></script>
<script src="scripts/alert.js"></script>
</body>

</html>