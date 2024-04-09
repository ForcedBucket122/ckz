<?php
    @$klasa=$_POST['klasa'];
    @$nazwisko=$_POST['nazwisko'];
    @$imie=$_POST['imie'];
    $con=mysqli_connect('localhost','root','','formularz');
    $sprawdz='SELECT klasa, nazwisko FROM użytkownicy;';
    $query=mysqli_query($con,$sprawdz);
    $wynik=0;
    while($row=mysqli_fetch_array($query)){
        if($klasa==$row[0]){
            if($nazwisko==$row[1]){
                $wynik=1;
            }
        }
    }
    if($wynik==1){
        header('location: egzamin.php');
    }else{
        echo "Błąd!";
    }
    mysqli_close($con);
    
    