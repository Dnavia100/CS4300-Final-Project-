<?php
session_start();
require_once 'connect.php';

  if(isset($_POST["uname"])) {
    $uname = $_POST["uname"];
    $psw = $_POST["password"];
    $sql = "SELECT * FROM myguests WHERE username='".$uname."' AND password='".$psw."' LIMIT 1";
    $result = $conn->query($sql);

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION["uid"] = $row["id"];
        $_SESSION["username"] = $row["username"];
        $conn->close();
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid login information. Please return to the previous page.";
        exit();
    }
}

echo $_SESSION["uname"];
?>