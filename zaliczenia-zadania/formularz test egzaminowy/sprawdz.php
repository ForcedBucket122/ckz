<?php
session_start();
if (!isset($check)) {
    $check = array_fill(0, 4, "");
}
if($_SESSION['count']==9){
    
    foreach($_POST['odp'] as $selected) {
            $check[$selected-1]=$selected;
    }
    $_SESSION['odp'][$_SESSION['count']]=$check;
}else{
    $odp=$_POST['odp'];
    for($i=1;$i<=4;$i++){
        if($odp==$i){
            $_SESSION['odp'][$_SESSION['count']]=$i;
        }
    }
}
if($_POST['przycisk']=="Następne pytanie"){header('location: przod.php');}
if($_POST['przycisk']=="Poprzednie pytanie"){header('location: tyl.php');}