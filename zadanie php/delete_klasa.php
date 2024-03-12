<?php 
error_reporting(0);
//usuwanie z tabeli
$host = 'localhost';
$login = 'root';
$password = '';
$database = '2pb';

$conn = mysqli_connect($host, $login, $password, $database);

    $klasa2 = $_POST['klasa2'];
    $sql3 = "DELETE FROM klasy WHERE klasa='$klasa2'";
    mysqli_query($conn,$sql3);


    header("location: dodawanie_klas.php");
?>