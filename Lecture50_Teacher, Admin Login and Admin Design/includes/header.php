<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/"><img width="120px" src="/assets/images/logo.png" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#programs">Programs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#emailUs">Email Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://www.facebook.com/TopTechSchool2023/">Facebook</a>
                        </li>
                        
                        
                    </ul>
                    <div class="d-flex">
                        <button class="btn btn-login" data-bs-toggle="modal" data-bs-target="#loginModel">Student/Teacher Login</button>
                    </div>



                </div>
            </div>
        </nav>
    </header>





<!-- Modal -->
<div class="modal fade" id="loginModel" tabindex="-1" aria-labelledby="loginModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header border-none">
        <h5 class="modal-title" id="loginModelLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body text-center mb-5">
        <img src="/assets/images/new_logo_black.png" width="200px"/>
        <br><br>

        <form action="handler.php" method="POST">
            <div class="">
                <input name="email" type="email" placeholder="Email Address" class="form-control" required/>
                <br>
                <input name="password" type="password" placeholder="Password" class="form-control" required/>

                <br>
                <button class="btn btn-primary btn-block sign-up-btn my-btn" name="login-user" type="submit">Login</button>
            </div>
        </form>


      </div>
    </div>
  </div>
</div>

