<?php
include '../api/index.php';

$query = "SELECT * FROM testimoni";
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
  <div class="flex bg-[#F7F7F7]">
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
              <img src="../assets/icons/gridIcon.png" alt="grid" width="24px" />
            </a>
          </div>

          <div class="flex justify-center mb-16 hover:scale-[1.125] transition  ">
            <a href="../testimoni/">
              <img src="../assets/icons/commentFillIcon.png" alt="comment" width="24px" />
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
    <section class="ml-24">
      <div class="mx-10">
        <div class="flex justify-between py-14">
          <div>
            <h1 class="text-4xl font-bold">Masih ragu dengan YumYumExpress?</h1>
            <h1 class="text-[#8A8A8A] text-lg">Jangan khawatir, sudah banyak pelanggan yang puas dengan layanan dan makanan yang mereka pesan di sini! </h1>
          </div>
        </div>
      </div>
      <div class="flex gap-6 flex-wrap mb-10 mx-10">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <div class="flex">
            <div class="bg-white p-10 w-[700px] rounded-lg flex gap-x-6">
              <div class="w-20"><img src="../assets/icons/profileIcon.png" alt="" width="200px"></div>
              <div>
                <h1 class="text-3xl font-semibold"><?= $row['username'] ?></h1>
                <h1 class="text-lg pb-20 max-w-[30rem]"><?= $row['komentar'] ?></h1>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </section>
</body>

</html>