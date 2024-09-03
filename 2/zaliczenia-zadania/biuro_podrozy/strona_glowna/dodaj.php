<?php
    session_start();
    @$k=$_POST['kraj'];
    @$m=$_POST['miejscowosc'];
    @$h=$_POST['hotel'];
    @$o=$_POST['opis'];
    @$z=$_POST['zdjecia'];
    @$dw=$_POST['data_wyjazdu'];
    @$dp=$_POST['data_przyjazdu'];
    @$im=$_POST['ilosc_miejsc'];
    @$c=$_POST['cena'];
    $con=mysqli_connect('localhost','root','','wycieczki');
    if(($_POST['kraj']!=null) and ($_POST['miejscowosc']!=null) and ($_POST['hotel']!=null) and ($_POST['opis']!=null) and ($_POST['zdjecia']!=null) and ($_POST['data_wyjazdu']!=null) and ($_POST['data_przyjazdu']!=null) and ($_POST['ilosc_miejsc']!=null) and ($_POST['cena']!=null)){
        mysqli_query($con,"INSERT INTO wycieczki (kraj, miejscowosc,hotel,opis,zdjecia,data_wyjazdu,data_przyjazdu,ilosc_miejsc,cena) VALUES ('$k','$m','$h','$o','$z','$dw','$dp','$im','$c')");
        $_SESSION['true']=true;
    }else{
        $_SESSION['true']=false;
    }
    header('location: admin.php');