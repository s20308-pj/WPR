<?php
session_start();
if (!isset($_POST['login']) || !isset($_POST['password'])) {
    header('Location:index.php');
    exit();
}
require_once "connect_db.php";

$db = @new mysqli($host, $db_user, $db_password, $db_name);

if ($db->connect_errno != 0) {
    echo "Error: " . $db->connect_errno;
} else {
    $login = htmlentities($_POST['login'], ENT_QUOTES, "UTF-8");
    $password = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

    // $query = "SELECT * FROM login WHERE login = '$login' AND password = '$password'";

    if ($result = $db->query(
        sprintf(
            "SELECT * FROM login WHERE login = '%s' AND password = '%s'",
            mysqli_real_escape_string($db, $login),
            mysqli_real_escape_string($db, $password)
        )
    )) {
        if ($result->num_rows == 1) {
            $_SESSION['is_login'] = true;
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['first_name'];
            $_SESSION['email'] = $row['email'];
            $result->free();
            unset($_SESSION['login_failure']);
            header('Location:main.php');
        } else {
            $_SESSION['login_failure'] = 'Niepoprawny login lub hasło';
            header('Location:index.php');
        }
    }

    $db->close();
}