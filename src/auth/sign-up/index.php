

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
          <form action="sign-up.php" method="post" class="w-4/6 mx-auto">
            <div class="flex flex-col mx-auto mb-2">
              <label for="Email" class="mb-2 font-semibold text-[#2A2A2A]">Email</label>
              <input type="email" name="email" id="" class="border-[0.5px] border-[#797979] px-2.5 py-2 rounded-md focus:outline-none" required autocomplete="off" />
            </div>
            <div class="flex flex-col mx-auto mb-2">
              <label for="Password" class="mb-2 font-semibold text-[#2A2A2A]">Password</label>
              <input type="password" name="password" id="" class="border-[0.5px] border-[#797979] px-2.5 py-2 rounded-md focus:outline-none" required autocomplete="off" />
            </div>
            <h1 class="text-sm mb-6 text-end">
              Sudah punya akun?<span class="text-[#FC7F27]"><a href="../login.php"> Log In</a></span>
            </h1>
            <input type="submit" class="bg-[#FC7F27] font-extrabold py-2.5 text-xl rounded-xl text-white w-3/6 flex justify-center mx-auto" value="Next" />
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