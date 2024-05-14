<?php
session_start();

$odp=$_POST['odp'];
for($i=1;$i<=4;$i++){
    if($odp==$i){
        $_SESSION['odp'][$_SESSION['count']]=$i;
    }
}
if($_POST['przycisk']=="Następne pytanie"){header('location: przod.php');}
if($_POST['przycisk']=="Poprzednie pytanie"){header('location: tyl.php');}