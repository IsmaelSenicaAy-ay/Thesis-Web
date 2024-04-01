<?php
include 'session_check.php';
$query = $_GET['query'];

// Perform a database search based on the query
$query = $mysqli->real_escape_string($query);
$sql = "SELECT * FROM patients_data WHERE Name LIKE '%$query%' OR Age LIKE '%$query%' OR pCase LIKE '%$query%'";
$result = $mysqli->query($sql) or die($mysqli->error());

// Display search results
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
