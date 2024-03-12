<?php 
error_reporting(0);
//usuwanie z tabeli
$host = 'localhost';
$login = 'root';
$password = '';
$database = '2pb';

$conn = mysqli_connect($host, $login, $password, $database);

    $id2 = $_POST['id2'];
    $sql3 = "DELETE FROM uczniowie WHERE id='$id2'";
    mysqli_query($conn,$sql3);


    header("location: modyfikowanie.php");
    
?>