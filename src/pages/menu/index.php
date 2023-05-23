<?php
include '../api/index.php';

if (isset($_POST['search'])) {
  $search = mysqli_real_escape_string($conn, $_POST['search']);
  $query = "SELECT * FROM produk WHERE nama_produk LIKE '%$search%'";
} else {
  $query = "SELECT * FROM produk";
}

$result = mysqli_query($conn, $query);



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

<body class="m-0 p-0 font-nunito">
  <div class="flex">
    <div class="h-screen py-10 px-4 rounded-tr-[24px] rounded-br-[24px] fixed bg-white">
      <div>
        <div>
          <img src="../assets/icons/logo.png" alt="logo" width="50px" height="36px" class="mx-auto" />
        </div>
        <div class="border border-[#797979] w-[58px] m-auto mt-10"></div>
      </div>
      <div class="flex flex-col justify-between h-[90%]">
        <div class="">
          <div class="flex justify-center mb-16 hover:scale-[1.125] transition mt-24">
            <a href="../">
              <img src="../assets/icons/homeIcon.png" alt="home" width="28px" />
            </a>
          </div>

          <div class="flex justify-center mb-16 hover:scale-[1.125] transition ">
            <a href="../menu/">
              <img src="../assets/icons/gridFillIcon.png" alt="grid" width="24px" />
            </a>
          </div>



          <div class="flex justify-center mb-16 hover:scale-[1.125] transition  ">
            <a href="../testimoni/">
              <img src="../assets/icons/commentIcon.png" alt="comment" width="24px" />
            </a>
          </div>

          <div class="flex justify-center mb-16 hover:scale-[1.125] transition ">
            <a href="../koupon/">
              <img src="../assets/icons/ticketIcon.png" alt="ticket" width="28px" />
            </a>
          </div>
        </div>
        <div class="">
          <div class="flex justify-center mb-16 hover:scale-[1.125] transition  ">
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
    <div class="bg-[#F7F7F7] fixed h-[100vh] w-screen -z-50"></div>
    <div class=" ml-24 w-full">
      <section class=" mx-10 ">
        <div class="py-14">
          <div class="flex justify-between">
            <div>
              <h1 class="text-4xl font-bold">Selamat Datang, <span class="whitespace-nowrap"><?= $_SESSION['username'] ?></span></h1>
              <h1 class="text-[#8A8A8A] text-lg">Temukan apa pun yang kamu butuhkan dengan mudah </h1>
            </div>
            <div class="my-5">
              <form action="" method="post" class="flex bg-white border border-[#eeeeee] gap-x-2 rounded-xl px-3 py-2 hover:scale-[1.025] transition">
                <button type="submit"><img src="../assets/icons/searchIcon.png" alt="" width="26px"></button>
                <input type="text" name="search" id="" placeholder="Cari Produk.." class="focus:outline-none text-[#8A8A8A] capitalize w-5/6 lg:w-72" autocomplete="off">
              </form>
            </div>
          </div>
        </div>
        <div class="flex gap-5 flex-wrap mb-10 ">
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="flex">
              <div class="flex flex-col bg-white p-4 rounded-lg w-[400px] justify-between hover:scale-[1.025] transition duration-500">
                <div class="flex flex-col">
                  <img src="../assets/images/<?= $row['gambar_produk'] ?>.png" alt="" width="auto" height="161px" class="rounded-lg">
                  <h1 class="text-[#2A2A2A] text-2xl mt-3 mb-1 font-bold"><?= $row['nama_produk'] ?></h1>
                  <h1 class="text-[#8A8A8A] text-lg pb-7"><?= $row['info_produk'] ?></h1>
                </div>
                <div class="flex justify-between">
                  <h1 class="text-2xl text-[#FC7F27] font-bold">Rp. <?= number_format($row['harga_produk'], 0, ".", ".") ?></h1>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </section>
    </div>
</body>

</html>