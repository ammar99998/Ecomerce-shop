


<?php

###################this code TO pagination the resutl but i don't use this page but the code exists in show_order
include('connect_database.php');

session_start();
$number_resutl_in_page=3;//number of result we want show it the page

$numberofresults = $database->prepare("SELECT * FROM orders");
$numberofresults->execute();

$numberofresults= $numberofresults->rowCount();///number of result in databse



 $totalpages= ceil($numberofresults / $number_resutl_in_page);

if(!isset($_GET['page'])){//if the variable is not exists create it 
    $page=1;
}elseif(isset($_GET['page'])){///if the variable is exists gave same value
$page=$_GET['page'];
}

  for($count=1;$count< $totalpages;++$count) {
     echo '<a href="pagination.php?page='. $count.'">'.$count.'</a>';
   
  }

$results = $database->prepare("SELECT * FROM orders  LIMIT ". $number_resutl_in_page." OFFSET ". $page* $number_resutl_in_page);
$results->execute();
/////create the links 
foreach($results as $result){
echo'<div>'.$result['name_product'].'</div>';
}


?>