<?php
session_start();

if ((isset($_SESSION['is_login'])) && ($_SESSION['is_login'] == true)) {
    header('Location:main.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bazy
    </title>
</head>

<body>
    <form action="login.php" method="POST">
        <p>Login:</p>
        <input type="text" name="login"><br />
        <p>Hasło:</p>
        <input type="password" name="password"><br /><br />
        <input type="submit" value="Zaloguj">
    </form>
    <?php
    if (isset($_SESSION['login_failure'])) {
        echo $_SESSION['login_failure'];
    }
    ?>
</body>

</html>