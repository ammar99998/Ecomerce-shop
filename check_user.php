<?php
session_start();
//include the connection from connect page.
require_once("connect_database.php");

//test the connection if connected or not.
if ($database == false) {
    echo "error database";

    //die("your can not connect to database");
} else {
    echo 'connecting';
}


if (empty($_POST['username'])) { //if we don not send user name save error in session and back to log in page and display it
    $_SESSION['error'] = '* Erorr : you user name is empty  !<br>';

    header('location:login.php');

}
if (empty($_POST['password'])) { //if we don not send password save error in session and back to log in page and display it

    $_SESSION['error'] = $_SESSION['error'] . '* Erorr : you password is empty  !<br>';

    header('location:login.php');

}




//testing if we have post or not and including password and user in session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = sha1(trim($_POST['password'])); //encryption the password and delet the empty by trim method.

    //get sql statment and include it in conn bject then put them in $showData varibable.
    $showDat = $database->prepare("SELECT * FROM users where username = :username AND password=:password ");
    //we use bindparam to securtiy.
    $showDat->bindparam("username", $username);
    $showDat->bindparam("password", $password);

    $showDat->execute();
    ///this command to show error ----> var_dump($showDat->errorInfo());
    $count = $showDat->rowCount(); //to return the number row 
    $showDat = $showDat->fetch(PDO::FETCH_ASSOC); //to fetch one row from sql quairy

    ///check if the result return row or not
    if ($count > 0) {
        if ($showDat['type'] == "admin") {
            $_SESSION['user'] = $_POST["username"];
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $showDat['id']; //save user id
            header('location:show_products_admin.php'); //redirection the page to admin home page.

        }

        if ($showDat['type'] == "user") {
            $_SESSION['user'] = $_POST["username"];
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $showDat['id'];
            header('location:show_products.php');
            exit();
        }


    } else {
        $_SESSION['error'] = $_SESSION['error'] . '* Username or Password is incorrect ';
        ///  echo "<p style='color:red; text-align:center;'>Username or Password is incorrect </p> ";

        header('location:login.php');
        exit();
    }


}

?>