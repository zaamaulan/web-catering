<?php

session_start();
function verifyLogin($route)
{
  $routeName = ['dashboard/', 'menu/', 'koupon/', 'testimoni/'];
  if (!isset($_SESSION['login'])) {
    return '../auth/login.php';
  } else if (isset($_SESSION['login']) && in_array($route, $routeName)) {
    return $route;
  } else {
    return '';
  }
};

if (!isset($_SESSION['login'])) {
  $afterLogin = 'hidden';
} else {
  $beforeLogin = 'hidden';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard | YumYumExpress</title>
  <link rel="stylesheet" href="styles/style.css" />
  <script src="js/Popup.js"></script>
</head>

<body class="m-0 p-0">
  <div class="flex">
    <!-- NAVBAR -->
    <div class="h-screen py-10 px-4 rounded-tr-[24px] rounded-br-[24px] sticky top-0">
      <div>
        <div>
          <img src="assets/icons/logo.png" alt="logo" width="50px" height="36px" class="mx-auto" />
        </div>
        <div class="border border-[#797979] w-[58px] m-auto mt-10"></div>
      </div>
      <div class="flex flex-col justify-between h-[90%]">
        <div class="">
          <div class="flex justify-center mb-16 hover:scale-[1.125] transition mt-24">
            <a href="">
              <img src="assets/icons/homeFillIcon.png" alt="home" width="28px" />
            </a>
          </div>

          <div class="flex justify-center mb-16 hover:scale-[1.125] transition ">
            <a href="<?= verifyLogin('menu/') ?>">
              <img src="assets/icons/gridIcon.png" alt="grid" width="24px" />
            </a>
          </div>

          <div class="flex justify-center mb-16 hover:scale-[1.125] transition  ">
            <a href="<?= verifyLogin('testimoni/') ?>">
              <img src="assets/icons/commentIcon.png" alt="comment" width="24px" />
            </a>
          </div>

          <div class="flex justify-center mb-16 hover:scale-[1.125] transition ">
            <a href="<?= verifyLogin('koupon/') ?>">
              <img src="assets/icons/ticketIcon.png" alt="ticket" width="28px" />
            </a>
          </div>
        </div>
        <div class="<?= $afterLogin ?>">
          <div class="flex justify-center mb-16 hover:scale-[1.125] transition  ">
            <a href="user/">
              <img src="assets/icons/userIcon.png" alt="user" width="24px" />
            </a>
          </div>

          <div class="flex justify-center">
            <a href="api/logout.php">
              <img src="assets/icons/logoutIcon.png" alt="logout" width="26px" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- NAVBAR -->

    <!-- CONTENT -->
    <main class="ml-8 font-nunito">
      <div class="flex justify-between">
        <div class="pt-48 pb-8 flex justify-between basis-1/2 flex-col h-screen">
          <div>
            <h1 class="font-bold text-4xl mb-2">Selamat Datang di</h1>
            <h1 class="font-extrabold text-7xl mb-2 text-[#2A2A2A]">
              YumYum<span class="text-[#FC7F27]">Express</span>
            </h1>
            <h1 class="font-medium text-xl text-[#8A8A8A] mb-4 mr-14">
              Mari nikmati berbagai pilihan makanan dan minuman lezat dari restoran dan kafe terbaik di kota dengan
              memesan melalui YumYumExpress, dan nikmati pengiriman cepat dan andal yang akan memastikan pesananmu
              tiba dengan sempurna di depan pintu kamu!
            </h1>
            <a href="<?= verifyLogin('menu/') ?>">
              <button class="bg-[#FC7F27] text-white font-extrabold px-8 py-3 rounded-full text-xl">
                Pesan Sekarang!
              </button>
            </a>
          </div>
          <div class="<?= $beforeLogin; ?> ">
            <a href="../auth/login.php">
              <button class="bg-[#FC7F27] text-white font-extrabold px-7 py-3 text-xl rounded-xl mr-3 ">
                Log In
              </button>
            </a>
            <a href="../auth/sign-up/">
              <button class="border-2 border-[#FC7F27] text-[#FC7F27] font-extrabold px-8 py-3 text-xl rounded-xl ">
                Sign Up
              </button>
            </a>
          </div>
          <div class=" <?= $afterLogin; ?>">
            <a href="koupon/">
              <button class="border-2 border-[#FC7F27] text-[#FC7F27] font-extrabold px-8 py-3 text-xl rounded-xl">
                Lihat Koupon
              </button>
            </a>
          </div>
        </div>
        <div class="my-auto mr-6">
          <img src="assets/images/dashboard.jpg" alt="" width="" class="h-[60rem] rounded-tl-[4rem] rounded-bl-[4rem]" />
        </div>
      </div>
    </main>
    <!-- CONTENT -->
    <div id="popup" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white px-20 py-12 border border-gray-100 rounded-md shadow-lg hidden text-center font-nunito">
      <h2 class="font-bold text-4xl mb-5">Log Out?</h2>
      <div class="flex justify-between">
        <a href="" class="font-bold text-xl hover:text-green-500 transition ease-in-out duration-200">Tidak</a>
        <a href="api/logout.php" class="font-bold text-xl hover:text-red-500 transition ease-in-out duration-200">Ya</a>
      </div>
    </div>
  </div>
</body>

</html>