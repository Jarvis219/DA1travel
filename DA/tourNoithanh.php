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
        <img src="./content/image/background/bg-noithanh1.jpg" alt="">
        <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
            <?php require "menu.php"; ?>
        </div>
        <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white bg-opacity-80 rounded-t-md">
            <h3 class="font-bold text-2xl uppercase text-center "><a href="">điểm đến nội thành</a></h3>
            <img class="w-20 mx-170" src="./content/image/gachvang.png" alt="">
        </div>
    </header>
    <section class="flex container mx-auto my-5">
        <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="index.php">Trang chủ</a></h3>
        <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
        <h3><a class="uppercase text-sm" href="tourNoithanh.php">tour nội thành</a></h3>
    </section>
    <section class="container mx-auto grid grid-cols-12">
        <div class="col-span-2">
            <!-- <form action="" class="mt-5">
                <h2 class="text-xl font-bold uppercase"><a href="#">Điểm khởi hành</a></h2>
                <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-3"></div>
                <input class="my-3 border w-full border-yellow-300 py-2 rounded-md px-5 focus:outline-none" type="text" name="" id="" placeholder="Tên thành phố ...">
                <button class="border w-full py-2 mb-1 rounded-md bg-blue-300 hover:bg-blue-400 uppercase">tìm kiếm</button>
            </form> -->
            <div class="my-3">
                <h2 class="text-xl font-bold uppercase"><a href="#">khoảng giá</a></h2>
                <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-3"></div>
                <div class="">
                    <div class="my-4">
                        <input type="radio" name="" id="" class="mx-px">
                        <p class="inline-block">Tất cả</p>
                    </div>
                    <div class="my-4">
                        <input type="radio" name="" id="" class="mx-px">
                        <p class="inline-block">Từ <span class="font-bold">0 ₫</span> đến <span class="font-bold">999,000 ₫</span></p>
                    </div>
                    <div class="my-4">
                        <input type="radio" name="" id="" class="mx-px">
                        <p class="inline-block">Từ <span class="font-bold">1,000,000 ₫</span> đến <span class="font-bold">999,000 ₫</span></p>
                    </div>
                    <div class="my-4">
                        <input type="radio" name="" id="" class="mx-px">
                        <p class="inline-block">Từ <span class="font-bold">1,000,000 ₫</span> đến <span class="font-bold">1,999,000 ₫</span></p>
                    </div>
                    <div class="my-4">
                        <input type="radio" name="" id="" class="mx-px">
                        <p class="inline-block">Từ <span class="font-bold">2,000,000 ₫</span> đến <span class="font-bold">2,999,000 ₫</span></p>
                    </div>
                    <div class="my-4">
                        <input type="radio" name="" id="" class="mx-px">
                        <p class="inline-block">Từ <span class="font-bold">3,000,000 ₫</span> đến <span class="font-bold">3,999,000 ₫</span></p>
                    </div>
                    <div class="my-4">
                        <input type="radio" name="" id="" class="mx-px">
                        <p class="inline-block">Trên <span class="font-bold"> 4,000,000 ₫</span></p>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <h2 class="text-xl font-bold uppercase"><a href="#">Ưu đãi Voucher</a></h2>
                <div class="border-b-2 rounded-full bg-gray-200 w-24 my-5"></div>
                <a class="" href="">
                    <img class="rounded-md" src="./content/image/Thẻ thành viên/5.png" alt="">
                    <div class="">
                        <h3 class="text-center font-bold my-2">Voucher SEA</h3>
                        <ul class="list-disc list-inside">
                            <li class="py-px">Giảm 3% cho tour nội thành</li>
                            <li class="py-px">Giảm 5% cho tour ngoại thành</li>
                        </ul>
                    </div>
                    <p class="py-3 text-right uppercase text-yellow-500 underline group-hover:text-blue-600 text-sm">đặt tour ngay</p>
                </a>
                <div class="border-gray-300 border-b mb-3"></div>
                <a class="group" href="">
                    <img class="rounded-md" src="./content/image/Thẻ thành viên/7.png">
                    <div class="">
                        <h3 class="text-center font-bold my-2">Voucher SKY</h3>
                        <ul class="list-disc list-inside">
                            <li class="py-px">Giảm 5% cho tour nội thành</li>
                            <li class="py-px">Giảm 7% cho tour ngoại thành</li>
                        </ul>
                    </div>
                    <p class="py-3 text-right uppercase text-yellow-500 underline group-hover:text-blue-600 text-sm">đặt tour ngay</p>
                </a>
                <div class="border-gray-300 border-b mb-3"></div>
                <a class="" href="">
                    <img class="rounded-md" src="./content/image/Thẻ thành viên/10.png" alt="">
                    <div class="">
                        <h3 class="text-center font-bold my-2">Voucher SUN</h3>
                        <ul class="list-disc list-inside">
                            <li class="py-px">Giảm 7% cho tour nội thành</li>
                            <li class="py-px">Giảm 10% cho tour ngoại thành</li>
                        </ul>
                    </div>
                    <p class="py-3 text-right uppercase text-yellow-500 underline group-hover:text-blue-600">đặt tour ngay</p>
                </a>
            </div>

        </div>
        <div class="col-span-10 mx-10">
            <div class="flex justify-between">
                <div class="flex justify-center items-center">
                    <h2 class="text-xl font-bold my-3 mx-2 uppercase"><a href="#">Danh sách Tour </a></h2>
                    <a class="px-3 py-2 text-sm bg-yellow-400 mx-2 border border-black hover:border-yellow-400" href="#">Tour Yêu Thích</a>
                    <a class="px-3 py-2 text-sm bg-white mx-2 border border-black hover:border-yellow-400" href="#">Tour mới</a>
                    <select class="px-3 py-2 text-sm bg-white mx-2 focus:outline-none border border-black hover:border-yellow-400" name="" id="">
                        <option cate="gia">Giá</option>
                        <option cate="thap">Giá: Thấp đến cao</option>
                        <option cate="cao">Giá: Cao đến thấp</option>
                    </select>
                    <select class="px-3 w-40 py-2 text-sm bg-white mx-2 focus:outline-none border border-black hover:border-yellow-400" name="" id="">
                        <option cate="">Điểm khởi hành</option>
                        <option cate="">Ba Đình</option>
                        <option cate="">Hoàn Kiếm</option>
                        <option cate="">Đống Đa</option>
                        <option cate="">Hà Đông</option>
                        <option cate="">Cầu Giấy</option>
                        <option cate="">Tây Hồ</option>
                    </select>
                </div>
                <div class="flex justify-center items-center ">
                    <div>
                        <span class="text-red-400">1</span>
                        <span>/</span>
                        <span>13</span>
                    </div>
                    <div class="mx-5">
                        <button class="px-4 py-2 bg-gray-200 border hover:border-yellow-400 hover:bg-white"><i class="fas fa-caret-left text-center"></i></button>
                        <button class="px-4 py-2 bg-white border hover:border-yellow-400 hover:bg-white"><i class="fas fa-caret-right text-center"></i></button>
                    </div>
                </div>
            </div>
            <!-- <div class="border-t border-gray-300 my-5"></div> -->
            <div class="grid grid-cols-4 gap-5 mt-5">
                <a class="group shadow-lg rounded-md" href="product.php">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Ba Đình</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 mb-1 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Hoàn Kiếm</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Đống Đa</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Hà Đông</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Cầu Giấy</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Tây Hồ</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Bắc Từ Liêm</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Nam Từ Liêm</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Long Biên</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Thanh Xuân</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Hoàng Mai</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
                <a class="group shadow-lg rounded-md" href="">
                    <div class="overflow-hidden rounded-md border border-white">
                        <img class="transition duration-300 transform group-hover:opacity-80" src="./content/image/1.jpg" alt="">
                    </div>
                    <div class="text-left px-5 py-3">
                        <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                        <div class="flex mt-2  items-center">
                            <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                            <p class="text-sm">Hai Bà Trưng</p>
                        </div>
                        <p class="py-3">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                        <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt ngay<i class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                    </div>
                </a>
            </div>
            <div class="mt-16 text-center">
                <span class="px-4 py-2 bg-blue-600 mx-px hover:bg-blue-600"><a href="#" class="text-gray-800 text-sm hover:text-white">1</a></span>
                <span class="bg-white px-4 py-2 mx-px hover:border-blue-500 border-white border"><a href="page2.html" class="text-sm">2</a></span>
                <span class="bg-white px-4 py-2 mx-px hover:border-blue-500 border-white border"><a href="page3.html" class="text-sm">3</a></span>
                <span class="bg-white px-4 py-2 mx-px hover:border-blue-500 border-white border"><a href="page2.html" class="text-sm">4</a></span>
                <span class="bg-white px-4 py-2 mx-px hover:border-blue-500 border-white border"><a href="page3.html" class="text-sm">5</a></span>
                <span class="bg-white px-4 py-2 mx-px hover:border-blue-500 border-white border"><a href="page2.html" class="text-sm"><i class="fas fa-angle-double-right"></i></a></span>
            </div>
        </div>
    </section>
    <footer class="background4 bg-opacity-10 mt-10">
        <?php require "footer.php"; ?>
    </footer>
</body>

</html>