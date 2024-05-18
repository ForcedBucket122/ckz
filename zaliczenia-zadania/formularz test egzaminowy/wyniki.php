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
    $ok = array_fill(0, 4, "");
    $zle = array_fill(0, 4, "");
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
                    $con = mysqli_connect('localhost', 'root', '', 'formularz');
                    $query = mysqli_query($con, 'SELECT treść_pyt FROM pytania'); 
                    $query1 = mysqli_query($con, 'SELECT id_pyt, odp1, odp2, odp3, odp4 FROM pytania');
                    $query2=mysqli_query($con, 'SELECT odpowiedz, id_pyt FROM odpowiedzi');
                    $query3 = mysqli_query($con,'SELECT COUNT(id_pyt) FROM odpowiedzi GROUP BY id_pyt');
                    
                    
                    $popr_odp=array_fill(0, 10, "");
                    $checkbox=[];
                    $typ = [];
                    $pytanie = [];
                    $odpowiedzi = [];
                    $nr = $_SESSION['count'] + 1;
                    $pkt=0;
                    $procent=0;
                    while ($row = mysqli_fetch_array($query3)) { 
                        array_push($typ, $row['COUNT(id_pyt)']);
                    }
                    while($row= mysqli_fetch_array($query2)){
                        if ($typ[$row['id_pyt'] - 1] > 1){
                            array_push($checkbox, $row['odpowiedz']);
                            $popr_odp[9]=$checkbox;
                        }else{ 
                            $popr_odp[$row['id_pyt']-1]=$row['odpowiedz'];
                        }
                    }
                    $prawidlowe=array_fill(0, 10, "");
                    $bledne=array_fill(0, 10, "");
                    for($i=0;$i<=9;$i++){
                        if($i!=9){
                            if(@$_SESSION['odp'][$i]==$popr_odp[$i]){
                                $prawidlowe[$i]=$_SESSION['odp'][$i];
                                $pkt+=1;
                            }else{
                                $bledne[$i]=$_SESSION['odp'][$i];
                            }
                        }else{
                            $x=0;
                            foreach(@$_SESSION['odp'][$i] as $odp){
                                if(isset($odp)){
                                    if(($odp==$popr_odp[$i][0])or($odp==$popr_odp[$i][1])){
                                        $ok[$x]=$odp;
                                        $pkt+=0.5;
                                    }else{
                                        $zle[$x]=$odp;
                                        $pkt+=-0.5;
                                    }
                                    $prawidlowe[$i]=$ok;
                                    $bledne[$i]=$zle;
                                    $x++;
                                }
                            }
                        }
                    }
                    $procent=($pkt/10)*100;
                    while ($row = mysqli_fetch_array($query)) {
                        $dane = '<div id="pytanie">' . $nr . ". " . $row['treść_pyt'] . '</div>';
                        array_push($pytanie, $dane);
                    }
                    echo $procent."%<br>";
                    echo $pkt."/10";
                    while ($row = mysqli_fetch_array($query1)) {
                        if ($typ[$row['id_pyt'] - 1] > 1) {
                            $dane='';
                            $dane .= 
                                '<form action="sprawdz.php" method="post" id="main">
                                    <div id="odpowiedzi">
                                        <p'.@(($prawidlowe[$_SESSION['count']][0]==$row['odp1']) ? ' style="color: green;"' : '').@(($bledne[$_SESSION['count']][0]==$row['odp1']) ? ' style="color: red;"'    : '').'>A. ' . $row['odp1'] . '</p>
                                        <p'.@(($prawidlowe[$_SESSION['count']][1]==$row['odp2']) ? ' style="color: green;"' : '').@(($bledne[$_SESSION['count']][1]==$row['odp2']) ? ' style="color: red;"'    : '').'>B. ' . $row['odp2'] . '</p>
                                        <p'.@(($prawidlowe[$_SESSION['count']][2]==$row['odp3']) ? ' style="color: green;"' : '').@(($bledne[$_SESSION['count']][2]==$row['odp3']) ? ' style="color: red;"'    : '').'>C. ' . $row['odp3'] . '</p>
                                        <p'.@(($prawidlowe[$_SESSION['count']][3]==$row['odp4']) ? ' style="color: green;"' : '').@(($bledne[$_SESSION['count']][3]==$row['odp4']) ? ' style="color: red;"'    : '').'>D. ' . $row['odp4'] . '</p>
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
                                    </div>
                                </form>';
                        }else{
                            $dane='';
                            $dane .= 
                                '<form action="sprawdz.php" method="post" id="main">
                                    <div id="odpowiedzi">
                                        <p'.@(($prawidlowe[$_SESSION['count']]==$row['odp1']) ? ' style="color: green;"' : '').(($bledne[$_SESSION['count']]==$row['odp1']) ? ' style="color: red;"'    : '').'>A. ' . $row['odp1'] . '</p>
                                        <p'.@(($prawidlowe[$_SESSION['count']]==$row['odp2']) ? ' style="color: green;"' : '').(($bledne[$_SESSION['count']]==$row['odp2']) ? ' style="color: red;"'    : '').'>B. ' . $row['odp2'] . '</p>
                                        <p'.@(($prawidlowe[$_SESSION['count']]==$row['odp3']) ? ' style="color: green;"' : '').(($bledne[$_SESSION['count']]==$row['odp3']) ? ' style="color: red;"'    : '').'>C. ' . $row['odp3'] . '</p>
                                        <p'.@(($prawidlowe[$_SESSION['count']]==$row['odp4']) ? ' style="color: green;"' : '').(($bledne[$_SESSION['count']]==$row['odp4']) ? ' style="color: red;"'    : '').'>D. ' . $row['odp4'] . '</p>
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
                                    </div>
                                </form>';
                        }
                        array_push($odpowiedzi, $dane);
                    }
                    echo $pytanie[$_SESSION['count']];
                    echo $odpowiedzi[$_SESSION['count']];
                    // print_r($prawidlowe);
                    // print_r($bledne);
                ?>
            </form>
        </div>
    </div>
</body>
</html>
