<?php
include "database.php";


$sql = "SELECT * FROM programs";
$result = $conn->query($sql);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/assets/css/style.css" />


    <title>TopTech School</title>
</head>

<body>

    <?php include "includes/header.php" ?>


    <div>

        <!-- Hero Section Start -->
        <div class="hero-section bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="hero-text">A Global Educational Center For <span class="text-yellow">Learning</span>
                        </h1>
                        <p>Dream It! Believe It & Achieve it !</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <img src="/assets/images/hero-4-img.png" class="hero-img" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section End -->


        <!-- Program Section Start -->
        <div class="programs-section">
            <div class="container">
                <h1 class="mb-5">Top Tech School Programs</h1>
                <div class="row">

                    <?php
                    // Check if there are any results
                    if ($result->num_rows > 0) {
                        // Loop through each row and display the program details
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col-md-3 mb-4"> <!-- 12/3 = 4 columns -->
                                <div class="program">
                                    <img height="190px" width="100%" src="/assets/images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" />
                                    <div class="p-3 text-center">
                                        <h3 style=" height: 65px; overflow: hidden; " class="mb-3"><?php echo $row['name']; ?></h3>
                                        
                                        <a href="program.php?id=<?php echo $row['id'] ?>" class="program-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "No programs found.";
                    }
                    ?>

                   

                </div>
            </div>
        </div>
        <!-- Program Section End  -->



        <!-- About Section Start -->
        <div class="about-section bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="about-img" src="https://toptechschooledu.com/assets/public/blog-1-7.jpg"
                            width="100%">
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white">Welcome to TopTech School</h1>
                        <p class="text-white" style=" text-align: justify; ">TopTech School is an online Learning Center
                            which provides trainings and education. <br>
                            Our online classes are offered globally at different time zone for different class. <br>
                            TopTech School programs cover the following: <br>
                            • Software Development Program <br>
                            • Software Testing Program<br>
                            • Graphic Designing Program<br>
                            • Languages Program<br>
                            • Science and Math Program<br>
                            • Islamic Education Program<br>
                            <br>
                        </p>
                        <p class="text-white" style=" text-align: justify; ">TopTech school was established in Seattle
                            Washington, U.S. in 2022 and has been proudly serving students from across the globe.<br>
                            TopTech school offers classes online using cutting-edge technologies in which the students
                            can join their classes with peace of mind, interact with their instructors and classmates
                            directly face-to-face in live classes.<br>
                            <br>
                            At TopTech School, our professional trainers and instructors lead you the way which make the
                            class trainings and instructions interesting and more practical day by day.<br>
                            <br>
                            Our Step-by-step trainings and classes give the students the feeling of accomplishment and
                            professionalism by the time they complete each class.<br>
                            <br>
                            Training and class instructions at TopTech School start from very basic introduction of each
                            class to intermediate and then to advanced level. <br>
                            By the end of each program students complete, they will have a feeling of confidence and
                            accomplishment in that specific program, and they will be prepared in cracking any job
                            interview and/or passing exam in that field. <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>








    </div>

    <footer>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>