<?php
/**
 * Created by PhpStorm.
 * User: Ender
 * Date: 5/9/2018
 * Time: 1:47 PM
 */
?>
<!doctype html>
<html>
  <head>

        <title>CSRF Protection via Double Submit Cookies Patterns</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->

        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>


    </head>

    <body>
    <style>

      body {

        background-image: url("one.jpg");

      }

    </style>

      <!-- nav bar start -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">CSRF Protection via Double Submit Cookies Patterns </a>
          </div>
          <ul class="nav navbar-nav">

            <?php
              if(!isset($_COOKIE['session_cookie'])) {
                echo "<li><a href='profile.php'></t>Profile</t></a></li>";
              }
            ?>

          </ul>
          <ul class="nav navbar-nav navbar-right">

          <?php
            if(!isset($_COOKIE['session_cookie'])) {
              echo "<li><a href='login.php'> Log In </a></li>";
            }
          ?>

          <?php
            if(!isset($_COOKIE['session_cookie'])) {
              echo "<li><a href='logout.php'> Log Out </a></li>";
            }
          ?>

          </ul>
        </div>
      </nav>
      <!-- navbar end -->

    </body>
  <html>
