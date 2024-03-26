<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </header>
    <section>
        <div class="lewy">
            <h3>Promocja 15% obejmuje artykuły:</h3>
            <ul>
                <?php
                    $con=mysqli_connect('localhost','root','','sklep');
                    $zap="SELECT nazwa FROM `towary` WHERE promocja=1;";
                    $wynik=mysqli_query($con,$zap);
                    while($row=mysqli_fetch_array($wynik)){
                        echo "<li>".$row['nazwa']."</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="srodkowy">
            <h3>Cena wybranego artykułu w promocji</h3>
            <form method="post">
                <select name="towary" id="towary">
                    <?php 
                        $zap="SELECT nazwa FROM `towary` WHERE promocja=1;";
                        $wynik=mysqli_query($con,$zap);
                        while($row=mysqli_fetch_array($wynik)){
                            echo '<option value="'.$row["nazwa"].'">'.$row["nazwa"].'</option>';
                        }
                    ?>
                </select>
                <input type="submit" value="WYBIERZ">
            </form>
            <?php
                @$produkt=$_POST['towary'];
                $zap='SELECT cena, nazwa FROM `towary` WHERE nazwa="'.$produkt.'";';
                $wynik=mysqli_query($con,$zap);
                while($row=mysqli_fetch_array($wynik)){
                    echo 'Cena produktu <b>'.$row["nazwa"].'</b> to: '.round($row["cena"]*0.85,2);
                }
                mysqli_close($con);
            ?>
        </div>
        <div class="prawy">
            <h3>Kontakt</h3>
            <p>telefon: 123123123</p>
            <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.p</a></p>
            <img src="./e14-2019-czerwiec-egzamin-zawodowy-praktyczny-zalaczniki/materialy1/promocja2.png" alt="promocja">
        </div>
    </section>
    <footer>
        <h4>Autor strony 00000000000</h4>
    </footer>
</body>
</html>