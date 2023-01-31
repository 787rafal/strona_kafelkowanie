<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
    header('Location: logowanie.php');
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
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
    <script>
        function tabelka(){
            check1 = document.getElementById("check1").checked;
            check2 = document.getElementById("check2").checked;
            //console.log(check1);
            //console.log(check2);
            tab1 = document.getElementById("tab1").style;
            tab2 = document.getElementById("tab2").style;
            tab3 = document.getElementById("tab3").style;
            tab23 = document.getElementById("tab23").style;
            if(!check1 && !check2){
                tab1.display = "";
                tab2.display = "none";
                tab3.display = "none";
                tab23.display = "none";
            }
            else if(check1 && !check2){
                tab1.display = "none";
                tab2.display = "";
                tab3.display = "none";
                tab23.display = "none";
            }
            else if(!check1 && check2){
                tab1.display = "none";
                tab2.display = "none";
                tab3.display = "";
                tab23.display = "none";
            }
            else if(check1 && check2){
                tab1.display = "none";
                tab2.display = "none";
                tab3.display = "none";
                tab23.display = "";
            }
        }
    </script>


</head>
<body> 

<?php

    $baza = new mysqli("localhost","root","","strona_studia");
    $baza->set_charset("utf8");


    //var_dump($_POST);
    //print_r(array_keys($_POST));
    if(isset($_POST['usun_k'])){
        $xxx = array_keys($_POST);
        $id = $xxx[1];
        $zap = "DELETE FROM klient WHERE id_klient = $id";
        $baza->query($zap);
        $zap = "DELETE FROM adres WHERE klient_id = $id";
        $baza->query($zap);
        $zap = "DELETE FROM zamowienie WHERE klient_id = $id";
        $baza->query($zap);
    }

    if(isset($_POST['usun_a'])){
        $xxx = array_keys($_POST);
        $id = $xxx[1];
        $zap = "DELETE FROM adres WHERE id_adres = $id";
        $baza->query($zap);
    }

    if(isset($_POST['usun_t'])){
        $xxx = array_keys($_POST);
        $id = $xxx[1];
        $zap = "DELETE FROM towar WHERE id_towar = $id";
        $baza->query($zap);
        $zap = "DELETE FROM zamowienie WHERE towar_id = $id";
        $baza->query($zap);
    }

    if(isset($_POST['usun_z'])){
        $xxx = array_keys($_POST);
        $id = $xxx[1];
        $zap = "DELETE FROM zamowienie WHERE id_zam = $id";
        $baza->query($zap);
    }

    if(isset($_POST['usun_zap'])){
        $xxx = array_keys($_POST);
        $id = $xxx[1];
        $zap = "DELETE FROM zapytanie WHERE id_zap = $id";
        $baza->query($zap);
    }

    if(isset($_POST['dodaj_k'])){
        //var_dump($_POST);
        $zap = "INSERT INTO klient VALUES (null,'".$_POST["imie"]."','".$_POST["nazwisko"]."','".$_POST["data"]."','".$_POST["pesel"]."')";
        $baza->query($zap);
    }

    if(isset($_POST['dodaj_a'])){
        //var_dump($_POST);
        $zap = "INSERT INTO adres VALUES (null,'".$_POST["id"]."','".$_POST["miasto"]."','".$_POST["ulica"]."','".$_POST["numer_dom"]."')";
        $baza->query($zap);
    }

    if(isset($_POST['dodaj_t'])){
        //var_dump($_POST);
        $zap = "INSERT INTO towar VALUES (null,'".$_POST["nazwa"]."','".$_POST["cena"]."','".$_POST["stan"]."')";
        $baza->query($zap);
    }
    if(isset($_POST['dodaj_zam'])){
        //var_dump($_POST);
        $zap = "INSERT INTO zamowienie VALUES (null,'".$_POST["id"]."','".$_POST["id_t"]."','".$_POST["ilosc"]."','".$_POST["data"]."')";
        $baza->query($zap);
    }
?>







    <div id="wrapper" >      
        <div id="main">
        <div class="respo_1">

            <div class="respo_2 prod">
                <h1 class="center"> BAZA DANYCH</h1>
                <div>
                    <p>USERNAME: <?=$_SESSION['login']?></p>
                    <p style="text-align: left;"><a style="color:red;" href="wylog.php">WYLOGUJ SIE!</a></p>
                    <p style="text-align:center;">
                    <span>Adres </span><input type="checkbox" name="c" id="check1" onchange="tabelka()"><span>|</span>
                    <span>Zamównienie </span><input type="checkbox" name="c2" id="check2" onchange="tabelka()"><br>
                    <br>
                    </p>
                    <table id="tab1" style="margin-left: auto; margin-right: auto;">
                        <tr>
                            <th>ID klient</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Data urodzenia</th>
                            <th>Pesel</th>
                        </tr>
                    <?php
                    $zap = "SELECT * FROM klient";
                    $wynik = $baza->query($zap);
                    while($pom = $wynik->fetch_assoc() ){
                       ?>
                       <tr>
                            <td><?=$pom['id_klient']?></td>
                            <td><?=$pom['Imie']?></td>
                            <td><?=$pom['Nazwisko']?></td>
                            <td><?=$pom['data_ur']?></td>
                            <td><?=$pom['pesel']?></td>
                        </tr>
                       <?php 
                    }                    
                    ?>
                    </table>

                    <table id="tab2" style="margin-left: auto; margin-right: auto;display:none;">
                        <tr>
                            <th>ID klient</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Data urodzenia</th>
                            <th>Pesel</th>
                            <th>Miasto</th>
                            <th>Ulica</th>
                            <th>Numer Domu</th>
                        </tr>
                    <?php
                    $zap = "SELECT * FROM klient JOIN adres on id_klient = klient_id";
                    $wynik = $baza->query($zap);
                    while($pom = $wynik->fetch_assoc() ){
                       ?>
                       <tr>
                            <td><?=$pom['id_klient']?></td>
                            <td><?=$pom['Imie']?></td>
                            <td><?=$pom['Nazwisko']?></td>
                            <td><?=$pom['data_ur']?></td>
                            <td><?=$pom['pesel']?></td>
                            <td><?=$pom['miasto']?></td>
                            <td><?=$pom['ulica']?></td>
                            <td><?=$pom['numer_domu']?></td>
                        </tr>
                       <?php 
                    }                    
                    ?>
                    </table>

                    <table id="tab23" style="margin-left: auto; margin-right: auto;display:none;">
                        <tr>
                            <th>ID klient</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Data urodzenia</th>
                            <th>Pesel</th>
                            <th>Miasto</th>
                            <th>Ulica</th>
                            <th>Numer Domu</th>
                            <th>Nazwa Towaru</th>
                            <th>Cena/sztuka</th>
                            <th>Ilosc</th>
                            <th>Łączna cena</th>
                            <th>Data</th>
                        </tr>
                    <?php
                    $zap = "SELECT * FROM klient JOIN zamowienie on id_klient = klient_id join towar on towar_id = id_towar JOIN adres on adres.klient_id = id_klient";
                    $wynik = $baza->query($zap);
                    while($pom = $wynik->fetch_assoc() ){
                       ?>
                       <tr>
                            <td><?=$pom['id_klient']?></td>
                            <td><?=$pom['Imie']?></td>
                            <td><?=$pom['Nazwisko']?></td>
                            <td><?=$pom['data_ur']?></td>
                            <td><?=$pom['pesel']?></td>
                            <td><?=$pom['miasto']?></td>
                            <td><?=$pom['ulica']?></td>
                            <td><?=$pom['numer_domu']?></td>
                            <td><?=$pom['nazwa']?></td>
                            <td><?=$pom['cena']?> zł</td>
                            <td><?=$pom['ilosc']?></td>
                            <td><?=$pom['cena']*$pom['ilosc']?> zł</td>
                            <td><?=$pom['data']?></td>
                        </tr>
                       <?php 
                    }                    
                    ?>
                    </table>



                    <table id="tab3" style="margin-left: auto; margin-right: auto; display:none;">
                        <tr>
                            <th>ID klient</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Data urodzenia</th>
                            <th>Pesel</th>
                            <th>Nazwa Towaru</th>
                            <th>Cena/sztuka</th>
                            <th>Ilosc</th>
                            <th>Łączna cena</th>
                            <th>Data</th>
                        </tr>
                    <?php
                    $zap = "SELECT * FROM klient JOIN zamowienie on id_klient = klient_id join towar on towar_id = id_towar";
                    $wynik = $baza->query($zap);
                    while($pom = $wynik->fetch_assoc() ){
                       ?>
                       <tr>
                            <td><?=$pom['id_klient']?></td>
                            <td><?=$pom['Imie']?></td>
                            <td><?=$pom['Nazwisko']?></td>
                            <td><?=$pom['data_ur']?></td>
                            <td><?=$pom['pesel']?></td>
                            <td><?=$pom['nazwa']?></td>
                            <td><?=$pom['cena']?> zł</td>
                            <td><?=$pom['ilosc']?></td>
                            <td><?=$pom['cena']*$pom['ilosc']?> zł</td>
                            <td><?=$pom['data']?></td>
                        </tr>
                       <?php 
                    }                    
                    ?>
                    </table>
                    <hr>
                    <p>Usuwanie danych:</p>
                    <form action="" method="post">
                    <table style="margin-left: auto; margin-right: auto;">
                    <caption>Klient</caption>
                        <tr>
                            <th>ID Klient</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Data urodzenia</th>
                            <th>Pesel</th>
                            <th>USUN</th>
                        </tr>
                    <?php
                    $zap = "SELECT * FROM klient";
                    $wynik = $baza->query($zap);
                    while($pom = $wynik->fetch_assoc() ){
                       ?>
                       <tr>
                            <td><?=$pom['id_klient']?></td>
                            <td><?=$pom['Imie']?></td>
                            <td><?=$pom['Nazwisko']?></td>
                            <td><?=$pom['data_ur']?></td>
                            <td><?=$pom['pesel']?></td><input type="text" hidden value="usun" name="usun_k">
                            <td><input type="submit" name="<?=$pom['id_klient']?>" VALUE="X"></td>
                        </tr>
                       <?php 
                    }                    
                    ?>
                    </table>
                    </form>



                    <form action="" method="post">
                    <br>
                    <table style="margin-left: auto; margin-right: auto;">
                    <caption>Adres</caption>
                        <tr>
                            <th>ID Adres</th>
                            <th>Klient ID</th>
                            <th>Miasto</th>
                            <th>Ulica</th>
                            <th>Numer domu</th>
                            <th>USUN</th>
                        </tr>
                    <?php
                    $zap = "SELECT * FROM adres";
                    $wynik = $baza->query($zap);
                    while($pom = $wynik->fetch_assoc() ){
                       ?>
                       <tr>
                            <td><?=$pom['id_adres']?></td>
                            <td><?=$pom['klient_id']?></td>
                            <td><?=$pom['miasto']?></td>
                            <td><?=$pom['ulica']?></td>
                            <td><?=$pom['numer_domu']?></td><input type="text" hidden value="usun" name="usun_a">
                            <td><input type="submit" name="<?=$pom['id_adres']?>" VALUE="X"></td>
                        </tr>
                       <?php 
                    }                    
                    ?>
                    </table>
                    </form>



                    <form action="" method="post">
                    <br>
                    <table style="margin-left: auto; margin-right: auto;">
                    <caption>Towar</caption>
                        <tr>
                            <th>ID Towar</th>
                            <th>Nazwa</th>
                            <th>Cena</th>
                            <th>Stan</th>
                            <th>USUN</th>
                        </tr>
                    <?php
                    $zap = "SELECT * FROM towar";
                    $wynik = $baza->query($zap);
                    while($pom = $wynik->fetch_assoc() ){
                       ?>
                       <tr>
                            <td><?=$pom['id_towar']?></td>
                            <td><?=$pom['nazwa']?></td>
                            <td><?=$pom['cena']?></td>
                            <td><?=$pom['stan']?></td><input type="text" hidden value="usun" name="usun_t">
                            <td><input type="submit" name="<?=$pom['id_towar']?>" VALUE="X"></td>
                        </tr>
                       <?php 
                    }                    
                    ?>
                    </table>
                    </form>


                    <form action="" method="post">
                    <br>
                    <table style="margin-left: auto; margin-right: auto;">
                    <caption>Zamówienie</caption>
                        <tr>
                            <th>ID zamówienia</th>
                            <th>Klient ID</th>
                            <th>Towar ID</th>
                            <th>Ilosc</th>
                            <th>Data</th>
                            <th>USUN</th>
                        </tr>
                    <?php
                    $zap = "SELECT * FROM zamowienie";
                    $wynik = $baza->query($zap);
                    while($pom = $wynik->fetch_assoc() ){
                       ?>
                       <tr>
                            <td><?=$pom['id_zam']?></td>
                            <td><?=$pom['klient_id']?></td>
                            <td><?=$pom['towar_id']?></td>
                            <td><?=$pom['ilosc']?></td>
                            <td><?=$pom['data']?></td><input type="text" hidden value="usun" name="usun_z">
                            <td><input type="submit" name="<?=$pom['id_zam']?>" VALUE="X"></td>
                        </tr>
                       <?php 
                    }                    
                    ?>
                    </table>
                    </form>


                    <form action="" method="post">
                    <br>
                    <table style="margin-left: auto; margin-right: auto;">
                    <caption>Zapytania</caption>
                        <tr>
                            <th>ID zapytania</th>
                            <th>Temat</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Telefon</th>
                            <th>Mail</th>
                            <th>Tresc</th>
                            <th>Załącznik</th>
                            <th>USUN</th>
                        </tr>
                    <?php
                    $zap = "SELECT * FROM zapytanie";
                    $wynik = $baza->query($zap);
                    while($pom = $wynik->fetch_assoc() ){
                       ?>
                       <tr>
                            <td><?=$pom['id_zap']?></td>
                            <td><?=$pom['temat']?></td>
                            <td><?=$pom['imie']?></td>
                            <td><?=$pom['nazwisko']?></td>
                            <td><?=$pom['telefon']?></td>
                            <td><?=$pom['mail']?></td>
                            <td><?=$pom['tresc']?></td>
                            <td><a target="_blank" href="<?=$pom['zalacznik']?>"><?=$pom['zalacznik']?></a><input type="text" hidden value="usun" name="usun_zap">
                            <td><input type="submit" name="<?=$pom['id_zap']?>" VALUE="X"></td>
                        </tr>
                       <?php 
                    }                    
                    ?>
                    </table>
                    </form>

                    <hr>
                    <p>Dodawanie danych:</p>
                    <form action="" method="post">
                    <table style="margin-left: auto; margin-right: auto;">
                    <caption>Klient</caption>
                        <tr>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Data urodzenia</th>
                            <th>Pesel</th>
                            <th>Dodaj</th>
                        </tr>
                       <tr>
                            <td><input type="text" name="imie"></td>
                            <td><input type="text" name="nazwisko"></td>
                            <td><input type="date" name="data"></td>
                            <td><input type="text" name="pesel"></td><input type="text" hidden value="dodaj" name="dodaj_k">
                            <td><input type="submit"  VALUE="DODAJ"></td>
                        </tr>
                    </table>
                    </form>

                    <br>
                    <form action="" method="post">
                    <table style="margin-left: auto; margin-right: auto;">
                    <caption>Adres</caption>
                        <tr>
                            <th>Klient ID</th>
                            <th>Miasto</th>
                            <th>Ulica</th>
                            <th>Numer_domu</th>
                            <th>Dodaj</th>
                        </tr>
                       <tr>
                            <td>
                                <select name="id" >
                                    <?php
                                    $zap = "SELECT * FROM klient";
                                    $wynik = $baza->query($zap);
                                    while($pom = $wynik->fetch_assoc() ){
                                        ?>
                                        <option value="<?=$pom['id_klient']?>"><?=$pom['id_klient']?>. <?=$pom['Imie']?> <?=$pom['Nazwisko']?></option>
                                        <?php 
                                    }                    
                                    ?>
                                </select>                        
                            </td>
                            <td><input type="text" name="miasto"></td>
                            <td><input type="text" name="ulica"></td>
                            <td><input type="text" name="numer_dom"></td><input type="text" hidden value="dodaj" name="dodaj_a">
                            <td><input type="submit"  VALUE="DODAJ"></td>
                        </tr>
                    </table>
                    </form>


                    <br>
                    <form action="" method="post">
                    <table style="margin-left: auto; margin-right: auto;">
                    <caption>Towar</caption>
                        <tr>
                            <th>Nazwa</th>
                            <th>Cena</th>
                            <th>Stan</th>
                            <th>Dodaj</th>
                        </tr>
                       <tr>
                            <td><input type="text" name="nazwa"></td>
                            <td><input type="number" name="cena"></td>
                            <td><input type="number" name="stan"></td><input type="text" hidden value="dodaj" name="dodaj_t">
                            <td><input type="submit"  VALUE="DODAJ"></td>
                        </tr>
                    </table>
                    </form>
                

                    <br>
                    <form action="" method="post">
                    <table style="margin-left: auto; margin-right: auto;">
                    <caption>Zamówienie</caption>
                        <tr>
                            <th>Klient ID</th>
                            <th>Towar ID</th>
                            <th>Ilosc</th>
                            <th>Data</th>
                            <th>Dodaj</th>
                        </tr>
                       <tr>
                            <td>
                                <select name="id" >
                                    <?php
                                    $zap = "SELECT * FROM klient";
                                    $wynik = $baza->query($zap);
                                    while($pom = $wynik->fetch_assoc() ){
                                        ?>
                                        <option value="<?=$pom['id_klient']?>"><?=$pom['id_klient']?>. <?=$pom['Imie']?> <?=$pom['Nazwisko']?></option>
                                        <?php 
                                    }                    
                                    ?>
                                </select>                        
                            </td>
                            <td>
                                <select name="id_t" >
                                    <?php
                                    $zap = "SELECT * FROM towar";
                                    $wynik = $baza->query($zap);
                                    while($pom = $wynik->fetch_assoc() ){
                                        ?>
                                        <option value="<?=$pom['id_towar']?>"><?=$pom['id_towar']?>. <?=$pom['nazwa']?></option>
                                        <?php 
                                    }                    
                                    ?>
                                </select> 
                            </td>
                            <td><input type="number" name="ilosc"></td>
                            <td><input type="date" name="data"></td><input type="text" hidden value="dodaj" name="dodaj_zam">
                            <td><input type="submit"  VALUE="DODAJ"></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>         
        </div>
    </div>

    </div>
    <p class="stopka">Rafał Bartoń 2022 &copy;</p>
    <?php
    $baza->close();
    ?>
</body>

</html>