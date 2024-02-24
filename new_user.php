<?php
include('connect_database.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);//sanitse the variable before insert in database
 $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING); //sanitse the variable before insert in database
 $password = sha1(trim($_POST['password']));
 $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING); //sanitse the variable before insert in database
 $birthdate = filter_var($_POST['birthdate'], FILTER_SANITIZE_STRING); //sanitse the variable before insert in database



if(isset($_POST['register'])){

     $add_data = $database->prepare("INSERT INTO users (username,email,password,country,birthdate) VALUE('$username','$email','$password','$country','$birthdate')");
   if($add_data->execute()){
echo "
<div class=' alert alert-success text-center' role='alert'>'you are registrain  seccessfly'</div>";
        $showDat = $database->prepare("SELECT * FROM users where username = :username AND password=:password ");
        //we use bindparam to securtiy.
        $showDat->bindparam("username", $username);
        $showDat->bindparam("password", $password);

        $showDat->execute();
        ///this command to show error ----> var_dump($showDat->errorInfo());
        $count = $showDat->rowCount(); //to return the number row 
        $showDat = $showDat->fetch(PDO::FETCH_ASSOC); //to fetch one row from sql quiry

if ($showDat['type'] == "user") {
            $_SESSION['user'] = $_POST["username"];
            $_SESSION['login'] = true;
            header('location:show_products.php');
           
        }
   } else{

echo "<div class='alert alert-danger text-center' role='alert'>'your have error in insert datat'</div>";

   }
}

}

?>