<?php
//formularz w pętli

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
    $_SESSION['odp']=array(
        0 => '',
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => '',
        9 => ''
    );
    
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
                    // $_SESSION['count'];
                    $con=mysqli_connect('localhost','root','','formularz');
                    $sprawdz='SELECT treść_pyt FROM pytania;';
                    $query=mysqli_query($con,$sprawdz);
                    $zap='SELECT id_pyt,odp1,odp2,odp3,odp4 FROM pytania';
                    $query1=mysqli_query($con,$zap);
                    $zap2='SELECT COUNT(id_pyt) FROM odpowiedzi GROUP BY id_pyt';
                    $query2=mysqli_query($con,$zap2);
                    $typ=[];
                    while($row=mysqli_fetch_array($query2)){
                        array_push($typ,$row['COUNT(id_pyt)']);
                    }
                    $pytanie=[];
                    $odpowiedzi=[];
                    $nr=$_SESSION['count']+1;
                    while($row=mysqli_fetch_array($query)){
                        $dane='<div id="pytanie">'.$nr.". ".$row['treść_pyt'].'</div>';
                        array_push($pytanie,$dane); 
                    }while($row=mysqli_fetch_array($query1)){
                        if($typ[$row['id_pyt']-1]>1){
                            $dane= 
                        '<div id="odpowiedzi">
                            <div id="input">
                                <input type="checkbox" name="odp[]" id="odp" value=1><p>A. '.$row['odp1'].'</p>
                            </div>
                            <div id="input">
                                <input type="checkbox" name="odp[]" id="odp" value=2><p>B. '.$row['odp2'].'</p>
                            </div>
                            <div id="input">
                                <input type="checkbox" name="odp[]" id="odp" value=3><p>C. '.$row['odp3'].'</p>
                            </div>
                            <div id="input">
                                <input type="checkbox" name="odp[]" id="odp" value=4><p>D. '.$row['odp4']."</p>
                            </div>
                        </div>";
                        }else{
                            $dane= 
                            '<div id="odpowiedzi">
                                <div id="input">
                                    <input type="radio" name="odp" id="odp" value=1><p>A. '.$row['odp1'].'</p>
                                </div>
                                <div id="input">
                                    <input type="radio" name="odp" id="odp" value=2><p>B. '.$row['odp2'].'</p>
                                </div>
                                <div id="input">
                                    <input type="radio" name="odp" id="odp" value=3><p>C. '.$row['odp3'].'</p>
                                </div>
                                <div id="input">
                                    <input type="radio" name="odp" id="odp" value=4><p>D. '.$row['odp4']."</p>
                                </div>
                            </div>"; 
                        }
                        
                        array_push($odpowiedzi,$dane);

                        // if(isset($_POST['odp']))
                        // array_push($_SESSION['odp'],$dane);
                    }
                    
                    
                    echo $pytanie[$_SESSION['count']];
                    echo $odpowiedzi[$_SESSION['count']];
                    // echo $_SESSION['count'];
                    
                    // if($typ[$_SESSION['count']]>1){
                        
                    // }else{
                    //     $_SESSION['odp'][$_SESSION['count']]=$_POST['odp'];
                    // }
                    
                ?>
                <div id="selectedOptions"></div>
                <script>
                    // // Pobranie zawartości diva
                    // var selectedOptions = document.getElementById('selectedOptions').textContent;

                    // // Wysłanie wartości za pomocą AJAX
                    // var xhr = new XMLHttpRequest();
                    // xhr.open('POST', 'egzamin.php', true);
                    // xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    // xhr.onload = function() {
                    //     if (xhr.status === 200) {
                    //         console.log('Odpowiedź z serwera:', xhr.responseText);
                    //     } else {
                    //         console.error('Wystąpił błąd:', xhr.statusText);
                    //     }
                    // };
                    // xhr.send('selectedOptions=' + encodeURIComponent(selectedOptions));
                </script>
                <?php
                    // $selectedOptions = $_POST['selectedOptions'];

                    // echo 'Otrzymano wartości: ' . $selectedOptions;
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