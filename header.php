<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Welcome To Edgeleader</title>
</head>

<body id="home">
  <header class="hero">
    <div id="navbar" class="navbar top">
      <h1 class="logo">
        <span class="text-primary"><i class="fas fa-book-open"></i> Edge</span>Leadger
      </h1>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#cases">Cases</a></li>
          <li><a href="#blog">Blog</a></li>

          <?php

          if (isset($_SESSION["useruid"])) {
            echo "<li><a href='profile.php'>Profile Page</a></li>";
            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
          }
          else {
            echo "<li><a href='signup.php'>Sign up</a></li>";
            echo "<li><a href='login.php'>Log in</a></li>";
          }
          ?>

        </ul>
      </nav>
    </div>
