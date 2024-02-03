<?php include 'conn.php';
session_start();
if (!isset($_SESSION['email']) || $_SESSION['email'] == '') {
    // Redirect to the login page
    header("Location: login.php");
    exit(); // Stop further execution
}?>