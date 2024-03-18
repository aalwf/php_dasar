<?php
session_start();
include "../functions.php";

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  $result = mysqli_query($db, "SELECT username FROM users WHERE id = $id");
  $row = mysqli_fetch_row($result);

  if ($key === hash('sha256', $row['username'])) {
    $_SESSION["login"] = true;
  }
}

if (isset($_SESSION['login'])) {
  header("Location: signin.php");
  exit;
}

if (isset($_POST['signin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row['id'];
      $_SESSION["username"] = $row['username'];
      $_SESSION["bio"] = $row['bio'];
      $_SESSION["pic"] = $row['picture'];

      if (isset($_POST['remember'])) {
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }
      header("Location: ../../index.php");
      exit;
    }
  } else {
    echo "<script>alert('Upss. Something went wrong.')</script>";
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
  <meta name="Author" content="Spruko Technologies Private Limited">
  <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

  <!-- Title -->
  <title> PHP Dasar -- Sign In </title>

  <!--- Favicon --->
  <link rel="icon" href="/assets/img/brand/favicon.png" type="image/x-icon" />

  <!-- Bootstrap css -->
  <link href="/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style" />

  <!--- Icons css --->
  <link href="/assets/css/icons.css" rel="stylesheet">

  <!--- Style css --->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/plugins.css" rel="stylesheet">

  <!--- Animations css --->
  <link href="/assets/css/animate.css" rel="stylesheet">

</head>

<body class="main-body  login-img">

  <!-- Loader -->
  <div id="global-loader">
    <img src="/assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
  </div>
  <!-- /Loader -->

  <div class="container page">
    <div class="row my-auto page page-h">
      <div class="col-6 mx-auto bg-white rounded p-4 mt-5 sign-up-body">
        <div class="main-signin-header">
          <h2>Welcome back!</h2>
          <h4>Please sign in with Azira</h4>
        </div>

        <form action="" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="username">Username</label>
            <input type="text" id="username" class="form-control" name="username" placeholder="Input your Username" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-2">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="Input your Password" />
          </div>

          <!-- Checkbox input -->
          <div class="form-outline mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember">
              <label class="form-check-label" for="remember">
                Remember
              </label>
            </div>

          </div>

          <!-- Submit button -->
          <button type="submit" name="signin" class="btn btn-primary btn-block mb-4">Sign In</button>

          <!-- Register buttons -->
          <div class="main-signin-footer mt-3 mg-t-5">
            <p><a href="">Forgot password?</a></p>
            <p>Don't have an account? <a href="signup.php">Create an Account</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <!--- JQuery min js --->

  <!--- Bootstrap Bundle js --->
  <script src="/assets/plugins/bootstrap/popper.min.js"></script>
  <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

  <!--- Ionicons js --->
  <script src="/assets/plugins/ionicons/ionicons.js"></script>

  <!--- Moment js --->
  <script src="/assets/plugins/moment/moment.js"></script>

  <!--- Eva-icons js --->
  <script src="/assets/js/eva-icons.min.js"></script>

  <!--themecolor js-->
  <script src="/assets/js/themecolor.js"></script>

  <!--- Custom js --->
  <script src="/assets/js/custom.js"></script>

</body>

</html>