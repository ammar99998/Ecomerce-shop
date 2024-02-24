<?php

####### this code execute when user click on  logout
session_start();///we should put this methode 


header('Location:login.php');
 if (isset($_POST['logout'])) {
    session_unset();////delete alla session 

     header('Location:index.php');///return to the login page
}



?>