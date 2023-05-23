<?php
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
  <link rel="stylesheet" href="../../styles/style.css" />
</head>

<body class="m-0 p-0 bg-[#F7F7F7] font-nunito">
  <nav class=" flex items-center justify-between px-20 py-5 bg-white">
    <div class="flex gap-x-3 items-center">
      <div id="brand">
        <img src="../../assets/icons/logo.png" alt="Brand" width="50px" />
      </div>
      <h1 class="font-extrabold text-3xl mb-2 text-[#2A2A2A] my-2">
        YumYum<span class="text-[#FC7F27]">Express</span>
      </h1>
    </div>
    <div class="flex gap-x-20">
      <a href="../">
        <h1 class="font-bold text-xl mb-2 text-[#2A2A2A] my-2">Dashboard</h1>
      </a>
      <a href="../read/account.php">
        <h1 class="font-bold text-xl mb-2 text-[#2A2A2A] my-2">Data User</h1>
      </a>
      <a href="../read/product.php">
        <h1 class="font-bold text-xl mb-2 text-[#2A2A2A] my-2">Produk</h1>
      </a>
      <a href="../../api/logout.php">
        <h1 class="font-bold text-xl mb-2 text-[#2A2A2A] my-2">Log Out</h1>
      </a>
    </div>
  </nav>
  <section class="ml-20 my-10">
    <div>
      <h1 class="text-4xl font-bold">Selamat Datang, Admin!</h1>
      <h1 class="text-[#8A8A8A] text-xl">Salam hangat untuk Admin terbaik</h1>
      <h1 class="text-[#8A8A8A] text-xl">Kamu Log In sebagai <span class="text-[#FC7F27]"><?= $_SESSION['username'] ?></span> </h1>
    </div>
    <div class="flex justify-center items-center h-[60vh]">
      <h1 class="font-light text-8xl">Tambah Produk</h1>
    </div>
    <div>

    </div>
  </section>
</body>

</html>