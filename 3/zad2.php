<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zapis do pliku
    </title>
</head>

<body>
    <form method="post">
        <div>
            <label for="insert some text">Imię</label>
            <input type="text" id="text" name="text" placeholder="Wpisz text">
            <input type="submit" name="write" value="Wyślij">
    </form>
    <?php 
    
    if(isset($_POST["write"])){
        $text = $_POST["text"];
        echo "<br>zapisano: $text";
        $text = "$text \n";
        $file = "zad2.txt";
        $fp = fopen($file, "a");
        fwrite($fp, $text);
        fclose($fp);
    }
?>
</body>

</html>