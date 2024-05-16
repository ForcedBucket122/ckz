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
                    $sprawdz = 'SELECT treść_pyt FROM pytania;'; //zapytanie
                    $query = mysqli_query($con, $sprawdz); // wykonanie zapytania
                    $zap = 'SELECT id_pyt, odp1, odp2, odp3, odp4 FROM pytania';
                    $query1 = mysqli_query($con, $zap);
                    $zap2 = 'SELECT COUNT(id_pyt) FROM odpowiedzi GROUP BY id_pyt';
                    $query2 = mysqli_query($con, $zap2);
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
                    // '1'= strval($_SESSION['count']);
                    while ($row = mysqli_fetch_array($query1)) {
                        if ($typ[$row['id_pyt'] - 1] > 1) {
                            $dane = '<form action="sprawdz.php" method="post" id="main">
                                        <div id="odpowiedzi">
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp1" value="1"' . @(($_SESSION['odp'][$_SESSION['count']][0]=="1") ? ' checked' : '') . '><p>A. ' . $row['odp1'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp2" value="2"' . @(($_SESSION['odp'][$_SESSION['count']][1]=="2") ? ' checked' : '') . '><p>B. ' . $row['odp2'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp3" value="3"' . @(($_SESSION['odp'][$_SESSION['count']][2]=="3") ? ' checked' : ''). '><p>C. ' . $row['odp3'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp4" value="4"' . @(($_SESSION['odp'][$_SESSION['count']][3]=="4") ? ' checked' : '') . '><p>D. ' . $row['odp4'] . '</p>
                                        </div>
                                        
                                      </div>
                                      <div id="batony">
                                        <div style="order:2">
                                            <input type="submit" name="przycisk" value="Spróbuj ponownie" id="submit" >
                                        </div>
                                        <div style="order:1">
                                            <input type="submit" name="przycisk" value="Poprzednie pytanie " id="submit" >
                                        </div>
                                        <div style="order:3">
                                            <input type="submit" name="przycisk" value="Następne pytanie " id="submit">
                                        </div>
                                  </div></form>';
                        } else {
                            $dane = '<form action="sprawdz.php" method="post" id="main">
                                        <div id="odpowiedzi">
                                        
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp1" value="1"'. (($_SESSION['odp'][$_SESSION['count']]=="1") ? ' checked': '') . '><p>A. ' . $row['odp1'] . '</p>'.//sprawdza czy dana odpowiedz jest w tablicy z zaznaczonymi odpowiedziami jesli tak to przypisywana jest wlasnosc checked
                                            '
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp2" value="2"' . (($_SESSION['odp'][$_SESSION['count']]=="2") ? ' checked' : '') . '><p>B. ' . $row['odp2'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp3" value="3"' . (($_SESSION['odp'][$_SESSION['count']]=="3") ? ' checked' : '') . '><p>C. ' . $row['odp3'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp4" value="4"' . (($_SESSION['odp'][$_SESSION['count']]=="4") ? ' checked' : '') . '><p>D. ' . $row['odp4'] . '</p>
                                        </div>
                                        
                                    </div>
                                    <div id="batony">
                                        <div style="order:2">
                                            <input type="submit" name="przycisk" value="Spróbuj ponownie" id="submit" >
                                        </div>
                                        <div style="order:1">
                                            <input type="submit" name="przycisk" value="Poprzednie pytanie " id="submit" >
                                        </div>
                                        <div style="order:3">
                                            <input type="submit" name="przycisk" value="Następne pytanie " id="submit">
                                        </div>
                                    </div></form>';
                        }
                        array_push($odpowiedzi, $dane);
                    }
                    echo $pytanie[$_SESSION['count']];
                    echo $odpowiedzi[$_SESSION['count']];
                    print_r($_SESSION['odp']);
                    echo $_SESSION['count'];
                ?>
            </form>
        </div>
    </div>
</body>
</html>
