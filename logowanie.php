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

            <div class="respo_2 prod">
                <h1 class="center"> Logowanie </h1>
                <div>
                    <form action="logowanie.php"  method="post">
                    <table class="form_log" style="margin:0 auto;">
                        
                        <tr>
                            <td><input type="text" name="login" id="login" required placeholder="Nazwa użytkownika"></td>
                        </tr>
                        <tr>
                            <td><p><input type="password" name="haslo" id="haslo" required placeholder="Hasło"></p></td>
                        </tr>
                        <input type="text" name="rodzaj" value="log" hidden>
                        <tr>
                            <td style="text-align: right;">
                                <input type="submit" value="ZALOGUJ">
                            </td>
                        </tr>
                    
                    </table></form>
                    <?php
                    if(isset($_POST["rodzaj"]))
                    {
                        if($_POST["rodzaj"] == "log")
                        {
                            $login = $_POST["login"];
                            $haslo = md5($_POST["haslo"]);

                            $baza = new mysqli("localhost","root","","strona_studia");
                            $baza->set_charset("utf8");
                            $zap = "SELECT * FROM konta WHERE login = '$login' AND haslo = '$haslo'";
                            $wynik = $baza->query($zap);
                            if( $wynik->num_rows == 1){
                                $pom = $wynik->fetch_assoc();
                                $_SESSION['login'] = $pom['login'];
                                $_SESSION['zalogowany'] = true;
                                echo $_SESSION['login'];
                                header('Location: zalog.php');

                                //
                            }
                            else
                            {
                                ?><p style="color:red;">Błędny login lub hasło!</p><?php
                            }
                            
                            $baza->close();
                        }
                    }

                ?>
                
                </div>
            </div>

            <div class="respo_2 prod">
                <h1 class="center"> Rejestracja </h1>
                <div id="skrypt_log_1" style="display: none; text-align: center;padding: 10px;"></div>
                <div>
                    <form action="logowanie.php"  method="post">
                    <table class="form_log" style="margin:0 auto;">
                        
                        <tr>
                            <td><input  type="text" name="login_r" id="login_r" required placeholder="Nazwa użytkownika"></td>
                        </tr>
                        <tr>
                            <td><p><input type="password" name="haslo_r" id="haslo_r" required placeholder="Hasło" onkeyup="check_pass()"></p></td>
                        </tr>
                        <tr style="border:0;">
                            <td><p><input type="password" name="haslo_r2" id="haslo_r2" required placeholder="Powtórz hasło" onkeyup="check_pass()"></p></td>
                        </tr>
                        <tr>
                            <td id="haslo_error" style="display: none;"><p style="padding: 0; color:red;">PODANE HASŁA NIE SĄ TAKIE SAME</p></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="imie_r" id="imie_r" required placeholder="Imię"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="nazwisko_r" id="nazwisko_r" required placeholder="Nazwisko"></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="email_r" id="email_r" required placeholder="E-mail"></td>
                        </tr>
                            <input type="text" name="rodzaj" value="rej" hidden>
                        <tr>
                            <td style="text-align: right;">
                                <input type="submit" value="ZAREJESTRUJ">
                            </td>
                        </tr>
                    
                    </table>
                </form>
                <?php
                    if(isset($_POST["rodzaj"]))
                    {
                        if($_POST["rodzaj"] == "rej")
                        {
                            $login = $_POST["login_r"];
                            $haslo = $_POST["haslo_r"];
                            $mail = $_POST["email_r"];

                            $baza = new mysqli("localhost","root","","strona_studia");
                            $baza->set_charset("utf8");
                            $zap = "SELECT * FROM konta WHERE login = '$login'";
                            $wynik = $baza->query($zap);
                            if( $wynik->num_rows != 0)
                            {
                                ?><p style="color:red;">Podany login jest już używany!</p><?php
                            }
                            else
                            {
                                $zap = "SELECT * FROM konta WHERE mail = '$mail'";
                                $wynik = $baza->query($zap);
                                if( $wynik->num_rows != 0)
                                {
                                    ?><p style="color:red;">Podany e-mail jest już używany!</p><?php
                                }
                                else
                                {
                                    $haslo = md5($haslo);
                                    $zap = "INSERT INTO konta VALUES(null,'$login','$haslo','$mail')";
                                    $baza->query($zap);
                                    ?><p style="color:green;">Zarejestrowano!</p><?php
                                }
                            }
                            $baza->close();
                        }
                    }

                ?>
                
                </div>
            </div>
            
            
            
        </div>
    </div>

    </div>
    <p class="stopka">Rafał Bartoń 2022 &copy;</p>
<script src="scripts/navbar.js"></script>
<script src="scripts/menu.js"></script>
<script src="scripts/bcktop.js"></script>
<script src="scripts/log.js"></script>
<script src="scripts/error.js"></script>
</body>

</html>