<?php

session_start(); // można pominąć jeśli jest się pewnym że włączona jest opcja auto_start

if (!isset($_SESSION['count'])) { // jeśli zmienna nie jest zarejestrowana
    $_SESSION['count'] = 0;       // przypisz jej początkową wartość
} else {                          // jeśli jest zarejestrowana
    $_SESSION['count']--;         // zwiększ jej wartość
}

echo 'Strona odczytana '.$_SESSION['count'].' razy w ciągu tej sesji';

header('location: egzamin.php');