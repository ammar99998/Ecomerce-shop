<?php
error_reporting(0);

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <!-- here includ bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

<body>


<?php include('navbar.php');?>



<div class="container">
<div class="container-fluid">
  <p class="h1 text-center"> MAY CART</p>
</div>
<table class="table table-responsive caption-top table-bordered table-hover">
  <caption>List of Prodcuts</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">image</th>
      <th scope="col">quantity</th>
      <th scope="col">price</th>
      <th scope="col">total</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
  $i=0;
  ////get all elements from session and display them in table
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
echo '

<form action="delete_product_cart.php" >
<tr>
      <th scope="row">'.++$i.'</th>
      <td>'.$value['name_product'].'</td>
      <td><img src='.$value["image_path"].' class="card-img " width="20" height="50" alt="your do not have image"></td>
      <td>'.$value['quantity'].'</td>
      <td>'.'$'.$value['price'].'</td>
      <td>'.'$'.$value['total_product'].'</td>
      <td><button  name="remove" class="btn btn-danger">Delete</button></td>
      <input type="hidden" id="custId" name="name_product" value=' . $value['name_product'] . '>    
    </tr>
  
    </form>


    ';

        }
    }
echo '<a  href="add_order.php" name="order" class="btn btn-primary">Add Order</a>';

    ?>
    

  </tbody>
</table>
<?php

//here we are caluction the totale for all product in cart
$totale = 0;
foreach ($_SESSION['cart'] as $key => $value) {
    $totale += $value['total_product'];

}
echo '<h2>' . "Total : $" . $totale . '</h2>';



?>

</div>






        <!-- here includ bootstrap javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>