<?php 
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if(isset($_POST['reply_submit'])) {
    if($_POST['reply_content'] == "") {
        echo "You did not type a reply.";
        exit();
    } else {
        require_once 'connect.php';
        $cid=$_POST['cid'];
        $content = $_POST['reply_content'];
        $creator = $_SESSION['username'];
        $sql = "INSERT INTO replies (Parent_ID, Reply_Date, Reply_Content, Reply_Creator) VALUES ('".$cid."', now(),'".$content."', '".$creator."')";
        $result = $conn->query($sql);
        header("Location: forum.php");
    }
}
?>