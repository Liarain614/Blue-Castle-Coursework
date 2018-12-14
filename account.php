<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UoN | Account Information</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <link href="module.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Blue Castle</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="module.php">Modules<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Award</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mark.php">Marks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Progression</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Surveys</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Account</a>
            </li>
          </ul>
        </form>
        <a href="login.php" onclick="return confirm('Are you sure you want to log out?');"><button class="btn btn-outline-warning"><span>Log out</span></button></a>
      </div>
    </nav>
    <main role="main">
      <div class="jumbotron">
        <div class="container">
          <h1 style="color:#036!important" class="display-3">University of Nottingham</h1>
          <h1 class="display-5">Student   Account   Information</h1>
        </div>
      </div>

      <div class="container">
        <h5 style="color:#036!important">2018/2019</h5>
        <?php
          include('connect.php');
          session_start();
          $username=$_SESSION['user'];
          $sql = "select StudentId, username, Givenname, Surname, Gender, Degree, Email from Student where username = '$username'";
          $result = $conn->query($sql);
          echo'<table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">username</th>
              <th scope="col">Student ID</th>
              <th scope="col">Surname</th>
              <th scope="col">Given Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Degree</th>
              <th scope="col">Email</th>
            </tr>
          </thead>';
          while($row = $result->fetch_assoc()){
          echo'
                <tbody>
                  <tr>
                    <th scope="row">'.$row['username'].'</th>
                    <td>'.$row['StudentId'].'</td>
                    <td>'.$row['Surname'].'</td>
                    <td>'.$row['Givenname'].'</td>
                    <td>'.$row['Gender'].'</td>
                    <td>'.$row['Degree'].'</td>
                    <td>'.$row['Email'].'</td>
                  </tr>
                </tbody>';}
         mysqli_close($conn);
         echo'</table>';
         ?>
         
      </div>
    </main>
    <footer class="text-muted text-center w-100 mt-5">
            <hr class = "mob-4">
            <small>Our terms and other documents below changed in May 2012. Please familiarise yourself with the new ones.</small>
            <hr class = "mob-4">
            <div class="row text-center mx-5 mt-1">
                <div class="col"><small><a style="color:grey" href=" " target="_blank">Copyright</a ></small></div>
                <div class="col"><small><a style="color:grey" href="http://www.nottingham.ac.uk/utilities/website-terms-of-use.aspx" target="_blank">Terms and Conditions</a ></small></div>
                <div class="col"><small><a style="color:grey" href="http://www.nottingham.ac.uk/utilities/privacy.aspx" target="_blank">Privacy and Cookies</a ></small></div>
                <div class="col"><small><a style="color:grey" href="http://www.nottingham.ac.uk/utilities/posting-rules.aspx" target="_blank">Posting Rules</a ></small></div>
                <div class="col"><small><a style="color:grey" href="http://www.nottingham.ac.uk/utilities/accessibility/accessibility.aspx" target="_blank">Accessibility</a ></small></div>
                <div class="col"><small><a style="color:grey" href="http://www.nottingham.ac.uk/utilities/foi.aspx" target="_blank">Freedom of Information</a ></small></div>
            </div>
        </footer>
  </body>
</html>