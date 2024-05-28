<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logowanie</title>
    <link rel="stylesheet" href="logowaniecss.css">
</head>
<body>
    <div id="kontener">
        <?php
            @$uzytkownik=$_POST['uzytkownik'];
            @$haslo=$_POST['haslo'];
            @$imie=$_POST['imie'];
            @$nazwisko=$_POST['nazwisko'];
            @$miejscowosc_zamieszkania=$_POST['miejscowosc_zamieszkania'];
            @$kod_pocztowy=$_POST['kod_pocztowy'];
            @$adres=$_POST['adres'];
            @$numer_telefonu=$_POST['numer_telefonu'];
            @$email=$_POST['email'];
            $con=mysqli_connect('localhost','root','','biuro_podrozy');
            $sprawdz='SELECT uzytkownik, haslo FROM użytkownicy;';
            $dodaj_klienci="INSERT INTO klienci (imie, nazwisko, miejscowosc_zamieszkania,kod_pocztowy,adres,numer_telefonu,email) VALUES ('$imie', '$nazwisko', '$miejscowosc_zamieszkania','$kod_pocztowy','$adres','$numer_telefonu','$email')";
            $dodaj_logowanie="INSERT INTO logowanie_klienci (uzytkownik, haslo) VALUES ('$uzytkownik','$haslo')"
            $query=mysqli_query($con,$sprawdz);
            $wynik=0;
            $uzytkownik_tab=[];
            $haslo_tab=[];
            $form='<div id="tak">
            <h1>Zaloguj</h1>
            <form action="index.php" method="post">
                        Login: <br>
                        <input type="text" name="uzytkownik" id="uzytkownik"> <br>
                        Hasło: <br>
                        <input type="text" name="haslo" id="haslo"> <br>
                        <input type="submit" value="zaloguj" name="przycisk">
                        <input type="submit" value="zarejestruj" name="przycisk">
                    </form>
            </div>
        </div>';
            while($row=mysqli_fetch_array($query)){
                array_push($uzytkownik_tab, $row[1]);
                array_push($haslo_tab, $row[2]);
            }
            if(@$_POST['przycisk']=='zaloguj'){
                if(in_array($uzytkownik,$uzytkownik_tab) and in_array($haslo,$haslo_tab)){
                    header('location: egzamin.php');
                }else{
                    if((!isset($uzytkownik) or $uzytkownik==null) or (!isset($haslo) or $haslo==null)){
                        echo "<script type='text/javascript'>alert('Wypełnij wszystkie pola!');</script>";
                    }else{
                        echo "<script type='text/javascript'>alert('Taki użytkownik nie istnieje!');</script>";
                    }
                }
            }
            if(@$_POST['przycisk']=='zarejestruj'){
                $form='<div id="tak">
                <h1>Zaloguj</h1>
                    <form action="index.php" method="post">
                        Login: <br>
                        <input type="text" name="uzytkownik" id="uzytkownik" placeholder="login"> <br>
                        Hasło: <br>
                        <input type="text" name="haslo" id="haslo" placeholder="hasło"> <br>
                        Imie: <br>
                        <input type="text" name="imie" id="imie" placeholder="Adam"> <br>
                        Nazwisko: <br>
                        <input type="text" name="nazwisko" id="nazwisko" placeholder="Nowak"> <br>
                        Miejscowosc zamieszkania: <br>
                        <input type="text" name="miejscowosc_zamieszkania" id="miejscowosc_zamieszkania" placeholder="Warszawa"> <br>
                        Kod pocztowy: <br>
                        <input type="text" name="kod_pocztowy" id="kod_pocztowy" placeholder="00-000"> <br>
                        Adres zamieszkania: <br>
                        <input type="text" name="adres" id="adres" placeholder="Gołębia 7"> <br>
                        Numer telefonu: <br>
                        +<input type="number" name="numer_telefonu" id="numer_telefonu" placeholder="48111111111"> <br>
                        Email: <br>
                        <input type="text" name="email" id="email" placeholder="email@gmail.com"> <br>
                        <input type="submit" value="zaloguj" name="przycisk">
                        <input type="submit" value="zarejestruj" name="przycisk">
                    </form>
                    </div>
                </div>';
                if((!isset($uzytkownik) or $uzytkownik==null) or (!isset($haslo) or $haslo==null) or (!isset($imie) or $imie==null) or (!isset($nazwisko) or $nazwisko==null) or (!isset($miejscowosc_zamieszkania) or $miejscowosc_zamieszkania==null) or (!isset($kod_pocztowy) or $kod_pocztowy==null) or (!isset($adres) or $adres==null) or (!isset($numer_telefonu) or $numer_telefonu==null) or (!isset($email) or $email==null)){
                    echo "<script type='text/javascript'>alert('Wypełnij wszystkie pola!');</script>";
                }else{
                    echo "<script type='text/javascript'>alert('Nowy użytkownik dodany!');</script>";
                }
            }
            echo $form;
            mysqli_close($con);
            ?>
        <hr>
</body>
</html>
    
