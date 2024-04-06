<?php
include 'session.php';

if(isset($_POST['add'])) {
    $name = $_POST['patientName'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    // Handle file upload for profile image
    $profileImage = $_FILES['profileImage']['name'];
    $targetDir = "uploads/"; // Directory where uploaded files will be stored
    $targetFilePath = $targetDir . basename($profileImage);
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["profileImage"]["tmp_name"]);
    if($check !== false) {
        // Allow certain file formats
        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit;
        }

        // Upload file to server
        if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFilePath)) {
            // Insert patient data into database
            $query = "INSERT INTO patients_data (Name, Age, Address, Gender, Image) VALUES ('$name', '$age', '$address', '$gender', '$profileImage')";
            if($mysqli->query($query) === TRUE) {
                header("location: patients3.php");
                exit;
            } else {
                echo "Error: " . $query . "<br>" . $mysqli->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }
}
?>
