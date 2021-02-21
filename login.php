<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <title>Sign in</title>

</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Sign In</h2>
    </div>
    <form action="includes/login.inc.php" method="post" id="form" class="form">
      <div class="form-control">
        <label for="name">Login ID</label>
        <input type="text" name="uid" placeholder="Email\userID..." id="name" />
      </div>
      <div class="form-control">
        <label for="username">Password</label>
        <input type="password" name="pwd" placeholder="Enter password..." id="password"/>
      </div>

      <!-- Error messages -->

      <?php 
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo '<p class="error"> Fill in all fields!</p>';
        }
        else if ($_GET["error"] == "wronglogin") {
          echo '<p class="error"> Incorrect login details!</p>';
        }
      }
      ?>
      <button type="submit" name="submit">Log In</button>
    </form>
  </div>
  
</body>
</html>