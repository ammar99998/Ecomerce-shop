<?php
include('connect_database.php');

session_start();
$number_resutl_in_page = 5; //count of the elements per page
$numberofresults = $database->prepare("SELECT * FROM orders");
$numberofresults->execute();

$numberofresults = $numberofresults->rowCount(); ///number of result in databse



$totalpages = ceil($numberofresults / $number_resutl_in_page);

if (!isset($_GET['page'])) { //if the variable is not exists create it 
  $page = 1;
} elseif (isset($_GET['page'])) { ///if the variable is exists gave same value
  $page = $_GET['page'];
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>show order</title>
  <!-- here includ bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

  <!-- incouding the vabar top of page  -->
  <?php include('navbar.php'); ?>

  <div class="container-fluid">
    <p class="h1 text-center">All Orders</p>
  </div>
  <div class="container text-align-center " style=" text-align: center">
    <?php

    echo '<table class="table table-responsive caption-top table-bordered table-hover">
        <caption>List of order</caption>
        <thead>
              <tr >
                <th scope="col " >#</th>
                <th scope="col" >name</th>
                <th scope="col">quantity</th>
                <th scope="col">price</th>
                <th scope="col">total</th>
                <th scope="col">user_id</th>
                <th scope="col">Date of sales</th>

              </tr>
        </thead>';
    ?>


    <?php

    $i = 0;
    // $sql = $database->prepare("SELECT * FROM orders"); ///varible to select all proudcts 
    // $sql->execute();
    // $results = $sql->fetchAll(PDO::FETCH_ASSOC);
    $results = $database->prepare("SELECT * FROM orders  LIMIT " . $number_resutl_in_page . " OFFSET " . $page * $number_resutl_in_page);
    $results->execute();
    /////create the links 
    // foreach ($results as $result) {
    //   echo '<div>' . $result['name_product'] . '</div>';
    // }
    

    foreach ($results as $result) { //foreach loop to get all orders
    

      echo ' <tbody>

                <tr>
                    <th scope="row">' . ++$i . '</th>
                    <td>' . $result['name_product'] . '</td>
                    <td>' . $result['quantity'] . '</td>
                    <td>' . '$' . $result['price'] . '</td>
                    <td>' . '$' . $result['total'] . '</td>
                    <td>' . $result['user_id'] . '</td>
                    <td>' . $result['created_at'] . '</td>
                    </tr>
          </tbody> ';


    }
    echo ' </table>';








    echo '  <ul class="pagination ">';
    //this for to links pagination
    for ($count = 1; $count < $totalpages; ++$count) {
      echo '<li class="page-item"><a class="page-link" href="show_order.php?page=' . $count . '">' . $count . '</a></li>';

    }

    echo '</ul>';
    ?>




  </div>






  <!-- here includ bootstrap javascript  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>