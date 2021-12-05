<?php session_start(); ?>

<?php include 'connect.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Forum</title>

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

   <div id="content">
        <?php 
        require_once 'connect.php';
        $cid=$_GET["cid"];

        if(isset($_SESSION["uname"])) {
            $logged = "| <a href='#'>Click here to leave a reply</a>";
        } else {
            $logged = "| Please log in to post a reply.";
        }

        $sql = "SELECT id FROM posts"






        ?>
    </div>

</body>
</html>