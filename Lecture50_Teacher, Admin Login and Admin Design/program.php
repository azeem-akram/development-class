<?php
include "database.php"; // This should contain your database connection code

// Fetch the program ID from the URL
$id = $_GET['id'];

// Prepare the SQL query to fetch the program details
$sql = "SELECT * FROM programs WHERE id = $id";
$result = $conn->query($sql);

// Check if the program exists
if ($result->num_rows > 0) {
    // Fetch the program details
    $program = $result->fetch_assoc();
} else {
    echo "Program not found.";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css" />

    <title>Top Tech School - Program Details</title>
</head>
<body>
    <?php include "includes/header.php"; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="/assets/images/<?php echo $program['image']; ?>" class="img-fluid" alt="<?php echo $program['name']; ?>">
            </div>
            <div class="col-md-6">
                <h1 class="mb-4"><?php echo $program['name']; ?></h1>
                <p><?php echo nl2br($program['description']); ?></p>
                <p><strong>Course Starts:</strong> <?php echo date('F d, Y', strtotime($program['course_starts'])); ?></p>
                <p><strong>Duration:</strong> <?php echo $program['duration']; ?></p>
                <p><strong>Timing:</strong> <?php echo $program['timing']; ?></p>

                <?php 
                if($program['curriculum_file'] != ""){
                    ?>
                    <a target="_blank" href="/uploads/<?php echo $program['curriculum_file']; ?>" class="btn btn-primary mt-3">Download Curriculum</a>
                    <?php
                }
                else{
                    ?>
                     <a class="btn btn-primary mt-3">Download Curriculum</a>
                    <?php
                }
                ?>

                
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
