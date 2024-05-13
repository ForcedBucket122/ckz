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
        $_SESSION['odp'] = array_fill(0, 10, ''); // Inicjalizacja tablicy odpowiedzi
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
    <script src="skrypt.js" defer></script>
</head>
<body>
    <div id="kontener">
        <div id="wyspa">
            <form action="przod.php" method="post" id="main">
                <?php
                    $con = mysqli_connect('localhost', 'root', '', 'formularz');
                    $sprawdz = 'SELECT treść_pyt FROM pytania;';
                    $query = mysqli_query($con, $sprawdz);
                    $zap = 'SELECT id_pyt, odp1, odp2, odp3, odp4 FROM pytania';
                    $query1 = mysqli_query($con, $zap);
                    $zap2 = 'SELECT COUNT(id_pyt) FROM odpowiedzi GROUP BY id_pyt';
                    $query2 = mysqli_query($con, $zap2);
                    $typ = [];
                    while ($row = mysqli_fetch_array($query2)) {
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
                            $dane = '<div id="odpowiedzi">
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp1" value="1"' . (in_array('1', $_SESSION['odp'][$_SESSION['count']]) ? ' checked' : '') . '><p>A. ' . $row['odp1'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp2" value="2"' . (in_array('2', $_SESSION['odp'][$_SESSION['count']]) ? ' checked' : '') . '><p>B. ' . $row['odp2'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp3" value="3"' . (in_array('3', $_SESSION['odp'][$_SESSION['count']]) ? ' checked' : '') . '><p>C. ' . $row['odp3'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp4" value="4"' . (in_array('4', $_SESSION['odp'][$_SESSION['count']]) ? ' checked' : '') . '><p>D. ' . $row['odp4'] . '</p>
                                        </div>
                                      </div>';
                        } else {
                            $dane = '<div id="odpowiedzi">
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp1" value="1"' . (in_array('1', $_SESSION['odp'][$_SESSION['count']]) ? ' checked' : '') . '><p>A. ' . $row['odp1'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp2" value="2"' . (in_array('2', $_SESSION['odp'][$_SESSION['count']]) ? ' checked' : '') . '><p>B. ' . $row['odp2'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp3" value="3"' . (in_array('3', $_SESSION['odp'][$_SESSION['count']]) ? ' checked' : '') . '><p>C. ' . $row['odp3'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp4" value="4"' . (in_array('4', $_SESSION['odp'][$_SESSION['count']]) ? ' checked' : '') . '><p>D. ' . $row['odp4'] . '</p>
                                        </div>
                                    </div>';
                        }
                        array_push($odpowiedzi, $dane);
                    }
                    echo $pytanie[$_SESSION['count']];
                    echo $odpowiedzi[$_SESSION['count']];
                ?>
                <div id="batony">
                    <div style="order:2">
                    <form action="egzamin.php" method="post">
                        <input type="submit" value="Zakończ test" id="submit" >
                    </form>
                    </div>
                    <div style="order:1">
                    <form action="tyl.php" method="post" id="tyl">
                        <input type="submit" value="Poprzednie pytanie" id="submit" >
                    </form>
                    </div>
                    <div style="order:3">
                    <form action="przod.php" method="post" id="przod">
                        <input type="submit" value="Następne pytanie" id="submit">
                    </form> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
