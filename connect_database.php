<?php
$username = "root";
$password = "";
//this object well connect with databse and we shoud know name of databse and type of databse and username and password
$database = new PDO("mysql:host=localhost;dbname=ecomerce-shop;charset=utf8;", $username, $password);


?>