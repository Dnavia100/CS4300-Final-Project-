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

    <!--$logged =  "<button class='post_button' onclick='window.location.href=\"#\"'>Leave reply</button>";-->

   <div class="content">
        <?php 
        require_once 'connect.php';
        $cid=$_GET["cid"];
        $sql="SELECT * FROM posts WHERE id='".$cid."' LIMIT 1";
        $res=$conn->query($sql);
        if ($res->num_rows == 1) {
            echo '<table width="100%">';
        }else {
            echo '<p>This topic does not exist</p>';
        }

        if(isset($_SESSION["username"])) {
            echo "<tr><td colspan='2'><button class='post_button' onclick='window.location.href=\"create_reply.php?cid=".$cid."\"'>Leave reply</button></td></tr>";
            
        } else {
            echo '<tr><td colspan="2"><p>Please log in to post a reply.</p></td></tr>';
        }

        while($row = $res->fetch_assoc()) {
            echo '<tr><td valign="top" style="border: 1 px solid #000000;">
            <div style="min-height: 125px;">'.$row["post_title"]."<br> by ".$row["post_creator"].' - '.$row["post_date"].'<hr>'.$row["post_content"].'</div></td></tr>
            <tr><td colspan="2"><hr></td></tr>';
            $sql2 = "SELECT * FROM replies WHERE Parent_ID='".$cid."' ORDER BY Reply_Date ASC";
            $res2 = $conn->query($sql2) or die($conn->error);
            while($row2 = $res2->fetch_assoc()) {
                echo '<tr><td valign="top" style="border: 1 px solid #000000;">
                <div style="min-height: 125px;">'.$row2["Reply_Creator"].' - '.$row2["Reply_Date"].'<hr>'.$row2["Reply_Content"].'</div></td></tr>
                <tr><td colspan="2"><hr></td></tr>';
            }
        }
 

        

        ?>
    </div>

</body>
</html>