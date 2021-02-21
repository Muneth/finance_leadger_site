<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <title>Signup Form</title>

</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Create Account</h2>
    </div>
    <form action="includes/signup.inc.php" method="post" id="form" class="form">
      <div class="form-control">
        <label for="name">Full Name</label>
        <input type="text" name="name" placeholder="Enter-full name..." id="name" />
      </div>
      <div class="form-control">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter email..." id="email" />
      </div>
      <div class="form-control">
        <label for="username">Username</label>
        <input type="text" name="uid" placeholder="Enter-username..." id="username" />
      </div>
      <div class="form-control">
        <label for="username">Password</label>
        <input type="password" name="pwd" placeholder="Enter password..." id="password"/>
      </div>
      <div class="form-control">
        <label for="username">Confirm Password</label>
        <input type="password" name="pwdrepeat" placeholder="Re-enter Password..." id="password2"/>
      </div>

      <!-- ERRORS DISPLAY -->

      <?php 
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo '<p class="error"> Fill in all fields!</p>';
        }
        else if ($_GET["error"] == "invaliduid") {
          echo '<p class="error"> Choose a proper username!</p>';
        }
        else if ($_GET["error"] == "invalidemail") {
          echo '<p class="error"> Choose a proper email!</p>';
        }
        else if ($_GET["error"] == "passwordsdonotmatch") {
          echo '<p class="error"> Passwords do not match!</p>';
        }
        else if ($_GET["error"] == "stmtfailed") {
          echo '<p class="error"> Something went wrong, try again!</p>';
        }
        else if ($_GET["error"] == "usernametaken") {
          echo '<p class="error"> Username already taken!</p>';
        }
        else if ($_GET["error"] == "none") {
          echo '<p class="error"> You have signed up!</p>';
        }
      }
      ?>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
  
</body>
</html>