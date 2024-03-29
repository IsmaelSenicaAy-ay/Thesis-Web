<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- BOXICONS Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css">
    
    <style>
        /* Common styles for both big and small screens */
        body {
            padding-top: 40px;
            background-color: #E5E6E4;
        }

        .navbar {
            background-color: #FBFBF2;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            max-height: 45px;
            /* Adjust the height as needed */
        }

        .navbar-nav .nav-link {
            font-size: 18px;
        }

        .profile-circle {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid rgb(140, 129, 129);
        }

        .profile-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (min-width: 992px) {
            /* Styles for big screens (screens wider than 992px) */
            .navbar-nav {
                margin: auto 0;
            }

            .navbar-nav .nav-item {
                margin-right: 20px;
                /* Adjust the margin between nav items */
            }

            .navbar-nav.ml-1 {
                max-width: 275px;
                /* Adjust the width as needed */
            }

            .profile-link {
                display: inline-flex;
                /* Hide the Profile link on larger screens */
            }
        }

        @media (max-width: 991px) {
            /* Styles for small screens (screens 991px or narrower) */
            .navbar-nav.ml-1 {
                margin-left: 10px;
                /* Adjust the margin between About and the user profile */
            }

            .navbar-nav.ml-1 .nav-item {
                margin-bottom: 0;
                /* Remove margin between nav items in collapsed mode */
            }

            .navbar-nav.mx-auto.nav-item {
                display: flex;
                align-items: center;
            }

            .navbar-nav.mx-auto .nav-item:last-child {
                margin-bottom: 30px;
                /* Add margin below the last nav item in collapsed mode */
            }

            .navbar-nav.ml-1 .nav-item .profile-circle {
                margin-right: 10px;
                /* Adjust the margin between Profile Circle and Profile */
            }

            .navbar-nav.ml-1 .nav-item .nav-link {
                display: flex;
                align-items: center;
                white-space: nowrap;
                /* Prevent text wrapping on smaller screens */
            }

            .profile-link {
                display: inline-block;
                /* Show the Profile link on smaller screens */
            }

            /* Hide the image on smaller screens */
            .img-smaller {
                display: none;
            }
        }

        .container {
            padding-top: 50px;
        }

        .card.text {
            background-color: transparent;
            border: none;
        }
        .text1{
            background-color: transparent;
            border: none;
           
        }

        .text1 img{
            border-radius: 20px;
            box-shadow: 0 6px 10px -1px rgba(0, 0, 0, 0.5);
        }

        /* New styles for the button and image */
        .get-started-button {
            margin-bottom: 20px; /* Adjust the margin as needed */
        }

        .img-smaller {
            max-width: 60%; /* Make the image responsive */
            height: auto; /* Maintain aspect ratio */
        }

        /* Center the image in its section */
        .img-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%; /* Ensure the container takes full height */
        }
        .text2{
            background-color: transparent;
            border: none;
        }
        .text2 i {
            font-size: 40px; /* Adjust the font size as needed */
            margin-right: 3px; /* Adjust the margin between icon and text */
        }
        .text2 p {
            margin-bottom: 0; /* Remove default margin for paragraph */
        }
        .reason{
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">
            <img src="profile-images/v987-18a.jpg" alt="Your Logo">
            Gait Assessment Device
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="patients.php">Patients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-1">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="profile-circle">
                            <img src="profile-images/IMG_1994.JPG" alt="User Profile">
                        </div>
                        <span class="d-lg-none ml-2">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card text">
                    <div class="card-body">
                        <h2 class="card-title">GAIT ASSESSMENT DEVICE</h2>
                        <p class="card-text">Welcome to Gait Assessment Monitoring Hub! Step into a world of precision
                            and progress as we revolutionize the way you monitor and optimize your gait. Explore real-time
                            insights, personalized feedback, and cutting-edge analytics to enhance your mobility. Your
                            journey to better movement starts here!</p>
                        <a href="patients.php" class="btn btn-primary get-started-button">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="img-container">
                    <img src="profile-images/v987-18a-removebg-preview.png" class="img-fluid img-smaller"
                        alt="Gait Assessment Device">
                </div>
            </div>
        </div>
        <div class="row mt-4 feature_dock">
            <div class="col-lg-4 mb-4">
                <div class="card text1">
                    <div class="card-body">
                        
                        <img src="profile-images/pic1.jpg" alt="Feature 1" class="img-fluid mb-3">
                        <p class="card-text">Monitor your gait in real-time, providing instant feedback and insights to
                            enhance your movement patterns.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card text1">
                    <div class="card-body">
                        <img src="profile-images/pic2.jpg" alt="Feature 2" class="img-fluid mb-3">
                        <p class="card-text">Receive personalized feedback tailored to your unique gait characteristics,
                            helping you optimize your movement patterns.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card text1">
                    <div class="card-body">
                        
                        <img src="profile-images/pic1.jpg" alt="Feature 3" class="img-fluid mb-3">
                        <p class="card-text">Utilize advanced analytics to gain insights into your gait patterns, enabling
                            data-driven decisions for improving mobility and overall health.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4" >
            <!-- Left column with "Why choose us?" heading -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div>
                    <h2>Why choose us?</h2>
                    <p class="reason">Here are some reasons.</p>
                </div>
            </div>

            <!-- Right column with 3 cards stacked vertically -->
           
            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card text2 mb-4">
                    <div class="card-body text-center d-flex align-items-center">
                        <i class="fas fa-regular fa-clock mr-3"></i>
                        <p class="card-text">Reason 1 description goes here.</p>
                    </div>
                </div>
                <div class="card text2 mb-4">
                    <div class="card-body text-center d-flex align-items-center">
                        <i class="fas fa-solid fa-heart mr-3"></i>
                        <p class="card-text">Reason 2 description goes here.</p>
                    </div>
                </div>
                <div class="card text2 mb-4">
                    <div class="card-body text-center d-flex align-items-center">
                        <i class="fas fa-solid fa-user-nurse m-3"></i>
                        <p class="card-text">Reason 3 description goes here.</p>
                    </div>
                </div>
            </div>


            
            

            
        </div>
    </div>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
