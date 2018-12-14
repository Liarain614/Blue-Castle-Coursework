<?php
    header("Content-Type:text/html;charset=utf8");
    include('connect.php');
    session_start();
    $_SESSION['user']=$_POST['Username'];
    $username=$_POST['Username'];
    $password=$_POST['Password'];

    if ($username&&$password) {
      $sql="select * from Student where username='$username' and Password='$password'";
      $result=$conn->query($sql);
      $rows=$result->num_rows;
      if ($rows) {
        header("refresh:0;url=index.php");
        exit;
      }
      else {
        $failed = TRUE;
      }
    }
    mysqli_close($conn)
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blue Castle | Log In</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <link href="login.css" rel="stylesheet">
  </head>
  <body>
    <div class="container text-center">
      <h2 style="color:#036; position: absolute; left: 50px; top:50px;">Blue Castle</h3>
      <form class="form-signin" action="login.php" method="POST">
        <img class="mb-4" src="logo1.jpg" alt="" width="160" height="160">
        <label for="Username" class="sr-only">Username</label>
        <input type="text" id="Username" name="Username" class="form-control" placeholder="Username" required autofocus>
        <label for="Password" class="sr-only">Password</label>
        <input type="password" id="Password" name="Password" class="form-control" placeholder="Password" required>
        <div class="invalid-feedback">
          The username or password is incorrect!
        </div>
        <label>
          <a herf="#">Forget your password?</a>
        </label>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019 | UoN</p>
      </form>
    </div>
  </body>
</html>