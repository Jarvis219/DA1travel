<?php
include "../../DA1/examples/local.php";
$sqls = "select * from category";
$totals = $local->query($sqls)->fetchAll();
?>
<div class="col-span-3 flex justify-center items-center">
    <a href="#"><img src="./content/image/logo-white.png" alt=""></a>
</div>
<nav class="flex justify-center items-center col-span-6 ml-5">
    <ul class="flex">
        <li class="inline-block px-4 h-full hover:text-black">
            <a class=" font-bold relative group uppercase text-white text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-yellow-500"
                href="index.php">trang chủ
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 rounded-full bg-yellow-500 -mb-1 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear">
                </div>
            </a>
        </li>
        <li class="inline-block px-4 h-full hover:text-black">
            <a class="font-bold relative group uppercase text-white text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-yellow-500"
                href="introduce.php">giới thiệu
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 rounded-full bg-yellow-500 -mb-1 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear">
                </div>
            </a>
        </li>
        <?php
        $category = array();
        $categories[] = $row;
        function showCategories($categories, $parent_id = 0, $char = '')
        {
            // BƯỚC 2.1: LẤY DANH SÁCH CATE CON
            $cate_child = array();
            foreach ($categories as $key => $item) {
                // Nếu là chuyên mục con thì hiển thị
                if ($item['id_parent'] == $parent_id) {
                    $cate_child[] = $item;
                    unset($categories[$key]);
                }
            }
            if ($cate_child) {
                echo '<ul>';
                foreach ($cate_child as $key => $item) {
                    // Hiển thị tiêu đề chuyên mục
                    echo '<li class="inline-block px-4 h-full hover:text-black relative group"> <a class="font-bold uppercase text-white relative group text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-yellow-500"
                    href="tourNoithanh.php">' . $item['name_category'] . '</a>';
                    echo '<div
                    class="absolute  bottom-0 left-0 right-0 h-1 rounded-full bg-yellow-500 mb-1 transform scale-0 group-hover:scale-110 animation duration-300 ease-linear">
                </div>';
                    echo '<ul class="absolute top-0 mt-9 pl-10 left-0 right-0 group-hover:block hidden">
                <li
                    class="bg-blue-200 bg-opacity-50 pl-5 w-40 py-1 font-bold border-b text-white hover:text-yellow-500 ">';
                    // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                    showCategories($categories, $item['id_category'], $char . '|---');
                    echo '</li></ul></li>';
                }
                echo '</ul>';
            }
        }
        showCategories($totals);
        ?>
        <!-- <li class="inline-block px-4 h-full hover:text-black relative group">
            <a class="font-bold uppercase text-white relative group text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-yellow-500"
                href="tourNoithanh.php">
                sadsa</a>
            <div
                class="absolute  bottom-0 left-0 right-0 h-1 rounded-full bg-yellow-500 -mb-1 transform scale-0 group-hover:scale-110 animation duration-300 ease-linear">
            </div>
            <ul class="absolute top-0 mt-9 pl-10 left-0 right-0 group-hover:block hidden">
                <li
                    class="bg-blue-200 bg-opacity-50 pl-5 w-40 py-1 font-bold border-b text-white hover:text-yellow-500 ">
                    <a class="" href="">asd</a>
                </li>
            </ul>


        </li> -->

        <!-- <li class="inline-block px-4 h-full hover:text-black">
            <a class="font-bold relative group uppercase text-white text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-yellow-500"
                href="tourNgoaithanh.php">tour
                ngoại
                thành
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 rounded-full bg-yellow-500 -mb-1 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear">
                </div>
            </a>
        </li> -->
        <li class="inline-block px-4 h-full hover:text-black">
            <a class="font-bold relative group uppercase text-white text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-yellow-500"
                href="customer.php">ưu
                đãi
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 rounded-full bg-yellow-500 -mb-1 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear">
                </div>
            </a>
        </li>
        <li class="inline-block px-4 h-full hover:text-black">
            <a class="font-bold relative group uppercase text-white text-base border-b pb-2 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear hover:text-yellow-500"
                href="contact.php">liên
                hệ
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 rounded-full bg-yellow-500 -mb-1 transform scale-0 group-hover:scale-100 animation duration-300 ease-linear">
                </div>
            </a>
        </li>
    </ul>
</nav>
<div class="col-span-3 ml-5 mt-5">
    <form action="" method="GET" class="flex text-center justify-center items-center py-3 ml-5">
        <div class="bg-white px-4 py-px rounded-full ml-10 flex">
            <button name="btn_search"><i class="fas fa-search text-gray-500"></i></button>
            <input type="text" placeholder="Search..." class="focus:outline-none w-64 text-base py-1 pl-3"
                name="search">
        </div>
    </form>
</div>