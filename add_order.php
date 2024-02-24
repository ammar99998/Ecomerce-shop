<?php
include('connect_database.php');
session_start();




///this code usering adding order to database
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {

     $name_product = $value['name_product'];
     $quantity = $value['quantity'];
     $price = $value['price'];
     $total = $value['total_product'];
     $user_id = $_SESSION['user_id'];
    $add_order = $database->prepare("INSERT INTO orders (name_product,quantity,price,total,user_id) 
        VALUE('$name_product','$quantity','$price','$total','$user_id')");
    $add_order->execute();


 
    }
}


unset($_SESSION['cart']);
header('location: show_products.php');
exit();







?>