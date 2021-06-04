<?php
session_start();

require_once "connect_db.php";

$db = @new mysqli($host, $db_user, $db_password, $db_name);

if ($db->connect_errno != 0) {
    echo "Error: " . $db->connect_errno;
} else {
    if ($result = $db->query("SELECT * FROM login")) {
        if ($result->num_rows > 1) {
            $i = 0;
            while ($_SESSION["array"][$i] = $result->fetch_row()) {
                $i++;
            }
            $result->free();
            unset($_SESSION['failure']);
            header('Location:index.php');
        } else {
            $_SESSION['failure'] = 'Nie udało się bazy';
            echo $_SESSION['failure'];
            unset($_SESSION["array"]);
            header('Location:index.php');
        }
    }
    $db->close();
}