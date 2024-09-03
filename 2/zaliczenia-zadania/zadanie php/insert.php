<?php 
error_reporting(0);
//dodawanie

echo "<script>alert('dddddddd') </script>";
$host = 'localhost';
$login = 'root';
$password = '';
$database = '2pb';
$conn = mysqli_connect($host, $login, $password, $database);

$imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $klasa = $_POST['klasa'];
        $kod_pocztowy = $_POST['kod_pocztowy'];
        $miejscowosc = $_POST['miejscowosc'];
        $numer_domu = $_POST['numer_domu'];
        $numer_lokalu = $_POST['numer_lokalu'];
        $ulica = $_POST['ulica'];

        $sql = "INSERT INTO `uczniowie`(`id`, `imie`, `nazwisko`, `ulica`, `numer_domu`, `numer_lokalu`, `kod_pocztowy`, `miejscowosc`, `klasa`) 
        VALUES (NULL,'".$imie."','".$nazwisko."','".$ulica."','".$numer_domu."','".$numer_lokalu."','".$kod_pocztowy."','".$miejscowosc."','".$klasa."')";
        mysqli_query($conn ,$sql);

        header("location: modyfikowanie.php");
?>