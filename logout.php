<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
} else if (isset($_SESSION['user']) != "") {
    session_destroy();
    unset($_SESSION['user']);
    header("Location: thankyou.html");
}

/*if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("Location: login.php");
    exit;
}*/