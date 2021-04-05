<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $reserwationTime=date("d.m.Y H:i:s");
        $nunberOfPeople=$_POST["nunberOfPeople"];

        $cardNumber=$_POST["cardNumber"];
        $email=$_POST["email"];
        $arrival=$_POST["arrival"];
        $leave=$_POST["leave"];

        echo"<p>zamówienie z dnia: $reserwationTime</p><br>";
        echo"<p>Ilość osób: $nunberOfPeople</p>";
        for($i=0;$i<$nunberOfPeople;$i++){
        $firstName=$_POST["firstName$i"];
        echo"<p>Imię: $firstName</p>";
        $lastName=$_POST["lastName$i"];
        echo"<p>Nazwisko: $lastName</p>";
        $address=$_POST["address$i"];
        echo"<p>Adres: $address</p>";
        }
        echo"<p>Numer Karty: $cardNumber";
        echo"<p>adres e-mail: $email";
        echo"<p>Data Przybycia: $arrival";
        echo"<p>Data wyjazdu: $leave</p>";
    ?>
</body>
</html>