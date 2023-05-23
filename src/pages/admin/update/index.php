<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: ../index.php');
  exit;
}

include '../../api/index.php';

$id = $_GET['id'];
$query = "SELECT * FROM produk WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard | YumYumExpress</title>
  <link rel="stylesheet" href="../../styles/style.css" />
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      /* display: none; <- Crashes Chrome on hover */
      -webkit-appearance: none;
      margin: 0;
    }
  </style>
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
        <h1 class="font-bold text-xl mb-2 text-[#FC7F27] my-2">Produk</h1>
      </a>
      <a href="../../api/logout.php">
        <h1 class="font-bold text-xl mb-2 text-[#2A2A2A] my-2">Log Out</h1>
      </a>
    </div>
  </nav>
  <section class="mx-20 my-10">
    <div>
      <h1 class="text-4xl font-bold">Selamat Datang, Admin!</h1>
      <h1 class="text-[#8A8A8A] text-xl">Salam hangat untuk Admin terbaik</h1>
      <h1 class="text-[#8A8A8A] text-xl">Kamu Log In sebagai <span class="text-[#FC7F27]"><?= $_SESSION['username'] ?></span> </h1>
    </div>
    <form action="../../api/edit-product.php?id=<?= $row['id'] ?>" method="post" class="mt-10 flex flex-col">
      <div>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
      </div>
      <div class="mb-4 flex flex-col">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="" value="<?= $row['nama_produk'] ?>" class="w-96 border-[0.5px] border-[#797979] px-2.5 py-2 rounded-md focus:outline-none bg-[#F7F7F7]" require autocomplete="off">
      </div>
      <div class="mb-4 flex flex-col">
        <label for="info_produk">Info Produk</label>
        <textarea type="text" name="info_produk" id="" class="w-96 border-[0.5px] border-[#797979] px-2.5 py-2 rounded-md focus:outline-none bg-[#F7F7F7] h-[20vh]" require autocomplete="off"><?= $row['info_produk'] ?></textarea>
      </div>
      <div class="mb-4 flex flex-col">
        <label for="harga_produk">Harga Produk</label>
        <input type="number" name="harga_produk" id="" value="<?= $row['harga_produk'] ?>" class="w-96 border-[0.5px] border-[#797979] px-2.5 py-2 rounded-md focus:outline-none bg-[#F7F7F7]" require autocomplete="off">
      </div>
      <div class="mb-4 flex flex-col">
        <label for="stok_produk">Stok Produk</label>
        <input type="number" name="stok_produk" id="" value="<?= $row['stok_produk'] ?>" class="w-96 border-[0.5px] border-[#797979] px-2.5 py-2 rounded-md focus:outline-none bg-[#F7F7F7]" require autocomplete="off">
      </div>
      <div class="mb-4 ">

        <input type="submit" name="submit" value="Update" class="border-2 border-[#FC7F27] text-white bg-[#FC7F27]  font-extrabold px-6 py-2 text-base rounded-xl">
      </div>
    </form>
  </section>
</body>

</html>