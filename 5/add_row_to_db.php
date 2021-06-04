<?php
session_start();
if (!isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) || !isset($_POST['login']) || !isset($_POST['password'])) {
    header('Location:index.php');
    exit();
}

$first_name =  $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

require_once "connect_db.php";

$db = @new mysqli($host, $db_user, $db_password, $db_name);

if ($db->connect_errno != 0) {
    echo "Error: " . $db->connect_errno;
} else {
    $result = $db->query("INSERT INTO login (first_name,last_name,email,login,password) VALUES ('$first_name','$last_name','$email','$login','$password')");

    if ($result) {
        $_SESSION["ok"] = "dodano wpis";
        header('Location:index.php');
    } else {
        $_SESSION['failure'] = 'Nie udało się dodać rekordu';
        header('Location:index.php');
    }
    $db->close();
}