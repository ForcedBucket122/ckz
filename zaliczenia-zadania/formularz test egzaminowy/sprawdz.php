<?php
session_start();
if(($_POST['przycisk']=="Następne pytanie") or ($_POST['przycisk']=="Poprzednie pytanie") or  ($_POST['przycisk']=="Zakończ test")){
    if (!isset($check)) {
        $check = array_fill(0, 4, "");
    }
    if($_SESSION['count']==9){

        foreach($_POST['odp'] as $selected) {

                $check[$selected-1]=$_SESSION['checkbox'][$selected-1];
        }
        $_SESSION['odp'][$_SESSION['count']]=$check;
    }else{
        $_SESSION['odp'][$_SESSION['count']]=$_POST['odp'];
    }
}
switch($_POST['przycisk']){
    case "Zakończ test":
        $_SESSION['count']=0;
        header('location: wyniki.php');
        break;
    case "Spróbuj ponownie":
        if (isset($_SESSION['odp'])) {
            $_SESSION['odp'] = array_fill(0, 10, "");
        }
        $_SESSION['count']=0;
        header('location: egzamin.php');
        break;
    case "Następne pytanie":
        if (!isset($_SESSION['count'])) { 
            $_SESSION['count'] = 0;       
        } else {     
            $_SESSION['count']++;         
        }
        header('location: egzamin.php');
        break;
    case "Poprzednie pytanie":
        if (!isset($_SESSION['count'])) { 
            $_SESSION['count'] = 0;       
        } else {                          
            $_SESSION['count']--;         
        }
        header('location: egzamin.php');
        break;
    case "Następne pytanie ":
        if (!isset($_SESSION['count'])) { 
            $_SESSION['count'] = 0;       
        } else {     
            $_SESSION['count']++;         
        }
        header('location: wyniki.php');
        break;
    case "Poprzednie pytanie ":
        if (!isset($_SESSION['count'])) { 
            $_SESSION['count'] = 0;       
        } else {                          
            $_SESSION['count']--;         
        }
        header('location: wyniki.php');
        break;
    default: echo "Błąd";
}