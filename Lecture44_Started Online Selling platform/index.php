<?php
include 'database.php';

$sqlCategories = "Select * from categories";
$results = $conn->query($sqlCategories);


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Mobilo Mart</title>
</head>

<body>

    <header>
        <div class="text-center">
            <img src="/assets/images/logo.png" width="100px" />
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a class="navbar-brand" href="/">Mobilo Mart</a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>

                            <?php
                                if($results){
                                    if($results->num_rows > 0){
                                        while($row = $results->fetch_assoc()){
                                            ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><?php echo $row['name'] ?></a>
                                                </li>
                                            <?php
                                        }
                                    }
                                }
                            ?>


                        
                        
                        
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

    </header>


    <section>
        <div class="container mt-5">
            <div class="row">
                
                <?php 
                    for($index = 0; $index < 100; $index++){
                        ?>
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img src="/assets/images/samsung_s24.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Samsung S24 ultra</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                
                ?>
                



            </div>
        </div>
    </section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>