<?php include 'conn.php';
	session_start();
	

	if(!isset($_SESSION['type']) || trim($_SESSION['type']) == ''){
		header('location: login.php');
	}
	else{
	$result = $mysqli->query("SELECT * FROM account WHERE id ='".$_SESSION["username"]."'") or die($mysqli->error());
	$user = $result->fetch_assoc();
	};
	
?>