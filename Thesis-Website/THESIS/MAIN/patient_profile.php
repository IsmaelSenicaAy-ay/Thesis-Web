<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Patient Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Common styles for both big and small screens */
        body {
            padding-top: 40px;
        }

        .navbar {
            background-color: #FBFBF2;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            max-height: 45px;
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

        /* Styles for big screens (screens wider than 992px) */
        @media (min-width: 992px) {
            .navbar-nav {
                margin: auto 0;
            }

            .navbar-nav .nav-item {
                margin-right: 20px;
            }

            .navbar-nav.ml-1 {
                max-width: 275px;
            }

            .profile-link {
                display: inline-flex;
            }
        }

        /* Styles for small screens (screens 991px or narrower) */
        @media (max-width: 991px) {
            .navbar-nav.ml-1 {
                margin-left: 10px;
            }

            .navbar-nav.ml-1 .nav-item {
                margin-bottom: 0;
            }

            .navbar-nav.mx-auto.nav-item {
                display: flex;
                align-items: center;
            }

            .navbar-nav.mx-auto .nav-item:last-child {
                margin-bottom: 30px;
            }

            .navbar-nav.ml-1 .nav-item .profile-circle {
                margin-right: 10px;
            }

            .navbar-nav.ml-1 .nav-item .nav-link {
                display: flex;
                align-items: center;
                white-space: nowrap;
            }

            .profile-link {
                display: inline-block;
            }
        }

        /* Hover effect for patient cards */
        .card:hover,
        tr:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-4px);
            transition: box-shadow 0.3s, transform 0.3s;
        }

        /* Add any other styles you need */
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
                    <a class="nav-link" href="#">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content of the patient_details.html page -->
    <div class="container mt-5">
        <a href="patients.php" class="btn btn-secondary mb-3">Back to Patients</a>
        <div class="row justify-content-center align-items-start">
            <!-- Display patient's picture here -->
            <div class="col-md-4 mb-5 text-center">
                <img src="profile-images/IMG_1994.JPG" alt="Patient Picture" class="img-fluid"
                    style="max-width: 140px; border-radius: 50%;">
            </div>
            <div class="col-md-8 text-center text-md-left">
            <div class="col-md-8 text-center text-md-left">
            <?php 
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $result = $mysqli->query("SELECT * FROM patients_data WHERE ID = '$id'") or die($mysqli->error());
                    while($row = $result->fetch_assoc()):
            ?>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="lead"><strong>Name:</strong> <?php echo $row['Name'];?></p>
                        </div>
                        <div class="col-md-12">
                            <p><strong>Age:</strong><?php echo $row['Age'];?></p>
                        </div>
                        <div class="col-md-12">
                            <p><strong>Gender:</strong> <?php echo $row['Gender'];?></p>
                        </div>
                        <div class="col-md-12">
                            <p><strong>Address:</strong> <?php echo $row['Address'];?></p>
                        </div>
                    </div>
                    <!-- Add the new information fields -->
                    <hr>
            <?php 
                    endwhile;
                } else {
                    echo "No ID parameter provided.";
                }
            ?>
        </div>


            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Consultation Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="clickable-row">
                                <td>December 08, 2001 - 12:00 am</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                <!-- Add more information fields as needed -->
            </div>
        </div>
    </div>

   <!-- Modal for Consultation Details -->
<div class="modal fade" id="consultationModal" tabindex="-1" role="dialog" aria-labelledby="consultationModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="consultationModalLabel">Consultation Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Make the table responsive -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Consultation Date</th>
                            <th>Phase</th>
                            <th>Image</th>
                            <th>Angles</th>
                            <th>Weight Distribution</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Date</td>
                            <td>Phase 1- Frame 2</td>
                            <td style="max-width: 100px; max-height: 100px;">
                                <img src="profile-images/phase1.png" class="mw-100 mh-100" style="width: 100%; height: auto;">
                              </td>
                              
                            <td>Angle</td>
                            <td>Distribution</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>Phase 2- Frame 2</td>
                            <td style="max-width: 100px; max-height: 100px;">
                                <img src="profile-images/phase2.png" class="mw-100 mh-100" style="width: 100%; height: auto;">
                              </td>
                              
                            <td>Angle</td>
                            <td>Distribution</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>Phase 3- Frame 2</td>
                            <td style="max-width: 100px; max-height: 100px;">
                                <img src="profile-images/phase3.png" class="mw-100 mh-100" style="width: 100%; height: auto;">
                              </td>
                              
                            <td>Angle</td>
                            <td>Distribution</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>Phase 4- Frame 2</td>
                            <td style="max-width: 100px; max-height: 100px;">
                                <img src="profile-images/phase4.png" class="mw-100 mh-100" style="width: 100%; height: auto;">
                              </td>
                              
                            <td>Angle</td>
                            <td>Distribution</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>Phase 5- Frame 2</td>
                            <td style="max-width: 100px; max-height: 100px;">
                                <img src="profile-images/phase5.png" class="mw-100 mh-100" style="width: 100%; height: auto;">
                              </td>
                              
                            <td>Angle</td>
                            <td>Distribution</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>Phase 6- Frame 2</td>
                            <td style="max-width: 100px; max-height: 100px;">
                                <img src="profile-images/phase6.png" class="mw-100 mh-100" style="width: 100%; height: auto;">
                              </td>
                              
                            <td>Angle</td>
                            <td>Distribution</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>Phase 7- Frame 2</td>
                            <td style="max-width: 100px; max-height: 100px;">
                                <img src="profile-images/phase7.png" class="mw-100 mh-100" style="width: 100%; height: auto;">
                              </td>
                              
                            <td>Angle</td>
                            <td>Distribution</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>Phase 8- Frame 2</td>
                            <td style="max-width: 100px; max-height: 100px;">
                                <img src="profile-images/phase8.png" class="mw-100 mh-100" style="width: 100%; height: auto;">
                              </td>
                              
                            <td>Angle</td>
                            <td>Distribution</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // Add click event for clickable rows
            $('.clickable-row').click(function () {
                // Show the modal
                $('#consultationModal').modal('show');
            });
        });
    </script>
</body>

</html>
