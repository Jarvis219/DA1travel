<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-span-4 px-10">
        <h3 class="my-4 text-xl font-bold">Nhận xét</h3>
        <div class="overflow-auto" style="height: 500px;">
            <?php
            $sqlCMT = "select * from comment join user on user.username=comment.username where id_tour = $id";
            $showCMT = $local->query($sqlCMT);
            foreach ($showCMT as $cmt) {
            ?>
            <div class="grid grid-cols-8 mb-5 ">
                <div class="col-span-1 mx-auto text-center">
                    <img class="rounded-full" width="80" style="height: 80px;" src="./assets/img/<?php if ($cmt['user_image'] == "") {
                                                                                                            echo 'user-vector-png.png';
                                                                                                        } else {
                                                                                                            echo $cmt['user_image'];
                                                                                                        }
                                                                                                        ?>" alt="">
                    <span class=" "><?php echo $cmt['fullname'] ?></span>
                </div>
                <div class="col-span-7 py-1">
                    <div class="bg-white py-1 px-5">
                        <div class="flex">
                            <div class="">
                                <?php
                                    $evalua = $cmt['evaluate'];
                                    for ($i = 0; $i < $evalua; $i++) {
                                        echo '  <i class="fas fa-star text-yellow-300"></i>';
                                    }
                                    ?>
                            </div>
                        </div>
                        <p class="py-2"><?php echo $cmt['content_comment'] ?></p>
                        <!-- <a href="" class="text-blue-500">Trả lời</a> -->
                        <span class="px-2 text-sm "><i
                                class="fas fa-user-clock px-1"></i><?php echo $cmt['create_at'] ?></span>
                    </div>
                    <!-- <div class="bg-white ml-2 mt-2 px-5 py-2">
                                <div class="flex items-center">
                                    <img class="w-10" src="./content/image/user.png" alt="">
                                    <span class="px-5">Tên admin</span>
                                    <span class="bg-yellow-400 px-1">Quản trị viên</span>
                                </div>
                                <p class="py-2">Cảm ơn bạn đã chọn tour của chúng tôi</p>
                                <a href="" class="text-blue-500">Trả lời</a>
                                <span class="px-2 text-sm "><i class="fas fa-user-clock px-1"></i>25/03/2021</span>
                            </div> -->
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>