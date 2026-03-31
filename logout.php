<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    unset($_SESSION['loggedin']);
    unset($_SESSION['id']);
    unset($_SESSION['username']);

    header('Location: login.php');
} else {
    header('Location: index.html');
}
?>