<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UoN | Marks</title>

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
          <li class="nav-item active">
            <a class="nav-link" href="#">Marks</a>
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
            <li class="nav-item">
              <a class="nav-link" href="account.php">Account</a>
            </li>
          </ul>
        </form>
        <a href="login.php" onclick="return confirm('Are you sure you want to log out?');"><button class="btn btn-outline-warning"><span>Log out</span></button></a>
      </div>
    </nav>

    <main role="main">
      <div class="jumbotron">
        <div class="container">
          <h1 style="color:#036!important" class="display-3">My Marks</h1>
          <?php
            header("Content-Type: text/html; charset=utf8");
            include('connect.php');
            session_start();
            $name=$_SESSION['user'];
            echo"Student ID: ";
            $sql1 = "select StudentId from Student where username = '$name'"; 
            $result = mysqli_query($conn, $sql1);
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row['StudentId'];
                    echo "<br>";
                }
            echo"Surname: ";
            $sql2 = "select Surname from Student where username = '$name'"; 
            $result = mysqli_query($conn, $sql2);
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row['Surname'];
                    echo "<br>";
            }
            echo"Given Name: ";
            $sql3 = "select Givenname from Student where username = '$name'"; 
            $result = mysqli_query($conn, $sql3);
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row['Givenname'];
                    echo "<br>";
                }
            echo"Department: ";
            $sql4 = "select Department from Student where username = '$name'"; 
            $result = mysqli_query($conn, $sql4);
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row['Department'];
                }
          ?>
        </div>
      </div>

      <div class="container">
        <h5 style="color:#036!important">2018/2019</h5>
        <?php
            $sql5 = "select Module.ModuleId, Student.StudentId, username, ModuleName, credit, Semester, Mark, Code from Module, Student, Enrollment where Module.ModuleId = Enrollment.Moduleid and Student.StudentId = Enrollment.Studentid and username = '$name'";
            $result = $conn->query($sql5);
            echo'<table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Code</th>
                <th scope="col">Module</th>
                <th scope="col">Credits</th>
                <th scope="col">Semester</th>
                <th scope="col">Mark</th>
            </tr>
            </thead>';
            while($row = $result->fetch_assoc()){
            echo'
                <tbody>
                    <tr>
                    <th scope="row">'.$row['ModuleId'].'</th>
                    <td>'.$row['Code'].'</td>
                    <td>'.$row['ModuleName'].'</td>
                    <td>'.$row['credit'].'</td>
                    <td>'.$row['Semester'].'</td>
                    <td>'.$row['Mark'].'</td>
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