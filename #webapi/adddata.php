<?php

    include 'conn.php';

    $itemcode = $_POST['itemcode'];
    $itemname = $_POST['itemname'];
    $price    = $_POST['price'];
    $stock    = $_POST['stock'];

    $connect->query("INSERT INTO tbl_produk (item_code,item_name,price,stock) VALUES ('".$itemcode."','".$itemname."','".$price."','".$stock."') ");

?>