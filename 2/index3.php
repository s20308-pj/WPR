<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>rezerwacja</title>
    <style type="text/css">
        body {
            box-sizing: border-box;
        }
        
        div {
            padding: 1% 3%;
        }
        div label {
            display: block;
            margin: 5px 0;
        }
        div.name {
            display: flex;
            justify-content: left;
            align-items: center;
            border-radius: 20px;
            padding: 0;
        }
               
        input,
        select {
            border: 1px black solid;
        }
        
        input.submit {
            margin: 10px 0;
            border-radius: 4px;
            font-size: 20px;
        }
        
        input.submit:hover {
            border-radius: 15px;
            transition: .2s;
        }
    </style>
</head>

<body>

    <form method="post">
        <div>
            <label for="number">Podaj ilość osób</label>
            <select id="number" name="number">
                <option value="1">1 osoba</option>
                <option value="2">2 osoby</option>
                <option value="3">3 osoby</option>
                <option value="4">4 osoby</option>
                <option value="5">5 osób</option>
            </select>
            <input type="submit" name="confirmNumberOfPeaople" class="submit" value="Zatwierdz">
    </form>
    <?php
    if(isset($_POST["confirmNumberOfPeaople"])){
        $number=$_POST["number"];
        echo"<form method=\"post\" action=\"zad3.php\">";
        echo"<input name=\"nunberOfPeople\" value=\"$number\" hidden>";
        echo"<div class=\"name\">";
        for($i=0;$i<$number;$i++){
            echo"<div>";
            echo"<label for=\"firstName\">Imię</label>";
            echo"<input type=\"text\" id=\"firstName\" name=\"firstName$i\" placeholder=\"Podaj Imię\">";
            echo"<label for=\"lastName\">Nazwisko</label>";
            echo"<input type=\"text\" id=\"lastName\" name=\"lastName$i\" placeholder=\"Podaj Nazwisko\">";
            echo"<label for=\"address\">Adres</label>";
            echo"<input type=\"text\" id=\"address\" name=\"address$i\" placeholder=\"Podaj Adres\">";
            echo"</div>";
        }
        echo"</div>";
        echo"<div class=\"date\">";
        
        echo"<label for=\"cardNumber\">Numer Karty Kredytowej</label>";
        echo"<input type=\"text\" id=\"cardNumber\" name=\"cardNumber\" placeholder=\"Podaj numer karty kredytowej\">";
        echo"<label for=\"email\">e-Mail</label>";
        echo"<input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Podaj Adres Mailowy\">";
        echo"<label for=\"arrival\">Data Przyjazdu</label>";
        echo"<input type=\"date\" id=\"arrival\" name=\"arrival\">";
        echo"<label for=\"leave\">Data Wyjazdu</label>";
        echo"<input type=\"date\" id=\"leave\" name=\"leave\"><br>";
        echo"<input type=\"submit\" name=\"send\" class=\"submit\" value=\"Wyślij\">";
        echo"</div>";
    }
?>
</body>

</html>