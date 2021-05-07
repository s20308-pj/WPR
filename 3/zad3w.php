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
        
        form {
            display: flex;
            justify-content: left;
            align-items: center;
            border-radius: 20px;
            padding: 30px;
        }
        
        div {
            padding: 10% 5%;
        }
        
        div label {
            display: block;
            margin: 5px 0;
        }
        
        input,
        select {
            border: 1px black solid;
        }
        
        input[name="send"] {
            border-radius: 4px;
            font-size: 30px;
        }
        
        input[name="send"]:hover {
            border-radius: 15px;
            transition: .2s;
        }
    </style>
</head>

<body>

    <form method="post">
        <div>
            <label for="numberOfPeaople">Podaj ilość osób</label>
            <select id="numberOfPeaople" name="numberOfPeaople">
                <option value="1">1 osoba</option>
                <option value="2">2 osoby</option>
                <option value="3">3 osoby</option>
                <option value="4">4 osoby</option>
            </select>
            <label for="firstName">Imię</label>
            <input type="text" id="firstName" name="firstName" placeholder="Podaj Imię">
            <label for="lastName">Nazwisko</label>
            <input type="text" id="lastName" name="lastName" placeholder="Podaj Nazwisko">
            <label for="address">Adres</label>
            <input type="text" id="address" name="address" placeholder="Podaj Adres">
            <label for="cardNumber">Numer Karty Kredytowej</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="Podaj numer karty kredytowej">
            <label for="email">e-Mail</label>
            <input type="email" id="email" name="email" placeholder="Podaj Adres Mailowy">
        </div>
        <div>
            <input type="submit" name="send" value="Wyślij">
            <label for="arrival">Data Przyjazdu</label>
            <input type="date" id="arrival" name="arrival">
            <label for="leave">Data Wyjazdu</label>
            <input type="date" id="leave" name="leave">
        </div>

    </form>
    <?php
    if(isset($_POST["send"])){
        echo "<br> zamowienie zostało wysłane";
        $data = array (
        $_POST["numberOfPeaople"],
        $_POST["firstName"],
        $_POST["lastName"],
        $_POST["address"],
        $_POST["cardNumber"],
        $_POST["email"],
        $_POST["arrival"],
        $_POST["leave"] );
        $fp = fopen('order.csv', 'a');
        fputcsv($fp, $data, ';');
        fclose($fp);
    }
    ?>

<form method="post">
<input type="submit" name="load" value="Wczytaj">
</form>
<?php
if(isset($_POST["load"])){
    $rowNumber = 1;
    if (($fp = fopen("order.csv", "r")) !== FALSE) 
    {
        $colName = fgetcsv($fp, 1000, ";");
        while (($row = fgetcsv($fp, 1000, ";")) !== FALSE) 
        {
            $colNumber = count($row);
            $rowNumber++;
            echo "<p>Zamowienie $rowNumber</p>";
            for ($x=0; $x < $colNumber; $x++) {
                echo $colName[$x].": ".$row[$x]."<br>";
            }
        }
     
        fclose($fp);
    }
}
?>
</body>

</html>