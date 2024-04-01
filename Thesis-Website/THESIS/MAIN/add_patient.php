<?php
include 'session.php';
if(isset($_POST['add'])){
    $name = $_POST['patientName'];
    $age = $_POST['age'];
    $pCase = $_POST['address'];
    $mysqli->query("INSERT INTO patients_data (Name, Age, pCase) VALUES('$name', '$age', '$pCase')") or die($mysqli->error());
    header("location: patients2.php");
}
?>