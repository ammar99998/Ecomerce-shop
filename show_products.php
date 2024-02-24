
<?php
include('connect_database.php');

	session_start();
	//initialize cart 
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();//the session created as array to add all product
	}
 
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show Product</title>
    <!-- here includ bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

</head>

<body>

<!-- incouding the vabar top of page  -->
<?php include('navbar.php'); ?>


<?php
$sql = $database->prepare("SELECT * FROM products"); ///varible to select all proudcts 
$sql->execute();

echo '<div class="container d-flex justify-content-center mt-50 mb-50">

    <div class="row ">';

foreach ($sql as $result) { //foreach loop to get all products




       echo ' <div class="col-md-4 mt-2 d-flex flex-column justify-content-between">


            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">

                        <img src='.$result['image_path'].'
                            class="card-img " width="200px" height="200px" alt="">


                    </div>
                </div>

                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2">
                            <a href="#" class="text-default mb-2" data-abc="true">
                                '. $result['name_product'] . '</a>
                        </h6>

                        <a href="#" class="text-muted" data-abc="true">Laptops & Notebooks </a>
                    </div>

                    <h3 class="mb-0 font-weight-semibold">' ."$". $result['price'] .'</h3>

   <div>
<i id="p1" class="fa fa-star " onclick="rate("p1")"></i>
<i id="p2" class="fa fa-star " onclick="rate("p2")"></i>
<i id="p3" class="fa fa-star " onclick="rate("p3")"></i>
<i id="p4" class="fa fa-star " onclick="rate("p4")"></i>
<i id="p5" class="fa fa-star " onclick="rate("p5")"></i>


    </div>


                    <div class="text-muted mb-3">'. $result['description_prodcut'] .'</div>

                                <form action="add_to_cart.php" class=" "> 
                              <input type="hidden" id="custId" name="id" value='. $result['id'] .'>    
                                <label for="quantity">Quantity:</label>
                                <input type="number" class="text-center" id="quantity" name="quantity" min="1" max="20" step="1" value="1">

    
                                <button  class="btn btn-primary m-2"><i class="fa fa-cart-plus mr-2"> </i> Add to cart </button>
                                </form>
                                           

                   
                
                
                </div>
            </div>




        </div>';





}




?>










    <!-- here includ bootstrap javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>