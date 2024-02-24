<?php

session_start();
///delete item from cart 
if(isset($_GET['remove'])){
foreach($_SESSION['cart'] as $key => $value){
 if($value['name_product'] === $_GET['name_product']){
   unset($_SESSION['cart'][$key] );//this function delete the item from session if same name_product

 }
}

    
}
header('location:show_cart.php');

exit();
?>