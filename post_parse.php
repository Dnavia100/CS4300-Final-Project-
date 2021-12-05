<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if(isset($_POST['post_submit'])) {
    if(($_POST['post_title'] == "") || ($_POST['post_content'] == "")) {
        echo "You did not fill out both fields. Please return to previous page.";
        exit();
    } else {
        require_once 'connect.php';
        $title = $_POST['post_title'];
        $content = $_POST['post_content'];
        $creator = $_SESSION['username'];
        $sql = "INSERT INTO posts (post_title, post_content, post_creator) VALUES ('".$title."', '".$content."','".$creator."')";
        $result = $conn->query($sql);
        header("Location: forum.php");
    }
}
?>

