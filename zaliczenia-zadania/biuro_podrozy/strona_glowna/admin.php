<?php
session_start();
    $_SESSION['oferty']=[];
    $_SESSION['id']=[];
    $con=mysqli_connect('localhost','root','','wycieczki');
    $query=mysqli_query($con,'SELECT id_wycieczki, kraj, miejscowosc, hotel, opis, zdjecia, data_wyjazdu, data_przyjazdu, ilosc_miejsc, cena FROM wycieczki');
    while($row=mysqli_fetch_array($query)){
        $wycieczki="<div id='box'><p>$row[1]</p><p>$row[2]</p><p>$row[3]</p><p>$row[4]</p><p><img src='$row[5]'></p><p>$row[6]</p><p>$row[7]</p><p>$row[8]</p><p>$row[9]</p></div>";
        array_push($_SESSION['id'],$row[0]);
        array_push($_SESSION['oferty'], $wycieczki);
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
            <form action="dodaj.php" method="post">
                <label for="kraj">Kraj</label> <br>
                <input type="text" name="kraj"><br>
                <label for="miejscowosc">Miejscowosc</label><br>
                <input type="text" name="miejscowosc"><br>
                <label for="hotel">Hotel</label><br>
                <input type="text" name="hotel"><br>
                <label for="opis">Opis</label><br>
                <input type="text" name="opis"><br>
                <label for="zdjecia">Zdjecia(link)</label><br>
                <input type="text" name="zdjecia"><br>
                <label for="data_wyjazdu">data_wyjazdu</label><br>
                <input type="text" name="data_wyjazdu"><br>
                <label for="data_przyjazdu">data_przyjazdu</label><br>
                <input type="text" name="data_przyjazdu"><br>
                <label for="ilosc_miejsc">ilosc_miejsc</label><br>
                <input type="number" name="ilosc_miejsc"><br>
                <label for="cena">cena</label><br>
                <input type="number" name="cena"><br>
                <input type="submit" value="Dodaj">
            </form>
            <?php
                if($_SESSION['true']==false){
                    echo 'Błąd!';
                }
            ?>
            <section>
                
                <?php
                    $i=0;
                    foreach($_SESSION['oferty'] as $x){
                        echo $x;
                        echo '<form action="usun.php" method="post">'
                        echo '<input type="submit" value="Usuń" name="prz'.$_SESSION['id'][$i].'">';
                        echo '</form>'
                        $i++;
                    }
                ?>
                
                
            </section>
        </div>
        <footer>

        </footer>
    </div>
</body>
</html>