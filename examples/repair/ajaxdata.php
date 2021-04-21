<?php
include "../../examples/local.php";
$status = $_POST['statuss'];
$id = $_POST['id'];
$sql = "update contact set contact_status = '$status' where id_contact like '$id'";
$total = $local->prepare($sql);
if ($total->execute()) {
    echo "update ok";
} else {
    echo "update false";
}
// echo $_POST['id'];