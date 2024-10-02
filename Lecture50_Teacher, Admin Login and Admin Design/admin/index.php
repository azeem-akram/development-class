

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="/assets/public/favicon.png" type="image/x-icon">
        <title>Login - Top Tech School Admin</title>
        <link href="/admin/assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    
                                    <div class="card-header">
                                    <div class="text-center">
                                        <a class="account-brand" href="index.php">
                                            <img src="/assets/public/new_logo_black.png" alt="" style=" width: 120px; ">
                                        </a>
                                    </div>
                                        <h3 class="text-center font-weight-light my-4">Admin</h3>
                                    </div>
                                    
                                    <form method="POST" action="/admin/handler.php">
                                        <div class="card-body">
                                        
                                                <div class="form-floating mb-3">
                                                    <input name="email" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" required/>
                                                    <label for="inputEmail">Email address</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" required/>
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input name="remember" class="form-check-input" id="inputRememberPassword" type="checkbox" style=" display: block; "/>
                                                    <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                                </div>
                                                
                                        
                                        </div>

                                        <div class="card-footer text-center py-3">
                                            <button type="submit" class="btn btn-primary" name="login-btn" href="index.html">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="align-items-center justify-content-between small">
                            <div class="text-muted" style=" text-align: center; "> © Copyright 2024 - Learners. All Right Reserved.</div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
