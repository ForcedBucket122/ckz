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
    while($row=mysqli_fetch_array($query)){
        if($klasa==$row[0]){
            if($nazwisko==$row[1]){
                if($imie==$row[2]){
                    header('location: egzamin.php');
                }else{
                    echo "<script type='text/javascript'>alert('Taki użytkownik nie istnieje');</script>";
                }
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
            <input type="submit" value="zaloguj">
        </form>
        </div>
    </div>
</body>
</html>
    