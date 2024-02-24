<?php
include('connect_database.php');

$id=$_GET['id'];//get the id product from url
$path=$_GET['path'];
//echo 'delete prouduct'. $id. $path;
if(!unlink($path)){
    echo 'you do not have image';
}

$sql = $database->prepare("DELETE FROM products WHERE id=$id"); ///delete the product from databse
$sql->execute();
unlink($path);//delet image from localserve
header('location:show_products.php');
exit();
?>