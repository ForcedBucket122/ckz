<?php
    session_start();
    if ($_SESSION['count']>9) {
        $_SESSION['count'] = 0;
    }
    if ($_SESSION['count']<0) {
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
            <form action="egzamin.php" method="post">
                <?php
                    // $_SESSION['count'];
                    $con=mysqli_connect('localhost','root','','formularz');
                    $sprawdz='SELECT treść_pyt FROM pytania;';
                    $query=mysqli_query($con,$sprawdz);
                    $zap='SELECT odp1,odp2,odp3,odp4 FROM pytania';
                    $query1=mysqli_query($con,$zap);
                    $pytanie=[];
                    $odpowiedzi=[];
                    
                    while($row=mysqli_fetch_array($query)){
                        $dane='<div id="pytanie">'.$row['treść_pyt'].'</div>';
                        array_push($pytanie,$dane); 
                    }while($row=mysqli_fetch_array($query1)){
                        $dane= '<div id="odpowiedzi"><br><input type="checkbox" name="odp" id="odp">'.$row['odp1'].'<input type="checkbox" name="odp" id="odp">'.$row['odp2'].'<br><input type="checkbox" name="odp" id="odp">'.$row['odp3'].'<input type="checkbox" name="odp" id="odp">'.$row['odp4']."</div>";
                        array_push($odpowiedzi,$dane);
                    }
                    echo $pytanie[$_SESSION['count']];
                    echo $odpowiedzi[$_SESSION['count']];
                    // echo '<button name="przycisk" value=1>Następne pytanie</button>';
                    // $przycisk=$_POST['przycisk'];
                    echo $_SESSION['count'];

                ?>
            </form>
            <form action="tyl.php" method="post">
                <input type="submit" value="Poprzednie pytanie">
            </form>
            <form action="przod.php" method="post">
                <input type="submit" value="Następne pytanie">
            </form>
        </div>
    </div>
</body>
</html>