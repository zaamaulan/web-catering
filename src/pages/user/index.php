<?php
include '../api/index.php';

session_start();
if (!isset($_SESSION['login'])) {
  header('location: ../index.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard | YumYumExpress</title>
  <link rel="stylesheet" href="../styles/style.css" />
</head>

<body class="m-0 p-0">
  <div class="flex bg-[#F7F7F7]">
    <div class="h-screen py-10 px-4 rounded-tr-[24px] rounded-br-[24px] sticky top-0 bg-white">
      <div>
        <div>
          <img src="../assets/icons/logo.png" alt="logo" width="50px" height="36px" class="mx-auto" />
        </div>
        <div class="border border-[#797979] w-[58px] m-auto mt-10"></div>
      </div>
      <div class="flex flex-col justify-between h-[90%]">
        <div class="">
          <div class="flex justify-center mb-16 mt-24">
            <a href="../">
              <img src="../assets/icons/homeIcon.png" alt="home" width="28px" />
            </a>
          </div>

          <div class="flex justify-center mb-16 ">
            <a href="../saved/">
              <img src="../assets/icons/saveIcon.png" alt="grid" width="20px" />
            </a>
          </div>

          <div class="flex justify-center mb-16 ">
            <a href="../menu/">
              <img src="../assets/icons/gridIcon.png" alt="grid" width="24px" />
            </a>
          </div>

          <div class="flex justify-center mb-16  ">
            <a href="../testimoni/">
              <img src="../assets/icons/commentIcon.png" alt="comment" width="24px" />
            </a>
          </div>

          <div class="flex justify-center mb-16 ">
            <a href="../koupon/">
              <img src="../assets/icons/ticketIcon.png" alt="ticket" width="28px" />
            </a>
          </div>
        </div>
        <div class="">
          <div class="flex justify-center mb-16">
            <a href="../user/">
              <img src="../assets/icons/userIcon.png" alt="user" width="24px" />
            </a>
          </div>

          <div class="flex justify-center  ">
            <a href="../api/logout.php">
              <img src="../assets/icons/logoutIcon.png" alt="logout" width="26px" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- NAVBAR -->
</body>

</html>