<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header('Location:index.php');
    exit();
}
?>
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
    echo "Witaj " . $_SESSION['name'] . '<br/>';
    echo $_SESSION['email'] . '<br/>';
    echo '<a href="logout.php"><button>logoff</button></a>';
    ?>
</body>

</html>