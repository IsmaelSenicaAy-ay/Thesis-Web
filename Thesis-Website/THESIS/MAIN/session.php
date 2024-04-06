<script src="sweetalert.js"></script>
<?php 
include 'conn.php';
session_start();


if (isset($_POST['login'])) {
    $email = trim($_POST['email']); 
    $password = trim($_POST['password']); 

    if (empty($email) || empty($password)) {
        echo '<script>alert("Email and password cannot be empty.");</script>';
    } else {
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
}
if(isset($_POST['register'])) {
    $username = $_POST['rusername'];
    $password = $_POST['rpassword'];
    $email = $_POST['remail'];

    if(empty($username) || empty($password) || empty($email)) {
        echo "All fields are required.";
        exit;
    }

    $stmt = $mysqli->prepare("INSERT INTO account (username, password, email) VALUES (?, ?, ?)");
    $stmt->execute([$username, $password, $email]);

    echo "Registration successful. You can now login.";
}
?>
