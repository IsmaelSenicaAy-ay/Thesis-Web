<?php
include 'session.php';
if(isset($_GET['id'])){
    $name = $_POST['patientName'];
    $age = $_POST['age'];
    $pCase = $_POST['address'];
    $mysqli->query("Delete from patients_data where id = '".$_GET['id']."'") or die($mysqli->error());
    header("location: patients3.php");
}
?>