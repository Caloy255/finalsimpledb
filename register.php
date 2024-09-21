<?php require "database.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center h-screen  bg-[#3A4A60]"> 
<?php
    global $message_register;

    if(isset($_POST['register'])){
        $full_Name = $_POST['fullname'];
        $user_Name = $_POST['username'];
        $passkey = $_POST['passkey'];

        $query = "INSERT INTO users (fullname, username, passkey) VALUES ('$full_Name', '$user_Name', '$passkey')";
        mysqli_query($conn, $query);

        $message_register = "Added Complete!";
}


?>
    <div class=" p-10 flex bg-[#1F2937] rounded-xl  justify-center items-center text-white">
        <div class="w-[480px] relative">
            <img src="assets/Frame.svg" alt="" class="absolute top-10 left-5">
            <img src="assets/campus-image.png" alt="" class="h-[600px] w-[480px] mt-5 rounded-lg">
        </div>
        <div class="w-[600px] p-10  flex flex-col gap-8">
            <div class="flex flex-col gap-5">
                <h1 class="font-bold text-5xl">Create an account</h1>
                <p class="text-gray-400">Already have an account? <span><a href="login.php" class="text-[#030499] underline">Log in</a></span></p>
            </div>
            <form action="" method="post" class="flex flex-col gap-5">
                <div class="flex gap-4">
                    <label class="block">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium ">
                        Enter Your Username
                        </span>
                        <input type="text" name="username" class="mt-1 px-3 py-2 bg-[#3A4A60] border shadow-sm border-[#3A4A60] placeholder-slate-400 focus:outline-none focus:border-[#030499] focus:ring-sky-500 block w-[250px] rounded-md sm:text-sm focus:ring-1 " placeholder="Username" required/>
                    </label>

                    <label class="block">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium ">
                    Enter Your Password
                    </span>
                    <input type="password" name="passkey" class="mt-1 px-3 py-2 bg-[#3A4A60] border shadow-sm border-[#3A4A60] placeholder-slate-400 focus:outline-none focus:border-[#030499] focus:ring-sky-500 block w-[250px] rounded-md sm:text-sm focus:ring-1" placeholder="Password" required/>
                </label>
                </div>

                <label class="">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium ">
                        Enter Your Full Name
                    </span>
                    <input type="text" name="fullname" class="mt-1 px-3 py-2 bg-[#3A4A60] border shadow-sm border-[#3A4A60] placeholder-slate-400 focus:outline-none focus:border-[#030499] focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 " placeholder="Fullname" required/>
                </label>

                <label for="">
                    <input type="checkbox" name="" id="">
                    <span class="ml-3 text-sm">I agree to the <a href="" class="text-[#030499] underline">Terms & Conditions</a></span>
                </label>

            

                <input type="submit" value="Register" name="register" class="py-2 px-5 font-semibold text-white bg-[#030499] rounded-lg hover:bg-[#2C2DC8]">

                <div class="flex flex-col justify-center items-center gap-5 mt-5 self-center">
                    <div class="flex gap-2 items-center text-gray-400">
                        <div class="line-one"></div>
                        <p >Or register with</p>
                        <div class="line-two"></div>
                    </div>
                    <div class="flex gap-5">
                        <div class="w-48 border-[1px] border-[#3A4A60] h-12 rounded-md flex justify-center items-center gap-5 hover:text-gray-400 hover:border-2 hover:cursor-pointer">
                            <img src="assets/g-icon.svg" alt="" width="25px">
                            <p>Google</p>
                        </div>
                        <div class="w-48 border-[1px] h-12 rounded-md border-[#3A4A60] flex justify-center items-center gap-5 hover:text-gray-400 hover:border-2 hover:cursor-pointer">
                            <img src="assets/apple-icon.svg" alt="" width="30px">
                            <p>Apple</p>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

   
</body>
<style>
    .line-one{
        border-bottom: 1px solid #3A4A60;
        width: 138px;
        
    }
    .line-two{
        border-bottom: 1px solid #3A4A60;
        width: 138px;
        
    }
</style>
</html>