<?php session_start(); ?>

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

    <div class="content">
        <?php 
        require_once 'connect.php';

        if(isset($_SESSION["username"])) {
            $logged = "<button class='post_button' onclick='window.location.href=\"create_post.php\"'>Create Post</button>";
        } else {
            $logged = "| Please log in to post.";
        }

        echo $logged;


        $sql = "SELECT * FROM posts ORDER BY post_date DESC";
        $result = $conn->query($sql);
        $posts = "";

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $title = $row["post_title"];
                $creator = $row['post_creator'];
                $posts .= '<div><a href="view_post.php?cid='.$row["id"].'" class="post_links">'.$title.'</a>';
                $posts .= '<p class="post_info">Posted by '.$creator.' on '.$row["post_date"].'</p><hr></div>';
            }
            echo $posts;
        } else {
            echo "<p>There are no posts available yet.</p>";
        }
        ?>
    </div>

</body>
</html>