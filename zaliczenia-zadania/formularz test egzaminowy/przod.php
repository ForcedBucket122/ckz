<?php

session_start();

if (!isset($_SESSION['count'])) { 
    $_SESSION['count'] = 0;       
} else {     
    // if($_POST['odp']:checked)                   
    $_SESSION['count']++;         
}
    $odp=$_POST['odp'];
    for($i=1;$i<=4;$i++){
        if($odp==$i){
            $_SESSION['odp'][$_SESSION['count']-1]=$i;
        }
    }

header('location: egzamin.php');
