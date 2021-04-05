<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- zad1 -->

<h3>zad1</h3>

<?php
echo"Witaj w świecie PHP!!!";
?>

<!-- zad2 -->

<h3>zad2 - obliczanie pola</h3>
<form method="post">
    <input type="number" name="a" placeholder="podaj a">
    <input type="number" name="b" placeholder="podaj b">
    <input type="submit" value="oblicz" name="go2">
</form>

<?php
if(isset($_POST["go2"])){
    $a=$_POST["a"];
    $b=$_POST["b"];
    echo "<br><br>";
    echo"a*b=";
    echo $a*$b;
    }
?>

<!-- zad3 -->

<h3>zad3 - obliczanie pierwiastka</h3>
<form method="post">
    <input type="number" name="q" placeholder="podaj liczbę">
    <input type="submit" value="oblicz" name="go3">
</form>

<?php
if(isset($_POST["go3"])){
    $q=$_POST["q"];
    echo "<br><br>";
    echo number_format(sqrt($q), 2);
    }
?>

<!-- zad4 -->

<h3>zad4 - obliczanie dwóch liczb naturalnych</h3>
<form method="post">
    <input type="submit" value="oblicz" name="go4">
</form>

<?php
if(isset($_POST["go4"])){
    $randomFirstNumber = rand (0,100);
    $randomSecondNumber = rand (0,100);
    echo "<br>";
    echo "pierwsza liczba".$randomFirstNumber."<br>";
    echo "pierwsza liczba".$randomSecondNumber."<br><br>";
    echo "suma=".($randomFirstNumber + $randomSecondNumber)."<br>";
    echo "różnica=".($randomFirstNumber - $randomSecondNumber)."<br>";
    echo "iloczyn=".($randomFirstNumber * $randomSecondNumber)."<br>";
    echo "iloraz=".($randomFirstNumber / $randomSecondNumber)."<br>";
    echo "modulo=".($randomFirstNumber % $randomSecondNumber)."<br>";
    }
?>

<!-- zad5 -->

<h3>zad5 - pobieranie stringów</h3>
<form method="post">
    <input type="text" name="twoString" placeholder="podaj dwa ciągi znaków">
    <input type="submit" value="zamień" name="go5">
</form>

<?php
if(isset($_POST["go5"])){
    $twoString = $_POST["twoString"];
    $stringArray = preg_split('/\s/', $twoString);
    echo "<br>";
    echo "%$stringArray[1] $stringArray[0]%\$#";
    }
?>

<!-- zad6 -->

<h3>zad6 - Sprawdzanie bokow trójkąta</h3>
<form method="post">
    <input type="number" name="sideA" placeholder="bok A">
    <input type="number" name="sideB" placeholder="bok B">
    <input type="number" name="sideC" placeholder="bok C">
    <input type="submit" value="sprawdź" name="go6">
</form>

<?php
if(isset($_POST["go6"])){

    $sideA=$_POST["sideA"];
    $sideB=$_POST["sideB"];
    $sideC=$_POST["sideC"];
    
    echo "<br>";
    if($sideA+$sideB>$sideC && $sideA+$sideC>$sideB && $sideB+$sideC>$sideA){
        echo "Trójkąt da się zbudować";
        } else {
        echo "BŁĄD - nie da się zbudować";
        }
    }
?>

<!-- zad7 -->

<h3>zad7 - Miesiące</h3>
<form method="post">
    <input type="number" name="month" value="0" placeholder="podaj miesiąc">
    <input type="submit" value="sprawdź" name="go7">
</form>

<?php
if(isset($_POST["go7"])){
    $month=$_POST["month"];
    $d0 = "dni 30";
    $d1 = "dni 31";
        switch ($month) {
            case 1:
                echo "styczeń $d1";
                break;
            case 2:
                echo "luty dni 28/29";
                break;
            case 3:
                echo "marzec $d1";
                break;
            case 4:
                echo "kwiecień $d0";
                break;
            case 5:
                echo "maj $d1";
                break;
            case 6:
                echo "czerwiec $d0";
                break;
            case 7:
                echo "lipiec $d1";
                break;
            case 8:
                echo "sierpień $d1";
                break;
            case 9:
                echo "wrzesień $d0";
                break;
            case 10:
                echo "październik $d1";
                break;
            case 11:
                echo "listopad $d0";
                break;
            case 12:
                echo "grudzień $d1";
                break;
            default:
                echo "BŁĄD";
                break;
        }
    }
?>

<!-- zad8 -->

<h3>zad8 - Sortowanie</h3>
<form method="post">
    <input type="number" name="firstNumber" placeholder="podaj liczbę">
    <input type="number" name="secondNumber" placeholder="podaj liczbę">
    <input type="number" name="thirdNumber" placeholder="podaj liczbę">
    <input type="submit" value="sprawdź" name="go8">
</form>

<?php
if(isset($_POST["go8"])){
    $arrayNumber[0]=$_POST["firstNumber"];
    $arrayNumber[1]=$_POST["secondNumber"];
    $arrayNumber[2]=$_POST["thirdNumber"];


    for($i=0; $i<count($arrayNumber); $i++){
        for($j=1; $j<count($arrayNumber)-$i; $j++){
            $tempNumber = 0;
            if($arrayNumber[$j-1] > $arrayNumber[$j]){
                $tempNumber = $arrayNumber[$j-1];
                $arrayNumber[$j-1] = $arrayNumber[$j];
                $arrayNumber[$j] = $tempNumber;
            }
        }
    }

    for($i=0; $i<count($arrayNumber); $i++){
        echo "$arrayNumber[$i]  ";
    }   
    echo "<br>";
    for($i=count($arrayNumber)-1; $i>=0; $i--){
        echo "$arrayNumber[$i]  ";
    }
}
?>
<!-- zad9 -->

<h3>zad8 - Iloczyn skalarny</h3>
<form method="post">
<p>podaj liczby oddzielone spacją</p>
    <input type="text" name="arrayA" placeholder="podaj liczbę">
    <input type="text" name="arrayB" placeholder="podaj liczbę">
    <input type="submit" value="sprawdź" name="go9">
</form>
<?php
if(isset($_POST["go9"])){

    $arrayA = explode(" ", $_POST["arrayA"]);
    $arrayB = explode(" ", $_POST["arrayB"]);
    $result=0;

    if(count($arrayA) == count($arrayB)){
        for($i=0; $i<count($arrayA); $i++){
            if(is_numeric($arrayA[$i]) && is_numeric($arrayB[$i])){
                $result =+ (int)$arrayA[$i]*(int)$arrayB[$i];
            } else {
            echo "BŁĄD danych";
                exit();
            }
        }
        echo "iloczyn skalarny = $result";
    } else {
        echo "BŁĄD danych ";
    }
}
?>

<!-- zad9 -->

<h3>zad8 - Wzorki</h3>
<form method="post">
<p>podaj liczbę gwiazdek</p>
    <input type="number" name="starNumber" placeholder="podaj liczbę">
    <input type="submit" value="GO!" name="go10">
</form>

<?php

if(isset($_POST["go10"])){

    $starNumber = $_POST["starNumber"];

    echo "liczba gwiazdek = $starNumber";

    for($i=0; $i<$starNumber; $i++){
        echo "<br>";
        for($j=0; $j<$i+1;$j++){
            echo "*";
        }
    }
    for($i=0; $i<$starNumber; $i++){
        echo "<br>";
        for($j=$starNumber-$i; $j>0; $j--){
            echo "*";
        }
    }
    for($i=0; $i<$starNumber; $i++){
        echo "<br>";
        for($j=0; $j<$i;$j++){
            echo '&nbsp;';
        }
        for($j=$starNumber-$i; $j>0; $j--){
            echo "*";
        }
    }
    for($i=0; $i<$starNumber; $i++){
        echo "<br>";
        for($j=$starNumber-$i-1; $j>0; $j--){
            echo '&nbsp;';
        }
        for($j=0; $j<$i+1;$j++){
            echo "*";
        }
    }
}
?>

<!-- zad11 -->

<h3>zad11 - Panagram</h3>
<form method="post">
<p>podaj zdanie</p>
    <input type="text" name="sentence" value="The quick brown fox jumps over the lazy dog" placeholder="wpisz">
    <input type="submit" value="sprawdź" name="go11">
</form>

<?php

if(isset($_POST["go11"])){
    $sentence = strtolower($_POST["sentence"]);
    $arrayAlphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    echo "<br>";
    $pan=TRUE;
    for($i=0; $i<count($arrayAlphabet);$i++){
        if(strstr($sentence, $arrayAlphabet[$i])==FALSE){
            $pan=FALSE;
        }
    }
    if($pan){
        echo "zdanie jest panagramem";
    } else {
        echo "zdanie nie jest panagramem"; 
    }
}
?>

</body>
</html>

