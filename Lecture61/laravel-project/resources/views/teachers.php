<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">

    <title>Teachers</title>
</head>

<body>
    <h1>Teachers</h1>

    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Create New Teacher</a>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="/create-teacher">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create New Teacher</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Teachers Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div>
                            <label>Gender</label>

                            <input type="radio" name="gender" value="Male">
                            <label>Male</label>

                            <input type="radio" name="gender" value="Female">
                            <label>Female</label>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Subject</label>
                            <input type="text" class="form-control" name="subject">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <?php echo csrf_field() ?>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>

            </form>

        </div>

    </div>


    <div>
        <?php

        foreach ($teachers as $t) {
            ?>
            <div class="teacher-box">

                <?php
                if ($t['gender'] == "Male") {
                    ?>
                    <img src="/assets/images/male.png" width="100px" />
                    <?php
                } else {
                    ?>
                    <img src="/assets/images/female.png" width="100px" />
                    <?php
                }
                ?>
                <br><br>
                <h2><?php echo $t['name'] ?></h2>
                <br>
                <?php echo $t['description'] ?></p>

                <div>
                    <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModel_<?php echo $t['id'] ?>">Edit</a>

                    <div class="modal fade" id="editModel_<?php echo $t['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form method="POST" action="/create-teacher">

                                <div class="modal-content text-start">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Teacher</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Teachers Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $t['name'] ?>">
                                        </div>
                                        <div>
                                            <label>Gender</label>

                                            <input type="radio" name="gender" value="Male" id="gender_<?php echo $t['id'] ?>_Male">
                                            <label>Male</label>

                                            <input type="radio" name="gender" value="Female" id="gender_<?php echo $t['id'] ?>_Female">
                                            <label>Female</label>

                                            <script>
                                                document.getElementById("gender_<?php echo $t['id'] ?>_<?php echo $t['gender'] ?>").checked = true;
                                            </script>

                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Description</label>
                                            <textarea class="form-control" name="description"><?php echo $t['description'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Subject</label>
                                            <input type="text" class="form-control" name="subject" value="<?php echo $t['subject'] ?>">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <?php echo csrf_field() ?>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>



                    <a href="" class="btn btn-danger">Delete</a>
                </div>

            </div>
            <?php
        }

        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>