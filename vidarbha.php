<!doctype html>
<html lang="en">

<head>
  <title>Medigyaan | Colleges</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand"><h3>Medigyaan</h3></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="resources.php" class="nav-link">Resources</a>
          </li>
          <li class="nav-item active">
            <a href="colleges.php" class="nav-link">Colleges</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="collegeTab">
    <div id="widthPos">
      <nav>
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="colleges.php">ROM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="vidarbha.php">Vidarbha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="marathwada.php">Marathwada</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="tabHead">
      <h1 class="display-4">Region - Vidarbha</h1>
    </div>
    <div>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>#</th>
            <th>College</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1.</th>
            <td>
              <a href="collegePages/Vidarbha/Government_Medical_College,Nagpur.php">Government
                Medical College, Nagpur</a>
            </td>
          </tr>
          <tr>
            <th>2.</th>
            <td>
              <a href="collegePages/Vidarbha/Indira_Gandhi_Medical_College.php">Indira
                Gandhi Medical College</a>
            </td>
          </tr>
          <th>3.</th>
          <td>
            <a href="collegePages/Vidarbha/Shri.Vasantrao_Naik Govt.Medical_College.php">Shri.
              Vasantrao Naik Govt. Medical College</a>
          </td>
          </tr>
          <th>4.</th>
          <td>
            <a href="collegePages/Vidarbha/Government_Medical_College_Akola.php">Government
              Medical College, Akola</a>
          </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <?php include 'footer.php' ?>