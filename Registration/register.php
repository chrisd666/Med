<? php include('server.php') ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/registration.css">

    <title>Hello, world!</title>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <div class="container">
            <a href="index.html" class="navbar-brand">Website</a>
        </div>
    </nav>

    <div id="registration">
        <div class="form container">
            <form method="post" action="register.php" class="bg-light text-dark">
                <? php include('errors.php'); ?>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" class="form-control" type="text"
                                name="username" value="<?php echo $username; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email"
                                value="<?php echo $email; ?>">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password1">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="form-control" type="password" name="password2">
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary" name="regUser">Register</button>
                <p class="mt-3">
                    Already a member? <a href="login.php">Sign In</a>
                </p>
            </form>
        </div>
    </div>


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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous">
    </script>
</body>

</html>