<?php
require "../functions.php";
if (isset($_POST["register"])) {
  if (reg($_POST) > 0) {
    echo "
            <script>
                alert('Data berhasil di tambahkan');
            </script>
        ";
    header("Location: signin.php");
    exit;
  } else {
    echo "
            <script>
                alert('Data gagal di tambahkan');
            </script>
        ";
  }
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
  <title> PHP Dasar -- Sign Up </title>

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
          <h4>Please Register with Azira</h4>
        </div>

        <form action="" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="username">Username</label>
            <input type="text" id="username" class="form-control" name="username" placeholder="Input your Username" />
          </div>

          <!-- Password input -->
          <div class="row mb-4">
            <div class="col-6">
              <div class="form-outline">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="Input your Password" />
              </div>
            </div>
            <div class="col-6">
              <div class="form-outline">
                <label class="form-label" for="password2">Confirm Password</label>
                <input type="password" id="password2" class="form-control" name="password2" placeholder="Confirm your password" />
              </div>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" name="register" class="btn btn-primary btn-block mb-4">Create Account</button>

          <!-- Register buttons -->
          <div class="main-signup-footer mg-t-10 text-center">
            <p>Already have an account? <a href="signin.php">Sign In</a></p>
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