<!DOCTYPE html>
<html lang="pls">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep papiernicz</title>
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
                    mysqli_close($con);
                ?>
            </ul>
        </div>
        <div class="srodkowy">
            <h3>Cena wybranego artykułu w promocji</h3>
            <form method="post">
                <select name="towary" id="towary">
                    <?php 
                        
                    ?>
                </select>
                <input type="submit" value="WYBIERZ">
            </form>
            
        </div>
        <div class="prawy">
            <h3>Kontakt</h3>
            <p>telefon: 123123123</p> <br>
            <p>e-mail: <a href="bok@sklep.pl">bok@sklep.p</a></p>
            <img src="./e14-2019-czerwiec-egzamin-zawodowy-praktyczny-zalaczniki/materialy1/promocja2.png" alt="promocja">
        </div>
    </section>
    <footer>

    </footer>
</body>
</html>