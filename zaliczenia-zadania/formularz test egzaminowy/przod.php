<?php

session_start();

if (!isset($_SESSION['count'])) { 
    $_SESSION['count'] = 0;       
} else {     
    // if($_POST['odp']:checked)                   
    $_SESSION['count']++;         
}


header('location: egzamin.php');