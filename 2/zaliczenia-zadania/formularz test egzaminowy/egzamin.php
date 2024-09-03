<?php
    session_start();
    if (!isset($_SESSION['count'])) { 
        $_SESSION['count'] = 0;       
    }
    if ($_SESSION['count'] > 9) {
        $_SESSION['count'] = 0;
    }
    if ($_SESSION['count'] < 0) {
        $_SESSION['count'] = 9;
    }
    if (!isset($_SESSION['odp'])) {
        $_SESSION['odp'] = array_fill(0, 10, ""); // Inicjalizacja tablicy odpowiedzi
    }
    if (!isset($_SESSION['checkbox'])) { 
        $_SESSION['checkbox'] = array_fill(0,4,"");       
    }
    if(isset($_POST['odp'])) {
        $_SESSION['odp'][$_SESSION['count']] = $_POST['odp']; // Zapisanie odpowiedzi do odpowiedniego indeksu
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>egzamin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="kontener">
        <div id="wyspa">
            <form action="sprawdz.php" method="post" id="main">
                <?php
                    $con = mysqli_connect('localhost', 'root', '', 'formularz'); //polaczenie z baza
                    $query = mysqli_query($con,'SELECT treść_pyt FROM pytania;'); // wykonanie zapytania
                    $query1 = mysqli_query($con,'SELECT id_pyt, odp1, odp2, odp3, odp4 FROM pytania');
                    $query2 = mysqli_query($con,'SELECT COUNT(id_pyt) FROM odpowiedzi GROUP BY id_pyt');
                    $typ = [];
                    while ($row = mysqli_fetch_array($query2)) { // sprawdza jakiego typu musi byc input radius czy checkbox
                        array_push($typ, $row['COUNT(id_pyt)']);
                    }
                    $pytanie = [];
                    $odpowiedzi = [];
                    $nr = $_SESSION['count'] + 1;
                    while ($row = mysqli_fetch_array($query)) {
                        $dane = '<div id="pytanie">' . $nr . ". " . $row['treść_pyt'] . '</div>';
                        array_push($pytanie, $dane);
                    }
                    while ($row = mysqli_fetch_array($query1)) {
                        if ($typ[$row['id_pyt'] - 1] > 1) {
                            for($i=0;$i<4;$i++){
                                $x=$i+1;
                                $_SESSION['checkbox'][$i]=$row["odp$x"];
                            }
                            $dane = '<form action="sprawdz.php" method="post" id="main">
                                        <div id="odpowiedzi">
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp1" value=1'. @(($_SESSION['odp'][$_SESSION['count']][0]==$row['odp1']) ? ' checked' : '') . '><p>A. ' . $row['odp1'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp2" value=2'. @(($_SESSION['odp'][$_SESSION['count']][1]==$row['odp2']) ? ' checked' : '') . '><p>B. ' . $row['odp2'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp3" value=3'. @(($_SESSION['odp'][$_SESSION['count']][2]==$row['odp3']) ? ' checked' : ''). '><p>C. ' . $row['odp3'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp4" value=4'. @(($_SESSION['odp'][$_SESSION['count']][3]==$row['odp4']) ? ' checked' : '') . '><p>D. ' . $row['odp4'] . '</p>
                                        </div>
                                        
                                      </div>
                                      <div id="batony">
                                        <div style="order:2">
                                            <input type="submit" name="przycisk" value="Zakończ test" id="submit" >
                                        </div>
                                        <div style="order:1">
                                            <input type="submit" name="przycisk" value="Poprzednie pytanie" id="submit" >
                                        </div>
                                        <div style="order:3">
                                            <input type="submit" name="przycisk" value="Następne pytanie" id="submit">
                                        </div>
                                  </div></form>';
                        } else {
                            $dane = '<form action="sprawdz.php" method="post" id="main">
                                        <div id="odpowiedzi">
                                        
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp1" value="'.$row['odp1'].'"'. (($_SESSION['odp'][$_SESSION['count']]==$row['odp1']) ? ' checked': '') . '><p>A. ' . $row['odp1'] . '</p>'.//sprawdza czy dana odpowiedz jest w tablicy z zaznaczonymi odpowiedziami jesli tak to przypisywana jest wlasnosc checked
                                            '
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp2" value="'.$row['odp2'].'"'. (($_SESSION['odp'][$_SESSION['count']]==$row['odp2']) ? ' checked' : '') . '><p>B. ' . $row['odp2'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp3" value="'.$row['odp3'].'"'. (($_SESSION['odp'][$_SESSION['count']]==$row['odp3']) ? ' checked' : '') . '><p>C. ' . $row['odp3'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp4" value="'.$row['odp4'].'"'. (($_SESSION['odp'][$_SESSION['count']]==$row['odp4']) ? ' checked' : '') . '><p>D. ' . $row['odp4'] . '</p>
                                        </div>
                                        
                                    </div>
                                    <div id="batony">
                                        <div style="order:2">
                                            <input type="submit" name="przycisk" value="Zakończ test" id="submit" >
                                        </div>
                                        <div style="order:1">
                                            <input type="submit" name="przycisk" value="Poprzednie pytanie" id="submit" >
                                        </div>
                                        <div style="order:3">
                                            <input type="submit" name="przycisk" value="Następne pytanie" id="submit" class="nast">
                                        </div>
                                    </div></form>';
                        }
                        array_push($odpowiedzi, $dane);
                    }
                    echo $pytanie[$_SESSION['count']];
                    echo $odpowiedzi[$_SESSION['count']];
                    // print_r($_SESSION['odp']);
                    // print_r($_SESSION['checkbox']);
                ?>
            </form>
        </div>
    </div>

</body>
</html>
