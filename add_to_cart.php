<?php
include('connect_database.php');
$id = $_GET['id'];
$quantity=$_GET['quantity'];

$sql = $database->prepare("SELECT * FROM products where id=$id "); ///varible to select  proudct
$sql->execute();


foreach($sql as $item){
$id_produt= $item["id"] ;
$name_product= $item["name_product"]; 
$description_prodcut=$item["description_prodcut"];
$image_path= $item["image_path"] ;
$price= $item["price"];
}

#######################
 session_start();///start sesstion 
///create session typ of array and add the prouduct on it 

//loads cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();

}



$session_array_id=array_column($_SESSION['cart'],"id_produt");//get id from session

if(in_array($_GET['id'], $session_array_id)){//if the session exists in cart do not add

  
echo '
        <script>

        alert("this product exists in cart!");
        window.location.href="show_products.php";

        </script>

        ';
    
}else{

    $_SESSION['cart'][] = array(

        "id_produt" => $id_produt,
        "name_product" => $name_product,
        "image_path" => $image_path,
        "description_prodcut" => $description_prodcut,
        "quantity" => $quantity,
        "price" => $price,
        "total_product" => $price * $quantity //the total of prouduct with the amount

    );
    header('location: show_products.php');
    exit();
}




//var_dump($_SESSION['cart']);
//session_destroy();



?>


