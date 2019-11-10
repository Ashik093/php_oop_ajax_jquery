<?php
    $filepath=realpath(dirname(__FILE__));
    include_once($filepath.'/../lib/Database.php');
    include_once($filepath.'/../classes/Project.php');

    $db= new Database();
    $pro=new Project();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP OOP AJAX</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <style>
      body {
        background-color: lightblue;
      }
      </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">PHP AJAX JQUERY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="userNameAvailability.php">User Name Availability</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="autoComplete.php">AutoComplete Text Box</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="showPassword.php">Show Password</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="autoRefresh.php">Auto Refresh</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php">Live Search</span></a>
        </li>
      </ul>

    </div>
  </nav>
