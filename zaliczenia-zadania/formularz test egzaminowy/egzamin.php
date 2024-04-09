<?php
    session_start();
    if (!isset($_SESSION['count'])) { 
        $_SESSION['count'] = 0;       
    }
    if ($_SESSION['count']>9) {
        $_SESSION['count'] = 0;
    }
    if ($_SESSION['count']<0) {
        $_SESSION['count'] = 9;
    }
    $_SESSION['odpowiedzi']=[];
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
            <form action="egzamin.php" method="post" id="main">
                <?php
                    // $_SESSION['count'];
                    $con=mysqli_connect('localhost','root','','formularz');
                    $sprawdz='SELECT treść_pyt FROM pytania;';
                    $query=mysqli_query($con,$sprawdz);
                    $zap='SELECT odp1,odp2,odp3,odp4 FROM pytania';
                    $query1=mysqli_query($con,$zap);
                    $pytanie=[];
                    $odpowiedzi=[];
                    $nr=$_SESSION['count']+1;
                    while($row=mysqli_fetch_array($query)){
                        $dane='<div id="pytanie">'.$nr.". ".$row['treść_pyt'].'</div>';
                        array_push($pytanie,$dane); 
                    }while($row=mysqli_fetch_array($query1)){
                        $dane= 
                        '<div id="odpowiedzi">
                            <div id="input">
                                <input type="checkbox" name="odp" id="odp" value=1><p>'.$row['odp1'].'</p>
                            </div>
                            <div id="input">
                                <input type="checkbox" name="odp" id="odp" value=2><p>'.$row['odp2'].'</p>
                            </div>
                            <div id="input">
                                <input type="checkbox" name="odp" id="odp" value=3><p>'.$row['odp3'].'</p>
                            </div>
                            <div id="input">
                                <input type="checkbox" name="odp" id="odp" value=4><p>'.$row['odp4']."</p>
                            </div>
                        </div>";
                        array_push($odpowiedzi,$dane);
                    }
                    echo $pytanie[$_SESSION['count']];
                    echo $odpowiedzi[$_SESSION['count']];
                    // echo $_SESSION['count'];

                ?>
                <input type="submit" value="Zatwierdź odpowiedź" id="submit" style="float:right;">
            </form>
            <div id="batony">
                <form action="tyl.php" method="post" id="tyl">
                    <input type="submit" value="Poprzednie pytanie" id="submit">
                </form>
                <form action="przod.php" method="post" id="przod">
                    <input type="submit" value="Następne pytanie" id="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>