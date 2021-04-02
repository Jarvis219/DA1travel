<?php
include "../../examples/local.php";
$sql = "select * from category";
$total = $local->query($sql)->fetchAll();
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
            echo '<li>' . $item['name_category'];

            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories, $item['id_category'], $char . '|---');
            echo '</li>';
        }
        echo '</ul>';
    }
}
?>
<?php showCategories($total); ?>