<?php
session_start();
// print_r($_SESSION['id']);
    $i=0;
    $id_b=0;
    foreach($_SESSION['oferty'] as $x){
        if(isset($_POST['prz'.$_SESSION['id'][$i].''])){
            $id_b=$_SESSION['id'][$i];
        }
        $i++;
    }
    $con=mysqli_connect('localhost','root','','wycieczki');
    mysqli_query($con,"DELETE FROM wycieczki WHERE id_wycieczki=$id_b");
    header('location: admin.php');
    