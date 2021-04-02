<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="./content/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./content/slick-1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="./content/build/styles.css">
    <style>
        .background4 {
            background-image: url('./content/image/background/background4.jpg');
        }
    </style>
</head>

<body>
    <header>
        <div class="bg-blue-400 bg-opacity-50">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="flex px-32 bg-blue-500 bg-opacity-70">
            <?php require "menu.php"; ?>
        </div>
    </header>
    <main>
        <section class="mx-96 border my-10 px-32 py-10 shadow-md">
            <form action="postLogin.php" method="POST" class="px-40">
                <h1 class="text-center text-3xl">ĐĂNG KÝ THÀNH VIÊN</h1>
                <div class="mt-4">
                    <span>Tên đăng nhập</span>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="" id="users_name" name="users_name">
                </div>
                <!-- end user name -->
                <div class="mt-4">
                    <span>Mật khẩu</span>
                    <input class="my-1 px-2 py-1 border focus:outline-none block w-full" type="password" placeholder="" id="pass" name="pass">
                </div>
                <div class="flex items-center pt-2">
                    <input type="checkbox">
                    <span class="px-2">Ghi nhớ mật khẩu</span>
                </div>
                <!-- end password -->
                <button class="block w-full bg-blue-300 border rounded-lg mt-4 py-2 text-lg focus:outline-none hover:bg-white hover:border-blue-300" name="btn_login">Đăng
                    nhập</button>
            </form>
            <div class="mt-4 flex justify-end px-40">
                <!-- <a class="hover:underline hover:text-blue-500 block" href="">Quên mật khẩu</a> -->
                <div class="">
                    <span class="inline-block ">Bạn chưa có tài khoản?</span>
                    <a class="hover:underline inline-block text-blue-500" href="registration.php">Đăng
                        ký</a>
                </div>
            </div>
        </section>
    </main>
    <footer class="background4 bg-opacity-10 mt-10">
        <?php require "footer.php"; ?>
    </footer>
</body>

</html>