<?php
@$nazwisko = $_POST['nazwisko'];
@$imie= $_POST['imie'];
@$ulica =$_POST['ulica'];
@$numer_domu=$_POST['numer_domu'];
@$numer_lokalu=$_POST['numer_lokalu'];
@$kod=$_POST['kod'];
@$miejscowosc=$_POST['miejscowosc'];
@$klasa=$_POST['klasa'];
if($nazwisko && $imie && $ulica && $numer_domu && $kod && $miejscowosc && $klasa)
{
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, '2pb');
    $zap = "INSERT INTO uczniowie(nazwisko,imie,ulica,numer_domu,numer_lokalu,kod,miejscowosc,klasa) 
    VALUES ('$nazwisko','$imie','$ulica','$numer_domu','$numer_lokalu','$kod','$miejscowosc','$klasa') ";
    $wynik = mysqli_query($con, $zap);
    echo "Wprowadzono prawidłowo";
}
else
{
    echo "Wprowadzono nieprawidłowo";
}
?>