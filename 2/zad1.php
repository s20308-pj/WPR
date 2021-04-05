<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>kalkulator</title>
</head>

<body>
    <h3>zad1 - kalkulator</h3>
    <form method="post">
        <input type="number" name="a" placeholder="podaj a">
        <input type="number" name="b" placeholder="podaj b">
        <label>
            <input type="radio" name="action" value="add">
            Dodawanie </label>
        <label>
            <input type="radio" name="action" value="sub">
            Odejmowanie </label>
        <label>
            <input type="radio" name="action" value="mul">
            Mnożenie </label>
        <label>
            <input type="radio" name="action" value="div">
            Dzielenie </label>  
        <input type="submit" value="oblicz" name="execute">
    </form>

    <?php
if(isset($_POST["execute"])){
    $a=$_POST["a"];
    $b=$_POST["b"];
    $result = 0;
    $action = $_POST["action"];
    switch ($action){
        case "add":
            $result = $a+$b;
            break;

        case "sub":
            $result = $a-$b;
            break;

        case "mul":
            $result = $a*$b;
            break;

        case "div":
            if($b!=0){
                $result = $a/$b;
                } else {
                    echo"<br><br>dzaiałanie niemożliwe";
                    exit();
                }
            break;
    }
    echo "<br><br>a*b= $result";
    }
?>
</body>

</html>