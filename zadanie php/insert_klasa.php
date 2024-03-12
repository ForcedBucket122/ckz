<?php 
error_reporting(0);
//dodawanie klasy

$host = 'localhost';
$login = 'root';
$password = '';
$database = '2pb';
$conn = mysqli_connect($host, $login, $password, $database);

$imie = $_POST['imie_wychowawcy'];
        $nazwisko = $_POST['nazwisko_wychowawcy'];
        $klasa = $_POST['klasa'];


        $sql = "INSERT INTO `klasy`(`klasa`, `imie_wychowawcy`, `nazwisko_wychowawcy`) 
        VALUES ('".$klasa."','".$imie."','".$nazwisko."')";
        mysqli_query($conn ,$sql);

        header("location: dodawanie_klas.php");
        
?>