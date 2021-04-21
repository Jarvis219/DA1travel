<?php
include "../../DA1/examples/local.php";
?>
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
        <img src="./content/image/background/sl_210303_comboxe-ks-moi.jpg" alt="">
        <div class="absolute top-0 left-0 right-0 flex mt-8 px-32 bg-blue-300 bg-opacity-50">
            <?php require "menu.php"; ?>
        </div>
        <div class="bg-blue-400 bg-opacity-50 absolute top-0 left-0 right-0">
            <?php require "headerTop.php"; ?>
        </div>
        <div class="absolute bottom-0 left-0 right-0 mx-64 pt-5 bg-white bg-opacity-80 rounded-t-md">
            <h3 class="font-bold text-2xl uppercase text-center">Bản tin du lịch</h3>
            <img class="w-20 mx-auto" src="../assets/img/gachvang.png" alt="">
        </div>
    </header>
    <main class="nunito container mx-auto">
        <?php
        if (isset($_GET['id_post'])) {
            $id_post = $_GET['id_post'];
            $sql = "SELECT * FROM postnews WHERE id_post = $id_post";
            $total = $local->query($sql)->fetch();
        }
        ?>
        <section class="flex container mx-auto my-5">
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="index.php">Trang chủ</a></h3>
            <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3><a class="uppercase text-sm text-blue-400 hover:underline" href="news.php">Bản tin du lịch</a></h3>
            <!-- <i class="fas fa-angle-right px-3 items-center flex text-sm text-gray-400"></i>
            <h3 class="uppercase text-sm font-bold " style="line-height: 24px;"><?php echo $total['title'] ?></h3> -->
        </section>
        <section class="grid grid-cols-12 gap-20">
            <div class="col-span-8 mb-10">
                <div>
                    <span class="text-2xl text-red-500 font-bold"><?php echo $total['title'] ?></span>
                    <p class="text-black text-opacity-50 pt-2"><i
                            class="fas fa-calculator pr-4"></i><span><?php echo $total['create_at'] ?></span></p>
                    <p class="text-black text-opacity-50 border-dashed w-full border my-2"></p>
                    <span class="text-lg font-semibold"><?php echo $total['content_short'] ?></span>
                </div>
                <div>
                    <img class="mx-auto pt-5 object-fill" src="../assets/img/<?php echo $total['post_image'] ?>" alt=""
                        style="width: 650px; height: 400px;">
                    <!-- <span class="text-center mx-auto block text-gray-400 my-3"></span> -->
                    <p class="py-3 text-justify"><?php echo $total['content'] ?></p>
                    <!-- <p class="py-3 text-justify">Cụ thể, Công ty du lịch VietSense "tung" tour "Khám phá Thủ đô" có mức giảm giá đến 25%. Trong đó, nổi bật là sản phẩm: Tham quan thành phố Hà Nội 1 ngày có giá 490.000 đồng/người; khám phá làng cổ Đường Lâm - chùa Mía - đền Và (khởi hành vào cuối tuần) có giá 580.000 đồng/người; tour Bát Tràng - Vạn Phúc - Hạ Thái có giá 530.000 đồng/người; tour K9 - Đá Chông có giá 620.000 đồng/người; tour Tâm linh Tứ Bất Tử có giá 690.000 đồng/người.</p>
                    <p class="py-3 text-justify">Ngoài ra, Công ty du lịch VietSense cũng có những gói nghỉ dưỡng 2 ngày 1 đêm với mức giá "mềm" như: Kỳ nghỉ vàng tại Paragon Resort có giá 990.000 đồng/người; nghỉ dưỡng cuối tuần tại Xanh villa resort có giá 1,3 triệu/người.</p>
                    <p class="py-3 text-justify">Trong khi đó, Công ty lữ hành Hanoitourist phối hợp với Di tích Nhà tù Hỏa Lò giới thiệu tour trải nghiệm đêm Hà Nội với giá 199.000 đồng/người; sản phẩm mới - tour đêm "Giải mã Hoàng thành Thăng Long" với mức giảm giá 50% còn 125.000 đồng/người; tour du xuân Hà Nội giảm 50% có mức giá 1,1 triệu đồng (kèm tặng voucher tour đêm tại Di tích Hỏa Lò).</p>
                    <p class="py-3 text-justify">Công ty du lịch Haseco travel giới thiệu sản phẩm "Sắc xuân Tây Hồ" với combo buffet Sen Hồ Tây và trải nghiệm Thung lũng hoa Hồ Tây với giá 390.000 đồng/khách...</p>
                    <p class="py-3 text-justify">Bên cạnh các đơn vị lữ hành giới thiệu sản phẩm du lịch với mức giá rẻ, dịp này, nhiều cơ sở lưu trú, khu nghỉ dưỡng cũng chủ động giới thiệu các gói sản phẩm hấp dẫn về giá. Khu nghỉ dưỡng Thiên Sơn - Suối Ngà "bung" sản phẩm có mức giá 550.000 - 600.000 đồng/người với nhiều dịch vụ trải nghiệm trong ngày.</p>
                    <p class="py-3 text-justify">Khách sạn Movenpick Hà Nội giới thiệu sản phẩm "Kỳ nghỉ tuyệt vời" với giá 2,5 triệu đồng/đêm (cho 2 người) bao gồm bữa sáng và phiếu mua hàng trị giá 800.000 đồng để trải nghiệm nhiều dịch vụ tại khách sạn.</p> -->
                </div>
                <div>
                    <img class="mx-auto pt-5 object-fill" src="../assets/img/<?php echo $total['post_image2'] ?>" alt=""
                        style="width: 650px; height: 400px;">
                    <!-- <span class="text-center mx-auto block text-gray-400 my-3"> Tour du lịch Làng cổ Đường Lâm cũng sẽ được các đơn vị thúc đẩy giới thiệu tới du khách.</span> -->
                    <p class="py-3 text-justify"><?php echo $total['content2'] ?></p>
                    <!-- <p class="py-3 text-justify">"Chúng tôi đã kết nối với nhiều đơn vị cung cấp dịch vụ như khách sạn, nghỉ dưỡng, vận chuyển, máy bay để có những sản phẩm có mức giá rất ưu đãi để người dân trải nghiệm nhiều hơn nhưng yếu tố chất lượng dịch vụ vẫn được bảo đảm", ông Nguyễn Văn Tài nói.</p>
                    <p class="py-3 text-justify">Chủ tịch Câu lạc bộ lữ hành UNESCO Trương Quốc Hùng cũng cho rằng, 20 đơn vị lữ hành của câu lạc bộ tham gia lễ hội lần này đều cam kết xây dựng nhiều sản phẩm chất lượng về du lịch Hà Nội để người dân Hà Nội và các tỉnh, thành phố khác có thêm nhiều cơ hội khám phá sản phẩm mới của du lịch Thủ đô.</p>
                    <p class="py-3 text-justify">Đến nay, công tác chuẩn bị cho Lễ hội Du lịch và Văn hóa ẩm thực Hà Nội 2021 đã sẵn sàng. Giám đốc Sở Du lịch Hà Nội Đặng Hương Giang cho biết, lễ hội lần này là "cú hích" cho du lịch Thủ đô.</p>
                    <p class="py-3 text-justify">Tuy nhiên, bài toán đặt ra cho các đơn vị là làm sao giữ vững được số lượng khách và thu hút được nhiều du khách từ các địa phương khác thường xuyên đến Hà Nội trải nghiệm. Muốn vậy, ngoài việc xây dựng các sản phẩm giá rẻ, các đơn vị cần phải tập trung vào chất lượng dịch vụ, tăng thêm tính trải nghiệm mới lạ cho du khách, đồng thời vẫn cần phải bảo đảm an toàn phòng, chống dịch trong hoạt động du lịch.</p> -->
                </div>
                <span class="flex justify-end mt-10 font-bold"><?php echo $total['author'] ?></span>
            </div>
            <div class="col-span-4 mb-10">
                <div class="sticky" style="top:30px">
                    <div>
                        <h3 class="my-2 font-bold text-2xl text-black border-l-4 px-5 border-red-500">Tin mới</h3>
                        <div class="border-b bg-gray-500 h-px my-4 relative">
                            <div class="border-b bg-blue-700 h-1 top-0 left-0 w-8 my-4"></div>
                        </div>
                        <ul>
                            <?php
                            $sqlt = "SELECT * FROM postnews ORDER BY id_post DESC LIMIT 5";
                            $totalt = $local->query($sqlt);
                            foreach ($totalt as $key => $rowt) {
                            ?>
                            <li class="list-disc list-inside truncate hover:text-blue-500 hover:underline"><a
                                    href="newdetail.php?id_post=<?php echo $rowt['id_post'] ?>"><?php echo $rowt['title'] ?></a>
                            </li>
                            <?php
                            }
                            ?>
                            <!-- <li class="list-disc list-inside truncate"><a href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a></li>
                        <li class="list-disc list-inside truncate"><a href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a></li>
                        <li class="list-disc list-inside truncate"><a href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a></li>
                        <li class="list-disc list-inside truncate"><a href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a></li> -->
                        </ul>
                    </div>
                    <div class="my-10">
                        <h3 class="my-2 font-bold text-2xl text-black border-l-4 px-5 border-red-500">Tin ngẫu nhiên
                        </h3>
                        <div class="border-b bg-gray-500 h-px my-4 relative">
                            <div class="border-b bg-blue-700 h-1 top-0 left-0 w-8 my-4"></div>
                        </div>
                        <ul>
                            <?php
                            $sqlt = "SELECT * FROM postnews ORDER BY rand() LIMIT 5";
                            $totalt = $local->query($sqlt);
                            foreach ($totalt as $key => $rowt) {
                            ?>
                            <li class="list-disc list-inside truncate hover:text-blue-500 hover:underline"><a
                                    href="newdetail.php?id_post=<?php echo $rowt['id_post'] ?>"><?php echo $rowt['title'] ?></a>
                            </li>
                            <?php
                            }
                            ?>
                            <!-- <li class="list-disc list-inside truncate"><a href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a></li>
                        <li class="list-disc list-inside truncate"><a href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a></li>
                        <li class="list-disc list-inside truncate"><a href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a></li>
                        <li class="list-disc list-inside truncate"><a href="">Hanoitourist đồng hành cùng Lễ phát động Cuộc vận động “Toàn dân rèn luyện thân thể theo gương Bác Hồ vĩ đại” và ngày chạy Olympic vì sức khỏe toàn dân tỉnh Bạc Liêu năm 2021</a></li> -->
                        </ul>
                    </div>
                    <div class="bg-white my-10">
                        <h3 class="my-2 font-bold text-2xl text-black border-l-4 px-5 border-red-500">Chúng tôi</h3>
                        <div class="border-b bg-gray-500 h-px my-4 relative">
                            <div class="border-b bg-blue-700 h-1 top-0 left-0 w-8 my-4"></div>
                        </div>
                        <ul>
                            <li class="py-2"><a class="flex justify-between bg-blue-800 py-3 hover:bg-blue-900"
                                    href="#">
                                    <div class="border-r px-4"><i
                                            class="fab fa-facebook-f text-white text-2xl px-6"></i>
                                    </div>
                                    <p class="text-white uppercase font-bold flex items-center justify-center">1,113,957
                                        <span class="px-5 text-sm">like</span></p>
                                    <i class="fas fa-plus text-white text-2xl px-6"></i>
                                </a></li>
                            <li class="py-2"><a class="flex justify-between bg-indigo-400 hover:bg-indigo-500 py-3 "
                                    href="#">
                                    <div class="border-r px-2"><i class="fab fa-twitter text-white text-2xl px-6"></i>
                                    </div>
                                    <p class="text-white uppercase font-bold flex items-center justify-center pl-8">
                                        441,540
                                        <span class="pl-5 text-sm">followers</span>
                                    </p>
                                    <i class="fas fa-plus text-white text-2xl px-6"></i>
                                </a></li>
                            <li class="py-2"><a class="flex justify-between bg-red-700 py-3 hover:bg-red-600" href="#">
                                    <div class="border-r px-2"><i class="fab fa-youtube text-white text-2xl px-6"></i>
                                    </div>
                                    <p class="text-white uppercase font-bold flex items-center justify-center pl-8">
                                        758,789
                                        <span class="pl-3 text-sm">subscribers</span>
                                    </p>
                                    <i class="fas fa-plus text-white text-2xl px-6"></i>
                                </a></li>
                        </ul>
                    </div>
                    <div class="bg-white">
                        <h3 class="my-2 font-bold text-2xl text-black border-l-4 px-5 border-red-500">Tags</h3>
                        <div class="border-b bg-gray-500 h-px my-4 relative">
                            <div class="border-b bg-blue-700 h-1 top-0 left-0 w-8 my-4"></div>
                        </div>
                        <a href="#"><span class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">ẩm
                                thực</span></a>
                        <a href="#"><span class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">vui
                                chơi</span></a>
                        <a href="#"><span class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">giải
                                trí</span></a>
                        <a href="#"><span class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">mua
                                sắm</span></a>
                        <a href="#"><span class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">tham
                                quan</span></a>
                        <div class="my-1">
                            <a href="#"><span class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">danh
                                    lam</span></a>
                            <a href="#"><span class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">di
                                    tích</span></a>
                            <a href="#"><span
                                    class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">chùa</span></a>
                            <a href="#"><span class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">thắng
                                    cảnh</span></a>
                        </div>
                        <a href="#"><span
                                class="bg-gray-200 text-xs px-2 py-1 hover:bg-blue-500 capitalize">watch</span></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="background4 bg-opacity-10">
        <?php require "footer.php"; ?>
    </footer>
    <script src="./content/js/customer.js"></script>
</body>

</html>