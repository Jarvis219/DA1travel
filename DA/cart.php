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
    <link rel="stylesheet" href="./content/css/product.css">
    <style>
        .background4 {
            background-image: url('./content/image/background/background4.jpg');
        }
    </style>
</head>

<body>
    <header class="relative">
        <img src="./content/image/background/bg-dattour.jpg" alt="">
        <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
            <?php require "menu.php"; ?>
        </div>
        <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white bg-opacity-80 rounded-t-md">
            <h3 class="font-bold text-2xl uppercase text-center "><a href="">Đặt tour - tên tour</a></h3>
            <img class="w-20 mx-170" src="./content/image/gachvang.png" alt="">
        </div>
    </header>
    <main class="container mx-auto">
        <section class="flex container mx-auto my-5">
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="index.php">Trang chủ</a></h3>
            <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="tourNoithanh.php">tour ngoại thành</a></h3>
            <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="tourNoithanh.php">tên tour</a></h3>
            <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3><a class="uppercase text-sm" href="tourNoithanh.php">đặt tour</a></h3>
        </section>
        <section class="grid grid-cols-2 mx-10">
            <img class="" src="./content/image/1.jpg" alt="">
            <table class="shadow-md">
                <thead>
                    <tr class="py-5">
                        <th colspan="2" class="text-2xl py-10 border">Du lịch Lăng bác - văn miếu - hỏa lò</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="">
                        <td class="py-2 border pl-10">Mã tour:</td>
                        <td class="font-bold border pl-10">15786</td>
                    </tr>
                    <tr class="">
                        <td class="py-2 border pl-10">Thời gian:</td>
                        <td class="font-bold border pl-10">1 ngày</td>
                    </tr>
                    <tr class="">
                        <td class="py-2 border pl-10">Giá:</td>
                        <td class="font-bold border pl-10">2,790,000 đ/khách</td>
                    </tr>
                    <tr class="">
                        <td class="py-2 border pl-10">Ngày</td>
                        <td class="font-bold border pl-10">1 ngày</td>
                    </tr>
                    <tr class="">
                        <td class="py-2 border pl-10">Nơi khởi hành:</td>
                        <td class="font-bold border pl-10">Quận Ba Đình</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="mx-56 p-5 shadow-md my-10">
            <h2 class="text-center text-2xl font-bold my-5">BẢNG GIÁ TOUR CHI TIẾT</h2>
            <table class="w-full">
                <tr class="text-center">
                    <th class="border py-2">Loại giá\Độ tuổi</th>
                    <th class="border py-2">Người lớn(Trên 11 tuổi)</th>
                    <th class="border py-2">Trẻ em(Dưới 11 tuổi)</th>
                </tr>
                <tr class="text-center">
                    <td class="border py-2">Giá </td>
                    <td class="border py-2">
                        <p><span>1,500,000 </span> ₫</p>
                    </td>
                    <td class="border py-2">
                        <p><span>750,000 </span> ₫</p>
                    </td>
                </tr>
            </table>
        </section>
        <form action="#" method="POST" class="mx-56 shadow-md p-5">
            <h2 class="text-center text-2xl font-bold my-5">THÔNG TIN LIÊN HỆ</h2>
            <!-- end confirm password -->
            <div class=" ">
                <span>Tên tour</span>
                <input disabled class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full " type="text" value="Lăng bác - văn miếu - hỏa lò" id="lastname" name="lastName">
            </div>
            <div class=" ">
                <span>Họ tên</span>
                <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="Họ tên" id="lastname" name="lastName">
            </div>
            <!-- end lastname -->
            <div class=" ">
                <span>Email</span>
                <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="Email" id="email" name="email">
            </div>
            <!-- end mail -->
            <div class=" ">
                <span>Số điện thoại</span>
                <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="Số điện thoại" id="phone" name="phone">
            </div>
            <div class=" ">
                <span>Địa chỉ</span>
                <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="text" placeholder="Địa chỉ" id="address" name="phone">
            </div>
            <div class=" ">
                <span>Người lớn</span>
                <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="number" placeholder="1" id="address" name="phone">
            </div>
            <div class=" ">
                <span>Trẻ em</span>
                <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="number" placeholder="" id="address" name="phone">
            </div>
            <div class=" ">
                <span>Ngày đi</span>
                <input class="my-1 bg-gray-100 bg-opacity-50 px-2 py-1 border focus:outline-none block w-full" type="date" placeholder="" id="address" name="phone">
            </div>
            <div class="flex justify-end">
                <p class="mt-5">Tổng tiền: <span class="text-red-500 text-2xl font-bold italic">1,500,000</span> ₫</p>
            </div>
            <div class="flex justify-center items-center">
                <button class="mt-5 border hover:border-yellow-300 hover:bg-white rounded-lg px-10 py-2 text-lg focus:outline-none bg-blue-300 hover:text-black" name="btn_regis">Đặt ngay</button>
            </div>
            <!-- end submit -->
        </form>
    </main>
    <footer class="background4 bg-opacity-10 mt-10">
        <?php require "footer.php"; ?>
    </footer>
</body>

</html>