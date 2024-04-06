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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
        /* Common styles for both big and small screens */
        body {
            padding-top: 40px;
            background-color: #ffffff;
            font-family: 'Catamaran';
        }
        
        .navbar {
            background-color: #FBFBF2;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .sign_out{
            margin-top: 15%;
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
            border-radius: 5px;
            padding: 20px;
            width: 100%; 
            margin: auto; /* Center the section horizontally */
        }
        #addPatientSection h5{
            display: flex;
            font-size: 40px;
            font-weight: 700;
        }
        
        #addPatientSection label {
            display: block;
            margin-bottom: 10px;
            
        }

        #addPatientSection input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        #addPatientSection input::placeholder{
            color: #13bc4e;
        }
        .form-control{
            border-radius: 15px;
        }
        .table{
            border-radius: 25%;
        }
        .thead-color{
            
            border-radius: 15px;
        }
        /* Pagination controls */
        .pagination-container {
            position: fixed;
            bottom: 20px;
            left: 30%;
            transform: translateX(-50%);
        }
        .table th,
        .table td {
            padding: 5px 10px; 
            font-size: 14px; 
        }
        .actionButt{
            color: #0dcd50;
        }

        #addPatientSection button[type="submit"] {
        background-color: #13bc4e; 
        color: #fff; 
        border-radius: 20px; 
        padding: 10px 20px; 
        border: none; 
        width: 100%;
    }

    #addPatientSection button[type="submit"]:hover {
        background-color: #add1f8; /* Change button background color on hover */
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
                    <a class="nav-link sign_out" style="background-color: #13bc4e; color: #ffffff; padding: 5px 10px; border-radius: 15px; font-size: 15px;" href="login.html">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Search Bar -->
            <div class="col-lg-8 col-md-9 col-sm-9">
                <!-- Content for the left section -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for a patient..." aria-label="Search" aria-describedby="searchButton">
                    <div class="input-group-append">
                        <button class="btn" style="background-color: #ffffff; color: black; border: 1px solid rgb(97, 99, 100);" type="button" id="searchButton">Search</button>
                    </div>
                    <div class="col-lg-3 offset-lg-1 d-lg-none mt-4 d-flex justify-content-center align-items-center ">
                        <button type="button" class="btn btn-primary btn-block w-50 "  data-toggle="modal" data-target="#addPatientModal">Add Patient</button>
                    </div>
                </div>

                <!-- Add pagination controls below the table -->
                <div class="container mt-4">
                    <table class="table table-bordered ">
                        <thead class="thead-color">
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Case</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="limited-rows">
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
                                <td style="text-align:center">
                                <a href="patient_profile.php?id=<?php echo $id; ?>" class="btn actionButt btn-sm">View</a>
                                </a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $id; ?>)" class="btn actionButt btn-sm">Delete</a>
                                </a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                         <!-- Pagination controls -->
                    <div class="text-center pagination-container">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled" id="previousPage">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <!-- Pagination numbers will be added dynamically using JavaScript -->
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item" id="nextPage">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                    </table>
                   
                </div>
            </div>

            
            <div class="col-lg-4 col-md-3 col-sm-3">
            <!-- Content for the right section -->
            <div class="container mt-4 d-flex justify-content-center align-items-center">
                <div id="addPatientSection">
                    <h5 class="mb-3 text-center">Add Patient</h5>
                    <form action="add_patient.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="patientName">Patient Name:</label>
                            <input type="text" class="form-control" id="patientName" name="patientName" placeholder="Enter patient name">
                        </div>

                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="text" class="form-control" id="age" name="age" placeholder="Enter age">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                        </div>

                        <div class="form-group">
                            <label for="profileImage">Profile Image:</label>
                            <input type="file" class="form-control-file" id="profileImage" name="profileImage">
                        </div>

                        <button type="submit" name="add" id="add" class="btn btn-primary">Add Patient</button>
                    </form>
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
                        <form id="addPatientForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="patientName">Patient Name:</label>
                                <input type="text" class="form-control" id="patientName" name="patientName" placeholder="Enter patient name">
                            </div>

                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="Enter age">
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                            </div>

                            <div class="form-group">
                                <label for="profileImage">Profile Image:</label>
                                <input type="file" class="form-control-file" id="profileImage" name="profileImage">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="addPatient()">Add Patient</button>
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
    <script>
        $(document).ready(function() {
    // Number of rows per page
    var rowsPerPage = 8;

    // Total number of rows
    var totalRows = $('.limited-rows tr').length;

    // Total number of pages
    var totalPages = Math.ceil(totalRows / rowsPerPage);

    // Hide all rows initially except the first page
    $('.limited-rows tr').hide();
    $('.limited-rows tr:lt(' + rowsPerPage + ')').show();

    // Pagination functionality
    var currentPage = 1;
    $('#nextPage').click(function() {
        if (currentPage < totalPages) {
            $('.limited-rows tr').hide();
            var startIndex = currentPage * rowsPerPage;
            var endIndex = startIndex + rowsPerPage;
            $('.limited-rows tr').slice(startIndex, endIndex).show();
            currentPage++;
            updatePaginationState();
        }
    });

    $('#previousPage').click(function() {
        if (currentPage > 1) {
            currentPage--;
            $('.limited-rows tr').hide();
            var startIndex = (currentPage - 1) * rowsPerPage;
            var endIndex = startIndex + rowsPerPage;
            $('.limited-rows tr').slice(startIndex, endIndex).show();
            updatePaginationState();
        }
    });

    // Function to update pagination state (enable/disable buttons)
    function updatePaginationState() {
        if (totalPages <= 1) {
            $('.pagination').hide();
        } else {
            $('.pagination').show();
        }
        if (currentPage == 1) {
            $('#previousPage').addClass('disabled');
        } else {
            $('#previousPage').removeClass('disabled');
        }
        if (currentPage == totalPages) {
            $('#nextPage').addClass('disabled');
        } else {
            $('#nextPage').removeClass('disabled');
        }
    }
    
    // Update pagination state initially
    updatePaginationState();
});

    function confirmDelete(patientId) { //pang delete
        if (confirm("Are you sure you want to delete this patient?")) {
            window.location.href = 'delete_patient.php?id=' + patientId;
        }
    }
    function validateForm() {
        var patientName = document.getElementById("patientName").value.trim();
        var age = document.getElementById("age").value.trim();
        var address = document.getElementById("address").value.trim();

        if (patientName === "" || age === "" || address === "") {
            alert("Please ensure all fields are filled out correctly before proceeding.");
            return false;
        }

        // Validate age is a number
        if (isNaN(age)) {
            alert("Please enter a valid age in numbers.");
            return false;
        }

        // Validate age is within a certain range (e.g., 1-150)
        if (parseInt(age) < 1 || parseInt(age) > 150) {
            alert("Age should be between 1 and 150.");
            return false;
        }

        // Validate address length
        if (address.length < 5) {
            alert("Please provide a more detailed address.");
            return false;
        }

        // Validate patient name using a regular expression
        var nameRegex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
        if (!nameRegex.test(patientName)) {
            alert("Please enter a valid patient name.");
            return false;
        }

        // Additional validation logic can be added here

        return true; // Submit the form if validation passes
    }

    </script>
    <script>
    function validateForm() {
        // Retrieve form inputs
        const patientName = document.getElementById('patientName').value;
        const age = document.getElementById('age').value;
        const address = document.getElementById('address').value;
        const gender = document.getElementById('gender').value;
        const profileImage = document.getElementById('profileImage').value;

        // Perform validation
        if (patientName.trim() === '') {
            alert('Please enter patient name.');
            return false;
        }

        if (age.trim() === '') {
            alert('Please enter patient age.');
            return false;
        }

        if (address.trim() === '') {
            alert('Please enter patient address.');
            return false;
        }

        // Additional validation logic for gender and profile image
        // Ensure at least one option is selected for gender
        if (gender === '') {
            alert('Please select patient gender.');
            return false;
        }

        // Validate profile image upload (optional, can be further enhanced)
        if (profileImage.trim() === '') {
            alert('Please select a profile image.');
            return false;
        }

        return true; // Form is valid, proceed with submission
    }
</script>

    

</body>
</html>
