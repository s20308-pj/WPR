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
        //$reserwationTime=getTimestamp();
        $numberOfPeaople=$_POST["numberOfPeaople"];
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $address=$_POST["address"];
        $cardNumber=$_POST["cardNumber"];
        $email=$_POST["email"];
        $arrival=$_POST["arrival"];
        $leave=$_POST["leave"];

        //echo"<p>zamówienie z dnia: $reserwationTime</p><br>";
        echo"<p>Ilość osób: $numberOfPeaople</p>";
        echo"<p>Imię: $firstName</p>";
        echo"<p>Nazwisko: $lastName</p>";
        echo"<p>Adres: $address</p>";
        echo"<p>Numer Karty: $cardNumber</p>";
        echo"<p>adres e-mail: $email</p>";
        echo"<p>Data Przybycia: $arrival</p>";
        echo"<p>Data wyjazdu: $leave</p>";
    ?>
</body>
</html>