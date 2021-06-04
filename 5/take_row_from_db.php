<?php
session_start();
if (!isset($_POST['index'])) {
    header('Location:index.php');
    exit();
}
$id = $_POST['index'];

require_once "connect_db.php";

$db = @new mysqli($host, $db_user, $db_password, $db_name);

if ($db->connect_errno != 0) {
    echo $db->connect_errno;
} else {
    if ($result = $db->query("SELECT * FROM login WHERE id = $id")) {
        if ($result->num_rows == 1) {
            $_SESSION["row"] = $result->fetch_row();
            $result->free();
            unset($_SESSION['failure']);
            header('Location:index.php');
        } else {
            $_SESSION['failure'] = 'Nie udało się obrać rekordu';
            echo $_SESSION['failure'];
            unset($_SESSION["row"]);
            header('Location:index.php');
        }
    } else {
        header('Location:index.php');
    }
    $db->close();
}