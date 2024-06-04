<?php
    $oferty=[];
    $id=[];
    $con=mysqli_connect('localhost','root','','wycieczki');
    $query=mysqli_query($con,'SELECT id_wycieczki, kraj, miejscowosc, hotel, opis, zdjecia, data_wyjazdu, data_przyjazdu, ilosc_miejsc, cena FROM wycieczki');
    while($row=mysqli_fetch_array($query)){
        $wycieczki="<div id='box'><p>$row[1]</p><p>$row[2]</p><p>$row[3]</p><p>$row[4]</p><p><img src='$row[5]'></p><p>$row[6]</p><p>$row[7]</p><p>$row[8]</p><p>$row[9]</p></div>";
        array_push($id,$row[0]);
        array_push($oferty, $wycieczki);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="kontener">
        <header>

        </header>
        <div id="main">
            <section>
                <?php
                    foreach($oferty as $x){
                        echo $x;
                    }
                ?>
            </section>
        </div>
        <footer>

        </footer>
    </div>
</body>
</html>