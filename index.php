<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <title> Simple PHP Document</title>

  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" type="text/css" href="popupMenu.css">
  <script src="loginbutton.js"></script>
</head>

<body>

  <?php if(!empty($_SESSION["username"])) {
    echo $_SESSION["username"]."<br>";
  } else {
    echo "<p>username not set.<br></p>";
  }
  ?>

  <div>
    <?php include 'popupMenu.php';?>
  </div>

  <div>
      <?php include 'newUserForm.php';?>
  </div>

  <div>
    <?php include 'navBar.php';?>
  </div>
</body>
</html>
