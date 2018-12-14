<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UoN | Blue Castle</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
  </head>

  <body>

    <div style="background-color:#343a40!important" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h4 style="color:white!important" class="my-0 mr-md-auto font-weight-normal">Blue Castle</h4>
      <nav class="my-2 my-md-0 mr-md-3">
        <!-- <a class="p-2 text-dark" href="#">Modules</a>
        <a class="p-2 text-dark" href="#">Award</a>
        <a class="p-2 text-dark" href="#">Marks</a>
        <a class="p-2 text-dark" href="#">Progression</a>
        <a class="p-2 text-dark" href="#">Surveys</a>   -->
        <a class="p-2 text-white" href="account.php">Account</a>
      </nav>
      <a href="login.php" onclick="return confirm('Are you sure you want to log out?');"><button class="btn btn-outline-warning"><span>Log out</span></button></a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">
          <?php
          header("Content-Type: text/html; charset=utf8");
          include('connect.php');
          session_start();
          echo "Welcome, ";
          $name=$_SESSION['user'];
          $sql = "select Givenname from Student where username = '$name'"; 
          
          $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)) {
                  echo $row["Givenname"];
              }
          ?>
      </h1>
      <p class="lead">You can check your individual information by clicking the following buttoms.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header" style="background-color:rgb(175,196,228)">
            <h5 class="my-0 font-weight-normal"><br></h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <img src=module.svg>
            </ul>
            <a href="module.php" class="btn btn-block btn-outline-success">Modules</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header" style="background-color:rgb(255,230,153)">
            <h5 class="my-0 font-weight-normal"><br></h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <img src = award.svg>
            </ul>
            <a href="#" class="btn btn-block btn-outline-success">Award</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header" style="background-color:rgb(197,224,180)">
            <h5 class="my-0 font-weight-normal"><br></h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
            <img src = mark.svg>
            </ul>
            <a href="mark.php" class="btn btn-block btn-outline-success">Marks</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header" style="background-color:rgb(248,203,173)">
            <h5 class="my-0 font-weight-normal"> <br></h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <img src = progression.svg>
            </ul>
            <a href="#" class="btn btn-block btn-outline-success">Progression</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header" style="background-color:rgb(173,185,202)">
            <h5 class="my-0 font-weight-normal"><br></h5>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <img src = suivey.svg>
            </ul>
            <a href="#" class="btn btn-block btn-outline-success">Surveys</a>
          </div>
        </div>
      </div>

        <footer class="text-muted text-center w-100 mt-5">
            <hr class = "mob-4">
            <small>Our terms and other documents below changed in May 2012. Please familiarise yourself with the new ones.</small>
            <hr class = "mob-4">
            <div class="row text-center mx-5 mt-1">
                <div class="col"><small><a href=" " target="_blank">Copyright</a ></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/website-terms-of-use.aspx" target="_blank">Terms and Conditions</a ></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/privacy.aspx" target="_blank">Privacy and Cookies</a ></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/posting-rules.aspx" target="_blank">Posting Rules</a ></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/accessibility/accessibility.aspx" target="_blank">Accessibility</a ></small></div>
                <div class="col"><small><a href="http://www.nottingham.ac.uk/utilities/foi.aspx" target="_blank">Freedom of Information</a ></small></div>
            </div>
        </footer>
  </body>
</html>