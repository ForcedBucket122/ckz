<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie Klas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="grid-container">
        <header>
            <h1>Dodawanie klas</h1>
            <button style="width:10%;margin-left:20%;font-size:130%;border-radius:40px ;"><a href="main.php">Strona główna</a></button>
        </header>
        <div id="item4">

    </div id="item4">
        <main>
        <div id="ul">
            <button><a href="modyfikowanie.php">dodawanie i usuwanie uczniow</a></button>
             <button> <a href="dodawanie_klas.php">dodawnie klas</a></button>
             <button><a href="wszyscy.php"> wszyscy uczniowie</a></button>
        </div>

            <form type="text" method="POST" action = "insert_klasa.php">

            <br><input type="text" name= "imie_wychowawcy" placeholder="imie wychowawcy"><br><br>             
		        <input type="text" name= "nazwisko_wychowawcy" placeholder="nazwisko wychowawcy"> <br><br>
                <input type="text" name= "klasa" placeholder="klasa"> <br><br>
                <input id="submit" type="submit"  name="submit"value="dodaj"><br> <br> <br>
            </form>
            <form type="text" method="POST" action = "delete_klasa.php">        
                <input id="id2" type="text" name= "klasa2" placeholder="usuwanie klasy"> <br> <br>
                <input id="submit" name="sumbit2"  type="submit" value="usun" > <br><br><br>
            </form>

            <form type="text" method="POST">
                <input type="text" name="search_input" placeholder="wyszukaj klasę"><br><br>
                <input type="submit" id="submit" name="submit2"><br><br>
            </form>
            <table style="margin-left:35%;">
                <td width="50" align="center" bgcolor="e5e5e5">klasa</td>
                <td width="50" align="center" bgcolor="e5e5e5">imie wychowawcy</td>
                <td width="100" align="center" bgcolor="e5e5e5">nazwisko wychowawcy</td>

            <?php
            error_reporting(0);
                $host = 'localhost';
                $login = 'root';
                $password = '';
                $database = '2pb';

                $conn = mysqli_connect($host, $login, $password, $database);

                $usuwaniePustychKlas = "DELETE FROM klasy WHERE  klasa='' or imie_wychowawcy='' or nazwisko_wychowawcy='' ";
                mysqli_query($conn, $usuwaniePustychKlas);

                $search_input= $_POST["search_input"];
                $sql = "SELECT * FROM `klasy` WHERE imie_wychowawcy like '".$search_input."%' or nazwisko_wychowawcy like '".$search_input."%' or klasa like '".$search_input."%'";

                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_assoc($result)){
                    $klasa = $row['klasa'];
                    $imie  = $row['imie_wychowawcy'];
                    $nazwisko = $row['nazwisko_wychowawcy'];


            ?><tr>
            <td width="100" align="center"><?=$klasa?></td>
            <td	width="50" align="center"><?=$imie?></td>
            <td width="100" align="center"><?=$nazwisko?></td>
            </tr>


            <?php } ?> 
            </main>
        <br><footer>
        </footer>
    </div>
    <div id="rightBanner">

    </div>
    <div id="item7"></div>
    <footer>
    </footer>
    <div id="item9"></div>
</div>
</body>
</html>
