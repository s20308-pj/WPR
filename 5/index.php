<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baza</title>

</head>

<body>

    <form action="add_row_to_db.php" method="POST">
        <p>podaj imię:</p>
        <input type="text" name="first_name">
        <p>podaj nazwisko:</p>
        <input type="text" name="last_name">
        <p>podaj e-mail:</p>
        <input type="email" name="email">
        <p>podaj login:</p>
        <input type="text" name="login">
        <p>podaj hasło:</p>
        <input type="password" name="password"><br /><br />
        <input type="submit" value="wyślij">
    </form>

    <?php
    if (isset($_SESSION["ok"])) {
        echo $_SESSION["ok"];
    }
    ?>
    <br /><br />
    <form action="take_row_from_db.php" method="POST">
        <p>podaj numer ID:</p>
        <input type="number" name="index"><br /><br />
        <input type="submit" value="pobierz">
    </form>
    <br /><br />

    <?php
    if (isset($_SESSION["row"])) {
        echo  '<table cellpadding="5" border="1"><tr>';
        for ($i = 0; $i < count($_SESSION['row']); $i++) {
            echo  '<td>' . $_SESSION['row'][$i] . '</td>';
        }
        echo '</tr></table>';
    }
    if (isset($_SESSION["failure"])) {
        echo  $_SESSION["failure"];
    }

    ?>

    <form action="take_all_from_db.php" method="POST">
        <p>cała baza danych:</p>
        <input type="submit" value="pobierz">
    </form>
    <br /><br />
    <?php
    if (isset($_SESSION["array"])) {
        echo  '<table cellpadding="5" border="1">';
        for ($i = 0; $i < count($_SESSION['array']); $i++) {
            echo '<tr>';
            if (isset($_SESSION["array"][$i])) {
                for ($j = 0; $j < count($_SESSION['array'][$i]); $j++) {
                    echo  '<td>' . $_SESSION['array'][$i][$j] . '</td>';
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    if (isset($_SESSION["failure"])) {
        echo  $_SESSION["failure"];
    }
    ?>
    <form action="clear_session.php" method="POST">
        <p>czyszczenie</p>
        <input type="submit" value="wyczyść">
    </form>
</body>

</html>