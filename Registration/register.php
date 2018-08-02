<? php include('server.php') ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="form container">
      <form method="post" action="register.php">
        <? php include('errors.php'); ?>

        <div class="input-group form-group">
          <label>Username</label>
          <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group form-group">
          <label>Email</label>
          <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group form-group">
          <label>Password</label>
          <input class="form-control" type="password" name="password1">
        </div>
        <div class="input-group form-group">
          <label>Confirm Password</label>
          <input class="form-control" type="password" name="password2">
        <div class="input-group form-group">
          <button type="submit" class="btn" name="regUser">Register</button>
        </div>
        <p>
          Already a member? <a href="login.php">Sign In</a>
      </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>