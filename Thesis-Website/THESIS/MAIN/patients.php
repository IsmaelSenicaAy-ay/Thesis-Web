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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Common styles for both big and small screens */
        body{
            padding-top: 40px;
            background-color: #E5E6E4;
        }
        .navbar {
            background-color: #FBFBF2;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            max-height: 45px; /* Adjust the height as needed */
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
                margin-right: 20px; /* Adjust the margin between nav items */
            }

            .navbar-nav.ml-1 {
                max-width: 275px; /* Adjust the width as needed */
            }

            .profile-link {
                display: inline-flex; /* Hide the Profile link on larger screens */
            }
        }

        @media (max-width: 991px) {
            /* Styles for small screens (screens 991px or narrower) */
            .navbar-nav.ml-1 {
                margin-left: 10px; /* Adjust the margin between About and the user profile */
            }

            .navbar-nav.ml-1 .nav-item {
                margin-bottom: 0; /* Remove margin between nav items in collapsed mode */
            }

            .navbar-nav.mx-auto.nav-item {
                display: flex;
                align-items: center;
            }
            .navbar-nav.mx-auto .nav-item:last-child {
                margin-bottom: 30px; /* Add margin below the last nav item in collapsed mode */
            }
            .navbar-nav.ml-1 .nav-item .profile-circle {
                margin-right: 10px; /* Adjust the margin between Profile Circle and Profile */
            }

            .navbar-nav.ml-1 .nav-item .nav-link {
                display: flex;
                align-items: center;
                white-space: nowrap; /* Prevent text wrapping on smaller screens */
            }

            .profile-link {
                display: inline-block; /* Show the Profile link on smaller screens */
            }
            #carouselExample{
                max-height: 200px;
                overflow: hidden;
            }
        }

        #carouselExample {
            max-height: 400px; /* Set a fixed height for the carousel container */
            overflow: hidden; /* Hide any overflow to prevent images from affecting layout */
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio while covering the entire container */
        }

        #patientModal .modal-body {
            text-align: left;
        }
        .container{
            margin-top: 250px;
        }
        .rounded{
            width: 120px;
            height:120px;
            border-radius: 50%;
        }

        /* Hover effect for patient cards */
.card:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transform: translateY(-4px);
    transition: box-shadow 0.3s, transform 0.3s;
}
tr:hover{
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transform: translateY(-4px);
    transition: box-shadow 0.3s, transform 0.3s;

    background-color: aquamarine;
}
.card{
    border-radius: 15px;
}


        
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">
            <img src="profile-images/v987-18a.jpg" alt="Your Logo">
            Gait Assesment Device
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
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

    <div class="container mt-5" style="margin-top: 100px;">
        <!-- Search Bar -->
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for a patient..." aria-label="Search" aria-describedby="searchButton">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="searchButton">Search</button>
            </div>
        </div>
    </div>


<!-- Patient Cards -->
<div class="container mt-4">
    <div class="row">

        <?php 
        $result = $mysqli->query("SELECT * FROM patients_data") or die($mysqli->error());
        while($row = $result->fetch_assoc()):
        $id =  $row['ID']; 
        ?>

        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <p class="card-text" hidden><?php echo $id ?></p>
                        <h5 class="card-title"><?php echo $row['Name'] ?></h5>
                        <p class="card-text"><?php echo $row['Age'] ?></p>
                        <p class="card-text"><?php echo $row['pCase'] ?></p>
                    </div>
                    <a href="patient_profile.php?id=<?php echo $id; ?>">
                        <button type="button" class="btn btn-primary btn-sm align-self-start">
                            ...
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        
    </div>
</div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
