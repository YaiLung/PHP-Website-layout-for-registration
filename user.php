<?php
session_start();
if (isset($_SESSION['user'])) {
    echo("Вы вошли как " . $_SESSION['user']['name']);
} else {
    echo("Вы не авторизированы.");
}
?>