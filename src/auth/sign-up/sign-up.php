<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up | YumYumExpress</title>
  <link rel="stylesheet" href="../../pages/styles/style.css" />
</head>

<body class="m-0 p-0">
  <div class="h-screen bg-[#F7F7F7] font-nunito flex justify-center items-center">
    <div class="max-w-5xl mx-10">
      <div class="flex">
        <div class="bg-white px-20 py-16 flex justify-center flex-col w-2/3">
          <div class="mb-6">
            <h1 class="font-extrabold text-5xl uppercase flex justify-center mb-2 text-[#2A2A2A]">Sign Up</h1>
            <h1 class="font-medium text-[#8A8A8A] text-md text-center">
              Sign Up untuk menikmati kemudahan memesan makanan dan minuman favoritmu
            </h1>
          </div>
          <form action='../../pages/api/sign-up.php' method="post" class="w-4/6 mx-auto">
            <div class="flex flex-col mx-auto mb-2">
              <label for="username" class="mb-2 font-semibold text-[#2A2A2A]">Username</label>
              <input type="text" name="username" id="" class="border-[0.5px] border-[#797979] px-2.5 py-2 rounded-md focus:outline-none" required autocomplete="off"/>
            </div>
            <?php
            // Mendapatkan data email dan password dari halaman A
            if (isset($_POST['email']) && isset($_POST['password'])) {
              $email = $_POST['email'];
              $password = $_POST['password'];
              // Menambahkan input field tersembunyi untuk email dan password
              echo '<input type="hidden" name="email" value="' . $email . '">';
              echo '<input type="hidden" name="password" value="' . $password . '">';
            }
            ?>
            <h1 class="text-sm mb-6 text-end">
              Sudah punya akun?<span class="text-[#FC7F27]"><a href="../login.php"> Log In</a></span>
            </h1>
            <input type="submit" class="bg-[#FC7F27] font-extrabold py-2.5 text-xl rounded-xl text-white w-3/6 flex justify-center mx-auto" value="Sign Up" />
          </form>
        </div>
        <div class="w-[400px]">
          <img src="../../pages/assets/images/sign-in.jpg" alt="Log In" width="" class="" />
        </div>
      </div>
    </div>
  </div>
</body>

</html>