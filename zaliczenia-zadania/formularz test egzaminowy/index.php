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
            @$klasa=$_POST['klasa'];
            @$nazwisko=$_POST['nazwisko'];
            @$imie=$_POST['imie'];
            $con=mysqli_connect('localhost','root','','formularz');
            $sprawdz='SELECT klasa, nazwisko, imię FROM użytkownicy;';
            $query=mysqli_query($con,$sprawdz);
            $wynik=0;
            $klasa_tab=[];
            $nazwisko_tab=[];
            $imie_tab=[];
            while($row=mysqli_fetch_array($query)){
                array_push($klasa_tab, $row[0]);
                array_push($nazwisko_tab, $row[1]);
                array_push($imie_tab, $row[2]);
            }
            if(@$_POST['przycisk']=='zaloguj'){
                if(in_array($klasa,$klasa_tab) and in_array($nazwisko,$nazwisko_tab) and in_array($imie,$imie_tab)){
                    header('location: egzamin.php');
                }else{
                    if((!isset($klasa) or $klasa==null) or (!isset($nazwisko) or $nazwisko==null) or (!isset($imie) or $imie==null)){
                        echo "<script type='text/javascript'>alert('Wypełnij wszystkie pola!');</script>";
                    }else{
                        echo "<script type='text/javascript'>alert('Taki użytkownik nie istnieje!');</script>";
                    }
                }
            }
            mysqli_close($con);
            ?>
        <hr>
        <div id="tak">
        <h1>Zaloguj</h1>
        <form action="index.php" method="post">
            Klasa: <br>
            <input type="text" name="klasa" id="klasa"> <br>
            Nazwisko: <br>
            <input type="text" name="nazwisko" id="nazwisko"> <br>
            Imie: <br>
            <input type="text" name="imie" id="imie"> <br> <br>
            <input type="submit" value="zaloguj" name="przycisk">
        </form>
        </div>
    </div>
</body>
</html>
    