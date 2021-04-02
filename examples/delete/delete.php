<?php
include "../../examples/local.php";
if (isset($_GET['id_tour'])) {
    $id = $_GET['id_tour'];
    $sql = "delete from tour where id_tour = $id";
    $total = $local->exec($sql);
    header('location:../../examples/tour.php');
}
if (isset($_GET['id_category'])) {
    $id = $_GET['id_category'];
    $sql = "delete from category where id_category = $id";
    $total = $local->exec($sql);
    header('location:../../examples/category.php');
}