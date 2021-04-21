<?php
include "../../examples/local.php";
$status = $_POST['statuss'];
$id = $_POST['id'];
$sql = "UPDATE cart SET cart_status = '$status' WHERE id_cart LIKE '$id'";
// echo $sql;
$total = $local->prepare($sql);
if ($total->execute()) {
    echo "update ok";
} else {
    echo "update false";
}
// echo $_POST['statuss'];