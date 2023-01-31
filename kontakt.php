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

                <div class="respo_2 prod" style="flex:3 !important;">
                    <h1 class="center"> Formularz Kontaktowy </h1>
                    <div>
                        <form action="kontakt.php"  method="post" enctype="multipart/form-data" >
                        <table id="form_kon" style="margin:0 auto;">
                            
                            <tr>
                                <td><p>Temat: </p></td>
                                <td>
                                    <input type="radio" checked name="temat" id="Wycena" value="wycena">
                                    <label for="Wycena">Wycena</label><br>
                                    <input type="radio" name="temat" id="Termin" value="termin">
                                    <label for="Termin">Wolny termin</label><br>
                                    <input type="radio" name="temat" id="Inny" value="inny">
                                    <label for="Inny">Inny</label>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Dane personalne: </p></td>
                                <td>
                                    <input type="text" name="imie" id="imie" required placeholder="Imię" style="width:100%;"><br>
                                    <input type="text" name="nazwisko" id="nazwisko" required placeholder="Nazwisko" style="width:100%;">
                                </td>
                            </tr>
                            <tr>
                                <td><p>Dane Kontaktowe: </p></td>
                                <td>
                                    <input type="tel" name="telefon" id="telefon" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="Nr Tel (123-456-789)" style="width:100%;"><br>
                                    <input type="email" name="mail" id="mail" required placeholder="E-mail" style="width:100%;">
                                </td>
                            </tr>
                            <tr>
                                <td><p>Treść Wiadomości: </p></td>
                                <td>
                                    <textarea name="wiadomosc" required id="wiadomosc" placeholder="Napisz wiadomość" style="width:100%; max-width: 1000px;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Dodatkowe pliki: </p></td>
                                <td>
                                    <input type="file" name="zalacznik" id="zalacznik" style="width:100%; max-width: 1000px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Wyślij Wiadomość">
                                </td>
                                <td>
                                    <input type="reset" value="Wyczyść">
                                </td>
                            </tr>
                        
                        </table></form>
                        
                    </div>
                </div>

                <div class="respo_2">
                    
                    <div style="display:flex;">
                        <table id="ikony">
                            <tr>
                                <td><a href="mailto:kafelkownie@firma.pl"><i class="icon-mail kontakt-icon"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="tel:+123456789"><i class="icon-phone kontakt-icon"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="https://www.google.com/search?q=Us%C5%82ugi+Glazurnicze+-+%C5%81ukasz+Ocik&hl=pl&sxsrf=ALiCzsbd7BLspEWJrI4clsgR1q66wlgXmg%3A1669154208819&source=hp&ei=oEV9Y7L8LfeH9u8Pm8mW4A0&iflsig=AJiK0e8AAAAAY31TsLZBgKurM8GqXRcEOzFbT6P_3IzT&ved=0ahUKEwiyzMD948L7AhX3g_0HHZukBdwQ4dUDCAc&uact=5&oq=Us%C5%82ugi+Glazurnicze+-+%C5%81ukasz+Ocik&gs_lcp=Cgdnd3Mtd2l6EAMyAggmOgcIIxDqAhAnUJYGWJYGYKAKaAFwAHgAgAFciAFckgEBMZgBAKABAqABAbABCg&sclient=gws-wiz" target="_blank"><i class="icon-google kontakt-icon"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="https://www.facebook.com/PlytkowanieOpole" target="_blank"><i class="icon-facebook-squared kontakt-icon"></i></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <?php
                //temat=wycena&imie=Rafał&nazwisko=Bartoń&telefon=879-907-698&mail=rafal%40gmail.com&wiadomosc=siemanko%2C+tresc+elo&zalacznik=CCNA+1+v7.pdf
                if(isset($_POST["temat"])&&isset($_POST["imie"])&&isset($_POST["nazwisko"])&&isset($_POST["telefon"])&&isset($_POST["mail"])&&isset($_POST["wiadomosc"]))
                {
                    ?>
                    <div class="respo_1 prod" style="display: block;">
                        <h1>Jakie dane zostały wprowadzone w formularzu???</h1>
                        <p>Temat: <?=$_POST["temat"]?></p>
                        <p>Imie: <?=$_POST["imie"]?></p>
                        <p>Nazwisko: <?=$_POST["nazwisko"]?></p>
                        <p>Telefon: <?=$_POST["telefon"]?></p>
                        <p>Mail: <?=$_POST["mail"]?></p>
                        <p>Tresc Wiadomości: <?=$_POST["wiadomosc"]?></p>
                        <p>Załącznik: <?=$_FILES["zalacznik"]["name"]?></p>                       
                    </div>
                    <?php
                    $lokalizacja = './wgranePliki/'.$_FILES["zalacznik"]["name"];
                    //var_dump($lokalizacja);
                    move_uploaded_file($_FILES["zalacznik"]["tmp_name"],$lokalizacja);
                    //echo $_FILES['zalacznik'];
                    //var_dump($_FILES);
                    $baza = new mysqli("localhost","root","","strona_studia");
                    $baza->set_charset("utf8");
                    //$lokalizacja = 'localhost/strona_kafelkowanie/wgranePliki/'.$_FILES["zalacznik"]["name"];
                    $zap = 'INSERT INTO zapytanie VALUES (null,"'.$_POST["temat"].'","'.$_POST["imie"].'","'.$_POST["nazwisko"].'","'.$_POST["telefon"].'","'.$_POST["mail"].'","'.$_POST["wiadomosc"].'","'.$lokalizacja.'")';
                    $baza->query($zap);
                    $baza->close();
                }
                //$temat = $_POST['']
            ?>
        </div>

    </div>
    <p class="stopka">Rafał Bartoń 2022 &copy;</p>
<script src="scripts/navbar.js"></script>
<script src="scripts/menu.js"></script>
<script src="scripts/bcktop.js"></script>
</body>

</html>