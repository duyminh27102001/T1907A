<?php
require_once ('dbhelp.php');
$fullname = $image = $price ='';

if(isset($_POST)){
    $s_id ='';
    if(isset($_POST['fullname'])){
        $fullname = $_POST['fullname'];
    }
    if(isset($_POST['image'])){
        $image = $_POST['image'];
    }
    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }


if ($s_id != '') {
        //update
        $sql = "update product set fullname = '$fullname', images = '$image', price = '$price' where id = " .$s_id;
    } else {
        //insert
        $sql = "insert into product(fullname, images, price) value ('$fullname', '$image', '$price')";
    }
execute($sql);
header('Location: index.php');
die();
} 
$id = '';
if (isset($_GET['id'])) {
    $id          = $_GET['id'];
    $sql         = 'select * from product where id = '.$id;
    $productList = executeResult($sql);
    if ($productList != null && count($productList) > 0) {
        $product        = $productList[0];
        $fullname = $product['fullname'];
        $image     = $product['images'];
        $price = $product['price'];
    } else {
        $id = '';
    }
}
?>