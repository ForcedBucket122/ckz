<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wszyscy uczniowie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="grid-container">
    <header>
        <h1>Wszyscy uczniowie</h1>
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
    <form action="" method="post">
    <br><br><input type="text" name="search_input" placeholder="wyszukaj ucznia"><br><br>
        <select name="klasa_select" id="klasa_select">
            <?php
            error_reporting(0);
                 $host = 'localhost';
                 $login = 'root';
                 $password = '';
                 $database = '2pb';

                 $conn = mysqli_connect($host, $login, $password, $database);
                 $conn = mysqli_connect($host, $login, $password, $database);
             if(!$conn){
                 echo "blad";
             }else{
                 $sql = "SELECT * FROM klasy";
                 $result = mysqli_query($conn, $sql);
                 echo "<option>"."Wszyscy"."</option>";
                 while ($row = mysqli_fetch_array  ($result))
                 {

                     echo "<option value='" .$row['klasa']."'>".$row['klasa']." ".$row['imie_wychowawcy']." ".$row['nazwisko_wychowawcy']." "."</option>";

                 }

            ?>
        </select><br><br>

        <input type="submit" value="WYŚLIJ">
    </form> <br><br>
    <table id="tablica">
    <td width="50" align="center" bgcolor="e5e5e5">imie</td>
    <td width="100" align="center" bgcolor="e5e5e5">nazwisko</td>
    <td width="100" align="center" bgcolor="e5e5e5">ulica</td>
    <td width="100" align="center" bgcolor="e5e5e5">numer_domu</td>
    <td width="100" align="center" bgcolor="e5e5e5">numer_lokalu</td>
    <td width="100" align="center" bgcolor="e5e5e5">miejscowosc</td>
    <td width="100" align="center" bgcolor="e5e5e5">klasa</td><tr>
    <?php



    $search_input= $_POST["search_input"];
    $klasa_select= $_POST["klasa_select"];
    if( $klasa_select == "Wszyscy" ){
        $klasa_select = "";
    }
    $sql = "SELECT * FROM `uczniowie` WHERE (imie like '".$search_input."%' or nazwisko like '".$search_input."%' or ulica like '".$search_input."%' or miejscowosc like '".$search_input."%') and klasa like '".$klasa_select."%'";
    $result = mysqli_query($conn,$sql);


    while($row = mysqli_fetch_assoc($result)){

        $imie  = $row['imie'];
        $nazwisko = $row['nazwisko'];
        $ulica = $row['ulica'];
        $numer_domu = $row['numer_domu'];
        $numer_lokalu = $row['numer_lokalu'];
        $miejscowosc= $row['miejscowosc'];
        $klasa = $row['klasa'];

        ?>

<td	width="50" align="center"><?=$imie?></td>
<td width="100" align="center"><?=$nazwisko?></td>
<td width="100" align="center"><?=$ulica?></td>
<td width="100" align="center"><?=$numer_domu?></td>
<td width="100" align="center"><?=$numer_lokalu?></td>
<td width="100" align="center"><?=$miejscowosc?></td>
<td width="100" align="center"><?=$klasa?></td>

</tr><tr>


<?php
	}}

?>


</tr></table> <br> <br>
    </main>
    <div id="rightBanner">

    </div>
    <div id="item7"></div>
    <footer>
    </footer>
    <div id="item9"></div>
</div>



</body>
</html> 