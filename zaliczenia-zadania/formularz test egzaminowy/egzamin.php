odpowiedzi zamiast 123
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

    if(isset($_POST['odp'])) {
        $_SESSION['odp'][$_SESSION['count']] = $_POST['odp']; // Zapisanie odpowiedzi do odpowiedniego indeksu
    }
    // $text1 = $_POST['odp1'];
    // $text2 = $_POST['odp2'];
    // echo $text1;
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
                    // '1'= strval($_SESSION['count']);
                    while ($row = mysqli_fetch_array($query1)) {
                        if ($typ[$row['id_pyt'] - 1] > 1) {
                            $dane = '<form action="przod.php" method="post" id="main">
                                        <div id="odpowiedzi">
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp1" value="1"' . (in_array('1', $_SESSION['odp']) ? ' checked' : '') . '><p>A. ' . $row['odp1'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp2" value="2"' . (in_array('2', $_SESSION['odp']) ? ' checked' : '') . '><p>B. ' . $row['odp2'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp3" value="3"' . (in_array('3', $_SESSION['odp']) ? ' checked' : ''). '><p>C. ' . $row['odp3'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="checkbox" name="odp[]" id="odp4" value="4"' . (in_array('4', $_SESSION['odp']) ? ' checked' : '') . '><p>D. ' . $row['odp4'] . '</p>
                                        </div>
                                        
                                      </div><div id="batony">
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
                                            <input type="submit" value="Następne pytanie" id="submit">
                                            </div>
                                        </div></form>';
                        } else {
                            $dane = '<form action="przod.php" method="post" id="main">
                                        <div id="odpowiedzi">' . switch($_SESSION['odp'][$_SESSION['count']-1]){

                                          }  
                                        
                                        '<div id="input">
                                            <input type="radio" name="odp" id="odp1" value="1"'. (($_SESSION['odp'][$_SESSION['count']]=="1")? ' checked': '') . '><p>A. ' . $row['odp1'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp2" value="2"' . (in_array('2', $_SESSION['odp']) ? ' checked' : '') . '><p>B. ' . $row['odp2'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp3" value="3"' . (in_array('3', $_SESSION['odp']) ? ' checked' : '') . '><p>C. ' . $row['odp3'] . '</p>
                                        </div>
                                        <div id="input">
                                            <input type="radio" name="odp" id="odp4" value="4"' . (in_array('4', $_SESSION['odp']) ? ' checked' : '') . '><p>D. ' . $row['odp4'] . '</p>
                                        </div>'
                                        
                                    </div>
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
                                        <input type="submit" value="Następne pytanie" id="submit">
                                        </div>
                                    </div></form>';
                        }
                        array_push($odpowiedzi, $dane);
                    }
                    echo $pytanie[$_SESSION['count']];
                    echo $odpowiedzi[$_SESSION['count']];
                    print_r($_SESSION['odp']);
                    echo $_SESSION['odp']['0'];
                ?>
                <script>
                //     $('#submit').click(function() {
                //     var val1 = $('#odp1').val();
                //     var val2 = $('#odp2').val();
                //     var val3 = $('#odp3').val();
                //     var val4 = $('#odp4').val();
                //     $.ajax({
                //         type: 'POST',
                //         url: 'egzamin.php',
                //         data: { odp1: val1, odp2: val2, odp3: val3, odp4: val4 },
                //         success: function(response) {
                //             $('#result').html(response);
                //         }
                //     });
                // });
                </script>
                <!-- <div id="batony">
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
                </div> -->
            </form>
        </div>
    </div>
</body>
</html>
