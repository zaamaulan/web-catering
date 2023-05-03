<?php

include 'index.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $errorEmail = $errorUsername = $errorUSername = '';

   if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])) {
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $username = $_POST['username'];
   } else {
      $errorname;
      $errorUsername;
   }

   $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      if (empty($errorUsername) && empty($errorEmail)) {
         $errorEmail = 'Email sudah ada';
         $errorUsername = 'Username sudah ada';
      }
   } else {
      $insert = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
      mysqli_query($conn, $insert);
      header('location: ../login.php');
   }
   $conn->close();
}
