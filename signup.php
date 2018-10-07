<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
  </head>
  <body id="home">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand">Website</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#resources" class="nav-link">Resources</a>
            </li>
            <li class="nav-item">
              <a href="colleges.html" class="nav-link">Colleges</a>
            </li>
            <div class="dropdown">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                Log in
              </a>

              <div class="dropdown-menu dropdown-menu-right">
                <form class="px-4 py-3">
                  <div class="form-group">
                    <label for="email">
                      Email address
                    </label>
                    <input type="email" class="form-control" id="email" placeholder="john@mail.com">
                  </div>
                  <div class="form-group">
                    <label for="password">
                      Password
                    </label>
                    <input type="email" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="form-check pl-4">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label pl-0" for="dropdownCheck">
                      Remember Me
                    </label>
                  </div>
                </form>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  New around here? Sign up
                </a>
                <a class="dropdown-item" href="#">
                  Forgot password?
                </a>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <section id="signup">
        <div class="container">
          <div class="card">
            <div class="card-head">
              Register
            </div>
            <div class="card-body">
              <form action="">
                <input class="form-control" type="text" name="fname" placeholder="First Name...">
                <input class="form-control" type="text" name="lname" placeholder="Last Name...">
                <input class="form-control" type="email" name="email" placeholder="Email...">
                <input class="form-control" type="password" name="pwd_1" placeholder="Enter Password...">
                <input class="form-control" type="password" name="pwd_2" placeholder="Renter Password...">
            </form>
            </div>
          </div>
            
        </div>
    </section>
    

    <footer>
      <div class="container pt-4 pb-4">
        <div id="footPos" class="row">
          <div id="copy" class="col-sm-6 text-center">
            <p>Copyright &copy 2017 - Website</p>
            <a href="#">Privacy</a>
          </div>
          <div id="contact" class="col-sm-6 text-center">
            <p>Contact</p>
            <a href="#"><img src="icons/facebook.svg"></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>