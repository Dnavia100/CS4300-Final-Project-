<?php
session_start();
require_once 'connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fname"];
    $email = $_POST["email"];
    $uname = $_POST["uname"];
    $psw = $_POST["password"];

  $sql = "INSERT INTO myguests (fullname, username, email, password) VALUES ('".$fullname."', '".$uname."', '".$email."', '".$psw."')";

  if ($conn->query($sql) === TRUE) {
      $conn->close();
    header("Location: index.php");
    exit();
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    exit();
  }
}
?>