<?php

    include 'conn.php';
    $id=$_POST['id'];
    $connect->query("DELETE FROM tbl_produk WHERE id=".$id);

?>