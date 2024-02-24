<?php 
session_start();
include('connect_database.php');/// including file that can be connection with databse



if(isset($_POST['save'])){
################## this section to get the image name and adding to server and database
$filetype=$_FILES["upload_image"]["type"];
$filename=$_FILES["upload_image"]["name"];
$file=$_FILES["upload_image"]["tmp_name"];

move_uploaded_file($file,"images/". $filename);
$path = "images/". $filename;
###################################
    //get data from input box and put it in variable to use it it sql statment

    
$name_product=$_POST['name_prodcut'];
$description=$_POST['description_prodcut'];
$image_path= $path;
 $user_id=$_SESSION['user_id'];
$price = $_POST['price'];
    //declear variablie to put sql statment 
    $add_data = $database->prepare("INSERT INTO products (name_product,description_prodcut,image_path,user_id,price) VALUE('$name_product','$description','$image_path','$user_id','$price')");
   if($add_data->execute()){///after exectue the sql statment well display one of this massege
echo "
<div class=' alert alert-success text-center' role='alert'>'you are adding new product seccessfly'</div>";

   } else{

echo "<div class='alert alert-danger text-center' role='alert'>'your have error in insert datat'</div>";

   }
}

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
  <p class="fs-1 align-items-center">Add product</p>
</div>
<!-- container include from this from include input item that insert data of product by them -->
<div class="container  ">
<form class=" needs-validation pl-4 " novalidate method="POST" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Name of Prouduct</label>
            <input type="text" class="form-control" name ="name_prodcut" id="validationCustom01" name="product"  placeholder="inert product"  required>
            
        </div>
<br>
        <div class="col-md-4">
        
        <label for="validationCustom02" class="form-label">price of product</label>
        <input type="text" class="form-control" id="validationCustom02"name ="price" placeholder="inert price of prodcut" required>
        
        </div>


            <br>
            <div class="col-md-6">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name ="description_prodcut" placeholder="inert Description of product" rows="3"></textarea>
            <div class="valid-feedback">
            description
            </div>
            </div>
<br>

<!-- upload image show be required and imag by (accept="image/*") type by accept attribute  -->
            <div class="col-md-6">
            <div class="input-group ">
            <label for="validationCustomUsername" class="form-label">Upload image of product</label>
            <div class="input-group has-validation">
                <input type="file" class="form-control" accept="image/*" id="inputGroupFile02" name ="upload_image">
                <label class="input-group-text" for="inputGroupFile02">Upload image</label>
            </div>


            </div>
            </div>
<br>
  <div class="col-12">
    <button class="btn btn-primary" name ="save" type="submit">Add Product</button>
  </div>

</form>
</div>



    <!-- here includ bootstrap javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>