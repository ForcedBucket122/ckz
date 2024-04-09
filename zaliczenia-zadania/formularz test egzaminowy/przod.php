<?php

session_start();

if (!isset($_SESSION['count'])) { 
    $_SESSION['count'] = 0;       
} else {                          
    $_SESSION['count']++;         
}

echo 'Strona odczytana '.$_SESSION['count'].' razy w ciągu tej sesji';

header('location: egzamin.php');