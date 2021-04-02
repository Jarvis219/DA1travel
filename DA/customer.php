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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap" rel="stylesheet">
    <style>
        /* .bg-noithanh1 {
            background-image: url('./content/image/background/bg-noithanh1.jpg');
        } */

        .background4 {
            background-image: url('./content/image/background/background4.jpg');
        }

        .nunito {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="nunito">
    <header class="relative">
        <img src="./content/image/background/bg-uuDai1.jpg" alt="">
        <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
            <?php require "menu.php"; ?>
        </div>
        <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white bg-opacity-80 rounded-t-md">
            <h3 class="font-bold text-2xl uppercase text-center "><a href="">Ưu đãi khách hàng</a></h3>
            <img class="w-20 mx-auto" src="./content/image/gachvang.png" alt="">
        </div>
    </header>
    <main class="nunito">
        <section class="flex container mx-auto my-5">
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="index.php">Trang chủ</a></h3>
            <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3><a class="uppercase text-sm font-bold" href="tourNoithanh.php">Ưu đãi</a></h3>
        </section>
        <section class="text-center py-12 bg-gray-100">
            <h2 class="text-3xl font-bold">Ưu đãi đặt tour tại Hanoitourist</h2>
            <p class="text-xl mx-96 py-5">Chương trình cung cấp voucher dành cho khách hàng, mang lại cho khách hành những ưu đãi tốt nhất thuận tiện cho việc du lịch cùng Hanoitourist</p>
            <div class="grid grid-cols-3 gap-12 container mx-auto">
                <div>
                    <div id="screen">
                        <img class="rounded-md" src="./content/image/Thẻ thành viên/5.png" alt="">
                        <div class="bg-white rounded-md py-6 my-10">
                            <h3 class="text-blue-500 font-bold text-2xl">Voucher SEA</h3>
                            <p class="pt-3">Ưu đãi đến 5%</p>
                        </div>
                        <button class=" bg-yellow-400 w-40 py-3 border hover:bg-white hover:border-yellow-400 focus:outline-none" id="next">Xem chi tiết<i class="fas fa-plus-square px-1"></i></button>
                    </div>
                    <div class="pt-5 hidden" id="show">
                        <h3 class="text-blue-500 font-bold text-2xl pb-5">Voucher SEA</h3>
                        <div class="text-left">
                            <p class="py-1">Voucher áp dụng quyền lợi giảm giá trực tiếp cho tour <span class="font-bold">5 - 10</span> người khi đặt tour.</p>
                            <div class="">
                                <ul>
                                    <li class="list-inside list-disc py-1">Giảm <span class="font-bold">3%</span> cho tour nội thành</li>
                                    <li class="list-inside list-disc py-1">Giảm <span class="font-bold">5%</span> cho tour ngoại thành</li>
                                    <li class="list-inside list-disc py-1">Khi áp dụng giảm % của voucher này sẽ không áp dụng đồng thời với các voucher khác.</li>
                                    <li class="list-inside list-disc py-1">Giá trị voucher có hiệu lực ngay sau khi khách hàng lựa chọn voucher</li>
                                    <li class="list-inside list-disc pt-1">Ưu đãi giảm giá dịch vụ không được áp dụng đối với các tour khuyến mãi, tour giảm giá đặc biệt khác</li>
                                </ul>
                            </div>
                        </div>
                        <button class="mt-10 bg-yellow-400 w-40 py-3 border hover:bg-white hover:border-yellow-400" id="prev">Xem mã<i class="fas fa-qrcode px-1"></i></button>
                    </div>
                </div>
                <!-- col1 -->
                <div>
                    <div id="screen1">
                        <img class="rounded-md" src="./content/image/Thẻ thành viên/7.png" alt="">
                        <div class="bg-white rounded-md py-6 my-10">
                            <h3 class="text-blue-500 font-bold text-2xl">Voucher SKY</h3>
                            <p class="pt-3">Ưu đãi đến 7%</p>
                        </div>
                        <button class=" bg-yellow-400 w-40 py-3 border hover:bg-white hover:border-yellow-400 focus:outline-none" id="next1">Xem chi tiết<i class="fas fa-plus-square px-1"></i></button>
                    </div>
                    <div class="pt-5 hidden " id="show1">
                        <h3 class="text-blue-500 font-bold text-2xl pb-5">Voucher SKY</h3>
                        <div class="text-left">
                            <p class="py-1">Voucher áp dụng quyền lợi giảm giá trực tiếp cho tour <span class="font-bold">11 - 15</span> người khi đặt tour.</p>
                            <div class="">
                                <ul>
                                    <li class="list-inside list-disc py-1">Giảm <span class="font-bold">5%</span> cho tour nội thành</li>
                                    <li class="list-inside list-disc py-1">Giảm <span class="font-bold">7%</span> cho tour ngoại thành</li>
                                    <li class="list-inside list-disc py-1">Khi áp dụng giảm % của voucher này sẽ không áp dụng đồng thời với các voucher khác.</li>
                                    <li class="list-inside list-disc py-1">Giá trị voucher có hiệu lực ngay sau khi khách hàng lựa chọn voucher</li>
                                    <li class="list-inside list-disc pt-1">Ưu đãi giảm giá dịch vụ không được áp dụng đối với các tour khuyến mãi, tour giảm giá đặc biệt khác</li>
                                </ul>
                            </div>
                        </div>
                        <button class="mt-10 bg-yellow-400 w-40 py-3 border hover:bg-white hover:border-yellow-400" id="prev1">Xem mã<i class="fas fa-qrcode px-1"></i></button>
                    </div>
                </div>
                <!-- col2 -->
                <div>
                    <div id="screen2">
                        <img class="rounded-md" src="./content/image/Thẻ thành viên/10.png" alt="">
                        <div class="bg-white rounded-md py-6 my-10">
                            <h3 class="text-blue-500 font-bold text-2xl">Voucher SUN</h3>
                            <p class="pt-3">Ưu đãi đến 10%</p>
                        </div>
                        <button class=" bg-yellow-400 w-40 py-3 border hover:bg-white hover:border-yellow-400 focus:outline-none" id="next2">Xem chi tiết<i class="fas fa-plus-square px-1"></i></button>
                    </div>
                    <div class="pt-5 hidden" id="show2">
                        <h3 class="text-blue-500 font-bold text-2xl pb-5">Voucher SUN</h3>
                        <div class="text-left">
                            <p class="py-1">Voucher áp dụng quyền lợi giảm giá trực tiếp cho tour <span class="font-bold">16 - 20</span> người khi đặt tour.</p>
                            <div class="">
                                <ul>
                                    <li class="list-inside list-disc py-1">Giảm <span class="font-bold">7%</span> cho tour nội thành</li>
                                    <li class="list-inside list-disc py-1">Giảm <span class="font-bold">10%</span> cho tour ngoại thành</li>
                                    <li class="list-inside list-disc py-1">Khi áp dụng giảm % của voucher này sẽ không áp dụng đồng thời với các voucher khác.</li>
                                    <li class="list-inside list-disc py-1">Giá trị voucher có hiệu lực ngay sau khi khách hàng lựa chọn voucher</li>
                                    <li class="list-inside list-disc pt-1">Ưu đãi giảm giá dịch vụ không được áp dụng đối với các tour khuyến mãi, tour giảm giá đặc biệt khác</li>
                                </ul>
                            </div>
                        </div>
                        <button class="mt-10 bg-yellow-400 w-40 py-3 border hover:bg-white hover:border-yellow-400" id="prev2">Xem mã<i class="fas fa-qrcode px-1"></i></button>
                    </div>
                </div>
                <!-- col3 -->
            </div>
        </section>
        <section class="text-left py-12 bg-white">
            <h2 class="text-3xl font-bold text-center">Quyền lợi ưu đãi</h2>
            <p class="text-xl mx-96 py-5">Khách hàng sẽ được hưởng các quyền lợi ưu đãi, giảm giá trực tiếp và quà tặng từ Công ty và Đối tác của Lữ hành Hanoitourist</p>
            <div class="grid grid-cols-3 gap-10 container mx-auto px-20">
                <div class="col-span-1">
                    <img class="py-10" src="./content/image/Thẻ thành viên/3.png" alt="">
                </div>
                <!-- col1 -->
                <div class="col-span-2 py-16 text-lg text-justify">
                    <p>Chương trình voucher được lấy cảm hứng từ những ấn tượng về cảnh sắc thiên nhiên – vùng biển đẹp, bầu trời xanh thẳm và mặt trời chiếu sáng – những trải nghiệm thú vị, tạo nên nét riêng biệt, ấn tượng độc đáo trong từng chuyến đi.</p>
                    <p class="py-5">Bên cạnh đó, Xanh và Vàng còn là sắc màu chủ đạo của Thương hiệu Lữ hành Hanoitourist.</p>
                    <p>– Slogan “Beyond the adventure” – Hơn cả một chuyến đi – Mang ý nghĩa thông điệp: ngoài sự trải nghiệm thú vị trên từng chuyến đi, đó là sự chăm sóc tận tình nhằm đem đến dịch vụ tốt nhất dành cho khách hàng.</p>
                </div>
                <!-- col2 -->
            </div>
        </section>
    </main>
    <footer class="background4 bg-opacity-10">
        <?php require "footer.php"; ?>
    </footer>
    <script src="./content/js/customer.js"></script>
</body>

</html>