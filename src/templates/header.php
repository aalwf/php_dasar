<?php
include_once "C:\laragon\www\arghh\src\\functions.php";

session_start();
if (!isset($_SESSION['login'])) {
  header("Location: /src/auth/signin.php");
  exit;
}
$id = $_SESSION['id'];
$user = query("SELECT * FROM users WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
  <meta name="Author" content="Spruko Technologies Private Limited">
  <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admintemplate,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admindashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrapform template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboardtemplate,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

  <!-- Title -->
  <title> PHP Dasar </title>

  <!--- Favicon --->
  <link rel="icon" href="/assets/img/brand/favicon.png" type="image/x-icon" />

  <!-- Bootstrap css -->
  <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="style" />

  <!--- Style css --->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="assets/css/plugins.css" rel="stylesheet">

  <!--- Icons css --->
  <link href="/assets/css/icons.css" rel="stylesheet">

  <!--- Animations css --->
  <link href="/assets/css/animate.css" rel="stylesheet">
</head>

<body class="main-body app sidebar-mini ltr">
  <!-- page -->
  <div class="page custom-index">

    <?php require_once "navbar.php" ?>
    <?php require_once "sidebar.php" ?>

    <!-- main-content -->
    <div class="main-content app-content">

      <!-- container -->
      <div class="main-container container-fluid">

        <!-- main-content-body -->
        <div class="main-content-body mt-3">