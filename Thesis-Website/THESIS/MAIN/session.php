<script src="sweetalert.js"></script>
<?php 
include 'conn.php';
session_start();


if (isset($_POST['login'])) {
    $email = trim($_POST['email']); // Remove leading/trailing spaces
    $password = trim($_POST['password']); // Remove leading/trailing spaces

    if(empty($email) || empty($password)) {
        echo '<script>alert("Email and password cannot be empty.");</script>';
    } 
        $result = $mysqli->query("SELECT * FROM account WHERE email = '$email' AND password = '$password'")
                    or die($mysqli->error());

        if ($result->num_rows == 1) {
            $row = $result->fetch_array();
            $_SESSION["email"] = $row['id'];
            header("location: index.php");
            exit(); 
        } else {
            echo '<script>alert("Invalid Email or Password. Please try again.");</script>';
        }
    
}
?>
