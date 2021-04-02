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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <style>
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
        <img src="./content/image/background/bg-product.jpg" alt="">
        <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
            <?php require "menu.php"; ?>
        </div>
        <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white bg-opacity-80 rounded-t-md">
            <h3 class="font-bold text-2xl uppercase text-center "><a href="">Tour nội thành - tên tour</a></h3>
            <img class="w-20 mx-170" src="./content/image/gachvang.png" alt="">
        </div>
    </header>
    <?php
    include "../../DA1/examples/local.php";
    if (isset($_GET['id_tour'])) {
        $id = $_GET['id_tour'];
        $sqll = "select id_tour, name_tour, price,plan1, plan2, plan3,introduction, promotional,content, time_start, time_end, place_start, place_end, tour.id_image, images.image_main, images.image_detail, images.image_plan1, images.image_plan2, images.image_plan3 from tour join images on tour.id_image = images.id_image where id_tour = $id";
        $totall = $local->query($sqll)->fetch();
    }

    ?>
    <main class="">
        <section class="flex container mx-auto my-5">
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="index.php">Trang chủ</a></h3>
            <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="tourNoithanh.php">tour ngoại thành</a>
            </h3>
            <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3><a class="uppercase text-sm" href="tourNoithanh.php"><?php echo $totall['name_tour'] ?></a></h3>
        </section>
        <section class="bg-white my-5">
            <div class="container mx-auto grid grid-cols-12 gap-10 justify-center">
                <div class="col-span-6 my-5 bg-white m-2">
                    <div class="slider-for object-cover bg-gray-100">
                        <div class="focus:outline-none"><img class="w-full object-cover"
                                src="../assets/img/<?php echo $totall['image_main'] ?>" alt=""></div>
                        <div class="focus:outline-none"><img class="w-full object-cover"
                                src="../assets/img/<?php echo $totall['image_detail'] ?>" alt=""></div>
                        <div class="focus:outline-none"><img class="w-full object-cover"
                                src="../assets/img/<?php echo $totall['image_plan1'] ?>" alt=""></div>
                        <div class="focus:outline-none"><img class="w-full object-cover"
                                src="../assets/img/<?php echo $totall['image_plan2'] ?>" alt=""></div>
                        <div class="focus:outline-none"><img class="w-full object-cover"
                                src="../assets/img/<?php echo $totall['image_plan3'] ?>" alt=""></div>
                    </div>
                    <div class="slider-nav bg-gray-100 mt-5">
                        <div class="px-1 focus:outline-none"><img
                                src="../assets/img/<?php echo $totall['image_detail'] ?>" alt="">
                        </div>
                        <div class="px-1 focus:outline-none"><img src="./content/image/1.jpg" alt="">
                        </div>
                        <div class="px-1 focus:outline-none"><img
                                src="../assets/img/<?php echo $totall['image_plan1'] ?>" alt="">
                        </div>
                        <div class="px-1 focus:outline-none"><img
                                src="../assets/img/<?php echo $totall['image_plan2'] ?>" alt="">
                        </div>
                        <div class="px-1 focus:outline-none"><img
                                src="../assets/img/<?php echo $totall['image_plan3'] ?>" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-span-6 my-5 bg-gray-100 bg-opacity-50 pl-2.5">

                    <h2 class="font-bold text-4xl bg-yellow-300 py-2 px-5"><?php echo $totall['name_tour'] ?></h2>
                    <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-3"></div>
                    <!-- ten sp -->
                    <div class="px-5">
                        <div class="my-7 flex items-center">
                            <p class="my-px">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star-half-alt text-yellow-300"></i>
                            </p>
                            <span class="px-2">|</span>
                            <span>32 Đánh giá</span>
                        </div>
                        <div class="bg-gray-50 px-10 py-2">
                            <!-- <span class="mr-3 line-through text-gray-500 text-lg">7,599,000 ₫</span> -->
                            <span class="text-3xl px-5 text-red-600 font-bold"><?php echo $totall['price'] ?>
                                ₫/khách</span>
                        </div>
                        <div class="border-b pt-5 border-gray-200 h-px"></div>
                        <p class="my-7 text-justify"><?php echo $totall['introduction'] ?></p>
                        <div class="border-t pb-5 border-gray-200 h-px"></div>
                        <div class="flex items-center ">
                            <span>Khởi xuất phát</span>
                            <p class="ml-10"><i
                                    class="fas fa-map-marker-alt py-2 pr-2"></i><?php echo $totall['place_start'] ?></p>
                        </div>
                        <div class="my-10">
                            <a href="cart.php"
                                class=" text-black border hover:border-yellow-400 px-12 py-3 w-full text-base rounded bg-red-400 hover:bg-white text-center">Đặt
                                ngay</a>
                        </div>
                        <div class="flex items-center mt-7">
                            <span>Chia sẻ</span>
                            <div class="ml-20">
                                <i class="fab fa-facebook-messenger px-1 text-2xl text-blue-700"></i>
                                <i class="fab fa-facebook px-1 text-2xl text-blue-800"></i>
                                <i class="fab fa-google-plus px-1 text-2xl text-red-400"></i>
                                <i class="fab fa-pinterest px-1 text-2xl text-red-600"></i>
                                <i class="fab fa-twitter px-1 text-2xl text-blue-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="bg-gray-100 bg-opacity-50 py-10"></section> -->
        <section class="bg-white">
            <div class=" container mx-auto">
                <div class="bg-white grid grid-cols-12 my-10">
                    <div class="col-span-9 bg-gray-100 p-5 bg-opacity-50">
                        <div>
                            <div class="">
                                <h2 class="text-3xl container mx-auto">Mô tả </h2>
                                <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-2"></div>
                            </div>
                            <div class="mt-5">
                                <p class="text-justify"><?php echo $totall['content'] ?></p>
                                <img class="mx-auto my-5" src="../assets/img/<?php echo $totall['image_detail'] ?>"
                                    alt="">
                            </div>
                        </div>
                        <div>
                            <div class="my-5">
                                <h2 class="text-3xl container mx-auto">Lịch trình</h2>
                                <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-2"></div>
                            </div>
                            <div>
                                <p>
                                    <?php echo $totall['plan1'] ?>
                                </p>
                                <!-- <ul>
                                    <li class="text-justify"><span class="font-bold">07:45 – 08:30:</span> Hướng dẫn
                                        viên và lái xe đón Quý khách tại khách sạn đi tham quan Chùa Trấn Quốc – ngôi
                                        chùa thiêng nằm bên bờ Hồ Tây.</li>
                                    <li class="text-justify"><span class="font-bold">09:00:</span> Quý khách tham quan
                                        Lăng Chủ tịch Hồ Chí Minh – nơi an nghỉ cuối cùng của vị lãnh tụ kính yêu của
                                        dân tộc Việt Nam, và Nhà sàn Bác Hồ – nơi Bác ở và làm việc từ năm 1958 đến năm
                                        1969.</li>
                                    <li class="text-justify"><span class="font-bold">10:00:</span> Điểm dừng chân tiếp
                                        theo là Chùa Một Cột – ngôi chùa có kiến trúc độc đáo mang dáng dấp của
                                        một đài sen mọc lên giữa lòng hồ vuông vắn.</li>
                                </ul> -->
                                <img class="mx-auto my-5" src="../assets/img/<?php echo $totall['image_plan1'] ?>"
                                    alt="">
                            </div>
                            <div>
                                <p>
                                    <?php echo $totall['plan1'] ?>
                                </p>
                                <!-- <ul>
                                    <li class="text-justify"><span class="font-bold">11:00:</span> Quý khách đi tham
                                        quan Bảo tàng Dân tộc học, nơi lưu giữ và trưng bày nhiều hiện vật văn hoá của
                                        cả 54 dân tộc Việt Nam.</li>
                                    <li class="text-justify"><span class="font-bold">13:00:</span> Quý khách nghỉ ngơi,
                                        ăn trưa tại nhà hàng trong phố cổ.</li>
                                    <li class="text-justify"><span class="font-bold">14:00:</span> Quý khách đi tham
                                        quan Văn Miếu Quốc Tử Giám – trường đại học đầu tiên của Việt Nam thờ Khổng Tử.
                                    </li>
                                </ul> -->
                                <img class="mx-auto my-5" src="../assets/img/<?php echo $totall['image_plan2'] ?>"
                                    alt="">
                            </div>
                            <div>
                                <p>
                                    <?php echo $totall['plan3'] ?>
                                </p>
                                <!-- <ul>
                                    <li class="text-justify"><span class="font-bold">15:30:</span> Điểm dừng chân cuối
                                        cùng là Hồ Hoàn Kiếm và Đền Ngọc Sơn.</li>
                                    <li class="text-justify"><span class="font-bold">16:00:</span> Xe đưa Quý khách về
                                        khách sạn. Kết thúc chương trình.</li>
                                </ul> -->
                                <img class="mx-auto my-5" src="../assets/img/<?php echo $totall['image_plan3'] ?>"
                                    alt="">
                            </div>
                        </div>
                        <!-- <div>
                            <div class="">
                                <h2 class="text-3xl container mx-auto text-red-500">GIÁ TOUR TRỌN GÓI CHO 01 KHÁCH</h2>
                                <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-2"></div>
                            </div>
                            <div class="mt-5">
                                <p class="text-justify">Du lịch Chùa Hương là một nét đẹp trong đời sống tâm linh của
                                    người dân Việt Nam, bởi chùa là nơi linh thiêng để gìn giữ và truyền bá tư tưởng của
                                    Đức Phật. Để quên đi những ồn ào của cuộc sống và cầu mong cho gia đình, người thân
                                    một năm mới tràn đầy hạnh phúc và sức khỏe. Hãy đồng hành cùng Du Lịch Việt trong
                                    touir lễ chùa Hương này để khám phá cảnh đẹp và lễ chùa linh thiêng.</p>
                                <img class="mx-auto my-5" src="./content/image/hoan-kiem.jpg" alt="">
                            </div>
                        </div> -->
                    </div>
                    <div class=" col-span-3 ml-10 p-5 bg-gray-100 bg-opacity-50">
                        <div class="">
                            <h2 class="text-3xl mx-2">Tour liên quan</h2>
                            <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-2 mx-2"></div>
                        </div>
                        <div class="mt-5">
                            <a class="group shadow-lg rounded-md" href="">
                                <div class="overflow-hidden rounded-md border border-white">
                                    <img class="transition duration-300 transform group-hover:opacity-80"
                                        src="./content/image/1.jpg" alt="">
                                </div>
                                <div class="text-left px-5 py-3">
                                    <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                                    <div class="flex mt-2  items-center">
                                        <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                                        <p class="text-sm">Hà Nội</p>
                                    </div>
                                    <p class="py-1">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                                    <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt
                                        ngay<i
                                            class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                                </div>
                            </a>
                            <div class="border-b w-72 bg-gray-400 mx-auto my-5"></div>
                            <a class="group shadow-lg rounded-md" href="">
                                <div class="overflow-hidden rounded-md border border-white">
                                    <img class="transition duration-300 transform group-hover:opacity-80"
                                        src="./content/image/1.jpg" alt="">
                                </div>
                                <div class="text-left px-5 py-3">
                                    <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                                    <div class="flex mt-2  items-center">
                                        <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                                        <p class="text-sm">Hà Nội</p>
                                    </div>
                                    <p class="py-1">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                                    <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt
                                        ngay<i
                                            class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                                </div>
                            </a>
                            <div class="border-b w-72 bg-gray-400 mx-auto my-5"></div>
                            <a class="group shadow-lg rounded-md" href="">
                                <div class="overflow-hidden rounded-md border border-white">
                                    <img class="transition duration-300 transform group-hover:opacity-80"
                                        src="./content/image/1.jpg" alt="">
                                </div>
                                <div class="text-left px-5 py-3">
                                    <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                                    <div class="flex mt-2  items-center">
                                        <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                                        <p class="text-sm">Hà Nội</p>
                                    </div>
                                    <p class="py-1">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                                    <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt
                                        ngay<i
                                            class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                                </div>
                            </a>
                            <div class="border-b w-72 bg-gray-400 mx-auto my-5"></div>
                            <a class="group shadow-lg rounded-md" href="">
                                <div class="overflow-hidden rounded-md border border-white">
                                    <img class="transition duration-300 transform group-hover:opacity-80"
                                        src="./content/image/1.jpg" alt="">
                                </div>
                                <div class="text-left px-5 py-3">
                                    <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                                    <div class="flex mt-2  items-center">
                                        <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                                        <p class="text-sm">Hà Nội</p>
                                    </div>
                                    <p class="py-1">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                                    <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt
                                        ngay<i
                                            class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                                </div>
                            </a>
                            <div class="border-b w-72 bg-gray-400 mx-auto my-5"></div>
                            <a class="group shadow-lg rounded-md" href="">
                                <div class="overflow-hidden rounded-md border border-white">
                                    <img class="transition duration-300 transform group-hover:opacity-80"
                                        src="./content/image/1.jpg" alt="">
                                </div>
                                <div class="text-left px-5 py-3">
                                    <h3 class="text-base font-bold uppercase">Lăng bác - văn miếu - hỏa lò</h3>
                                    <div class="flex mt-2  items-center">
                                        <i class="fas fa-map-marker-alt py-2 pr-5"></i>
                                        <p class="text-sm">Hà Nội</p>
                                    </div>
                                    <p class="py-1">Giá: <span class="font-bold text-red-400">670,000</span> ₫/khách</p>
                                    <button class="border w-full py-2 group-hover:border-yellow-500 uppercase">Đặt
                                        ngay<i
                                            class="fas fa-angle-double-right text-sm pl-2 transform group-hover:translate-x-3 transition duration-150"></i></button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="bg-gray-100 bg-opacity-50 py-10"></section> -->
        <section class="bg-gray-100 container mx-auto p-5">
            <div class="my-5">
                <h2 class="text-3xl ">Nhận xét của khách hàng</h2>
                <div class="border-b-2 rounded-full bg-gray-200 w-24 mt-2"></div>
            </div>
            <div class="grid grid-cols-7 mb-10">
                <div class="col-span-3 border-r px-32">
                    <div>
                        <h3 class="my-4 text-xl font-bold">Đánh giá tổng thể</h3>
                        <div class="flex items-center">
                            <div class="pr-8">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                            </div>
                            <span class="px-2">33</span>
                            <span>(lượt đánh giá)</span>
                        </div>
                    </div>
                    <!-- total star -->
                    <div class="my-5">
                        <h4>Xếp hạng</h4>
                        <button class="flex items-center py-3">
                            <span>5 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                            </div>
                            <p><span class="px-2">31</span>đánh giá</p>
                        </button>
                        <!-- 5 sao -->
                        <button class="flex items-center py-3">
                            <span>4 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p><span class="px-2">32</span>đánh giá</p>
                        </button>
                        <!-- 4 sao -->
                        <button class="flex items-center py-3">
                            <span>3 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p><span class="px-2">33</span>đánh giá</p>
                        </button>
                        <!-- 3 sao -->
                        <button class="flex items-center py-3">
                            <span>2 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p><span class="px-2">34</span>đánh giá</p>
                        </button>
                        <!-- 2 sao -->
                        <button class="flex items-center py-3">
                            <span>1 sao</span>
                            <div class="px-14">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p><span class="px-2">35</span>đánh giá</p>
                        </button>
                        <!-- 1 sao -->
                    </div>

                </div>
                <div class="col-span-4 px-10">
                    <h3 class="my-4 text-xl font-bold">Nhận xét</h3>
                    <div class="grid grid-cols-8 mb-5">
                        <div class="col-span-1 items-center">
                            <img class="" src="./content/image/user.png" alt="">
                            <span class="px-3">Tên đăng nhập</span>
                        </div>
                        <div class="col-span-7 py-1">
                            <div class="bg-white py-1 px-5">
                                <div class="flex">
                                    <div class="">
                                        <i class="fas fa-star text-yellow-300"></i>
                                        <i class="fas fa-star text-yellow-300"></i>
                                        <i class="fas fa-star text-yellow-300"></i>
                                        <i class="fas fa-star text-yellow-300"></i>
                                        <i class="fas fa-star text-yellow-300"></i>
                                    </div>
                                </div>
                                <p class="py-2">Tôi đi tour vòng quanh Hà Nội thấy các dịch vụ của công ty khá ổn
                                    từ
                                    khách sạn,
                                    nhà
                                    hàng,
                                    phương tiện di
                                    chuyển đến hành trình tham quan. Không phát sinh chi phí phụ là
                                    điều
                                    tuyệt với.</p>
                                <a href="" class="text-blue-500">Trả lời</a>
                                <span class="px-2 text-sm "><i class="fas fa-user-clock px-1"></i>25/03/2021</span>
                            </div>
                            <div class="bg-white ml-2 mt-2 px-5 py-2">
                                <div class="flex items-center">
                                    <img class="w-10" src="./content/image/user.png" alt="">
                                    <span class="px-5">Tên admin</span>
                                    <span class="bg-yellow-400 px-1">Quản trị viên</span>
                                </div>
                                <p class="py-2">Cảm ơn bạn đã chọn tour của chúng tôi</p>
                                <a href="" class="text-blue-500">Trả lời</a>
                                <span class="px-2 text-sm "><i class="fas fa-user-clock px-1"></i>25/03/2021</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
            </div>
            <form class="mx-10 mb-5 bg-white py-2" action="./admin/comment/postComment.php" method="POST"
                enctype="multipart/form-data">
                <div class="flex items-center px-10">
                    <img class="" src="./content/image/user.png" alt="">
                    <span class="px-3">Tên đăng nhập</span>
                </div>
                <div class="mr-180 mx-10" id="rating">
                    <input class="mx-5" type="radio" id="star5" name="rating" value="5" />
                    <label class="full px-1 py-5 text-2xl" for="star5" title="Awesome - 5 stars"></label>

                    <input class="mx-5" type="radio" id="star4" name="rating" value="4" />
                    <label class="full px-1 py-5 text-2xl" for="star4" title="Pretty good - 4 stars"></label>

                    <input class="mx-5" type="radio" id="star3" name="rating" value="3" />
                    <label class="full px-1 py-5 text-2xl" for="star3" title="Meh - 3 stars"></label>

                    <input class="mx-5" type="radio" id="star2" name="rating" value="2" />
                    <label class="full px-1 py-5 text-2xl" for="star2" title="Kinda bad - 2 stars"></label>

                    <input class="mx-5" type="radio" id="star1" name="rating" value="1" />
                    <label class="full px-1 py-5 text-2xl" for="star1" title="Sucks big time - 1 star"></label>

                </div>
                <div class="my-5 flex px-10 w-full">
                    <form action="">
                        <div class="hidden">
                            <input type="text" id="countstar" value="">
                        </div>
                        <textarea class="border px-5 py-2 focus:outline-none  w-full" name="comment" id="" cols="145"
                            rows="2"></textarea>
                        <button name="btn_sent" class="mx-3 border px-10 bg-white focus:outline-none">Gửi</button>
                    </form>

                </div>
            </form>
        </section>
    </main>
    <footer class="background4 bg-opacity-10 mt-10">
        <?php require "footer.php"; ?>
    </footer>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./content/slick-1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./content/js/sliderProduct.js"></script>
    <script type="text/javascript" src="./content/js/product.js"></script>

    <script>
    var star1 = document.getElementById("star1");
    var star2 = document.getElementById("star2");
    var star3 = document.getElementById("star3");
    var star4 = document.getElementById("star4");
    var star5 = document.getElementById("star5");
    var countstar = document.getElementById("countstar");

    star1.addEventListener("click", function() {
        countstar.value = 1;
    })
    star2.addEventListener("click", function() {
        countstar.value = 2;
    })
    star3.addEventListener("click", function() {
        countstar.value = 3;
    })
    star4.addEventListener("click", function() {
        countstar.value = 4;
    })
    star5.addEventListener("click", function() {
        countstar.value = 5;
    })
    </script>
</body>

</html>