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
        body {
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
            
            #carouselExample {
                max-height: 200px;
                overflow: hidden;
            }
            .table th:nth-child(2),
            .table td:nth-child(2),
            .table th:nth-child(3),
            .table td:nth-child(3) {
                display: none;
            }

            #addPatientSection {
                display: none;
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
        
        .container-fluid {
            margin-top: 50px; /* Adjust the margin-top for better alignment */
        }
        
        .rounded {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        /* Hover effect for patient cards */
        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-4px);
            transition: box-shadow 0.3s, transform 0.3s;
            background-color: aquamarine;
        }

        .card {
            border-radius: 15px;
            height: auto; /* Allow the card to adjust its height based on content */
            transition: box-shadow 0.3s, transform 0.3s;
        }

        .card .card-body {
            display: flex;
            flex-direction: column;
            padding: 15px;
        }

        .card .card-body h5 {
            margin-bottom: 5px; /* Adjust the margin between card title and other text */
        }
        
        .card .card-text {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .card .card-body .topright {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .input-group {
            margin-top: 20px; /* Adjust the margin as needed */
        }

        .form-control {
            border-radius: 20px; /* Add some border-radius to the search input */
        }

        #searchButton {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            background-color: #007BFF; /* Change button background color */
            color: #fff; /* Change button text color */
        }

        #searchButton:hover {
            background-color: #0056b3; /* Change button background color on hover */
        }

        #addPatientSection {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            /*width: 100%; Remove fixed width */
            margin: auto; /* Center the section horizontally */
        }

        #addPatientSection label {
            display: block;
            margin-bottom: 10px;
        }

        #addPatientSection input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="patients.html">Patients</a>
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

    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Search Bar -->
            <div class="col-lg-9 col-md-9 col-sm-9">
                <!-- Content for the left section -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for a patient..." aria-label="Search" aria-describedby="searchButton">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="searchButton">Search</button>
                    </div>
                    <div class="col-lg-3 offset-lg-1 d-lg-none mt-4 d-flex justify-content-center align-items-center ">
                        <button type="button" class="btn btn-primary btn-block w-50 "  data-toggle="modal" data-target="#addPatientModal">Add Patient</button>
                    </div>
                </div>

                <div class="container mt-4">
                    <!-- Table to display patients -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th hidden>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Case</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $result = $mysqli->query("SELECT * FROM patients_data") or die($mysqli->error());
                                while($row = $result->fetch_assoc()):
                                $id =  $row['ID']; 
                                ?>
                            <tr>
                                <td hidden><?php echo $id ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Age'] ?></td>
                                <td><?php echo $row['pCase'] ?></td>
                                <td>
                                <a href="patient_profile.php?id=<?php echo $id; ?>">
                                    <button type="button" class="btn btn-primary btn-sm align-self-start">
                                       View
                                    </button>
                                </a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                    
                </div>
            </div>
           

            

            <!-- Add Patient Section -->
            <div class="col-lg-3 col-md-3 col-sm-3">
                <!-- Content for the right section -->
                <div class="container mt-4 d-flex justify-content-center align-items-center">
                    <div id="addPatientSection">
                        <h2 class="mb-3">Add Patient</h2>
                        <form>
                            <div class="form-group">
                                <label for="patientName">Patient Name:</label>
                                <input type="text" class="form-control" id="patientName" name="patientName" placeholder="Enter patient name">
                            </div>

                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="Enter age">
                            </div>

                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                            </div>

                            <button type="submit" class="btn btn-primary">Add Patient</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addPatientModal" tabindex="-1" role="dialog" aria-labelledby="addPatientModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPatientModalLabel">Add Patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="patientName">Patient Name:</label>
                            <input type="text" class="form-control" id="patientName" name="patientName" placeholder="Enter patient name">
                        </div>

                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="text" class="form-control" id="age" name="age" placeholder="Enter age">
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                        </div>

                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Patient</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript to handle modal display -->
    <script>
        $(document).ready(function() {
            // Show the modal when the button is clicked
            $('#addPatientModalButton').click(function() {
                $('#addPatientModal').modal('show');
            });
        });
    </script>
</body>
</html>
