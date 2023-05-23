<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: ../../index.php');
  exit;
}

include '../../api/index.php';

$counter = 1;

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
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
      <a href="">
        <h1 class="font-bold text-xl mb-2 text-[#FC7F27] my-2">Data User</h1>
      </a>
      <a href="../read/product.php">
        <h1 class="font-bold text-xl mb-2 text-[#2A2A2A] my-2">Produk</h1>
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

    <table class="bg-white w-full mt-10">
      <thead class="">
        <td class=" border-stone-200 p-2 border py-4 pl-6">Id</td>
        <td class=" border-stone-200 p-2 border pr-96 pl-8">Username</td>
        <td class=" border-stone-200 p-2 border pr-96 pl-8">Email</td>
        <td class=" border-stone-200 p-2 border pr-32 pl-8">Role</td>
        <td class=" border-stone-200 p-2 border pr-32 pl-8">Action</td>

      </thead>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tbody>
          <td class="text-lg font-light py-4 px-6 border border-stone-200 p-2"><?= $counter++; ?></td>
          <td class="text-lg font-light pr-32 border border-stone-200 p-2 px-8 capitalize"><?= $row['username'] ?></td>
          <td class="text-lg font-light pr-32 border border-stone-200 p-2 px-8"><?= $row['email'] ?></td>
          <td class="text-lg font-light border border-stone-200 p-2 px-8"><?= $row['role'] ?></td>
          <td class="text-sm font-base text-red-500 border border-stone-200 p-2 px-8 "><a href="../../api/delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class=""><button>Delete</button></a><a href=" " class="text-indigo-500 pl-10"><button>Edit</button></a></td>
        </tbody>

      <?php endwhile; ?>
    </table>
  </section>
</body>

</html>