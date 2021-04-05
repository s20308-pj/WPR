<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liczby Pierwsze</title>
</head>

<body>
    <h3>zad4 - Sprawdzanie liczby pierwszej</h3>
    <form method="post">
    <p>Podaj liczbę do sprawdzenia</p>
        <input type="number" name="number" placeholder="podaj Liczbę">
        <input type="submit" value="Sprawdź" name="execute">
    </form>

<?php
if(isset($_POST["execute"])){
    $number=$_POST["number"];
    $isFirstNumber = true;
    for ($i=2; $i<$number-1;$i++){
        if($number%$i==0){
            $isFirstNumber = false;
            echo "$i, ";
        }
    }
    if($isFirstNumber){
        echo "<br>liczba $number jest liczbą pierwszą";
    }else {
        echo "<br>liczba $number nie jest liczbą pierwszą";
    }
    echo "<br>do sprawdzenai wykonano $i  iteracji pętli";
    // część c
    echo"<br><br><h3>sprawdzenie drugie</h3>";
    $isFirstNumber = true;
    $count = 0;
    if(($number>2&&$number%2==0)
        ||($number>3&&$number%3==0)){
        $isFirstNumber = false;
    }else {
        for($i=5; $i*$i<$number;$i+=6){
            if($number%$i==0 || $number%$i+2==0){
                $isFirstNumber = false;
            }
            $count++;
        }
    }
    if($isFirstNumber){
        echo "<br>liczba $number jest liczbą pierwszą";
    }else {
        echo "<br>liczba $number nie jest liczbą pierwszą";
    }
    echo "<br>do sprawdzenai wykonano $count iteracji pętli";
}
?>
</body>
</html>