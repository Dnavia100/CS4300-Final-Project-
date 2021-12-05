<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile</title>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" type="text/css" href="popupMenu.css">
    <script src="loginbutton.js"></script>

</head>
<body>
    <div>
        <?php include 'popupMenu.php';?>
    </div>

    <div>
        <?php include 'newUserForm.php';?>
    </div>

    <div>
        <?php include 'navBar.php';?>
    </div>
    
    <?php if(!empty($_SESSION["username"])) {
    echo $_SESSION["username"]."<br>";
  } else {
    echo "<p>Log in to see profile.<br></p>";
  }
  ?>

    

</body>
</html>