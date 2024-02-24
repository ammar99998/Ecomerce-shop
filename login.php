<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>

    <div class="login">
        <?php
        if (isset($_SESSION['error'])) {

            echo '<p style="color:red; text-align:center;">' . $_SESSION['error'] . '</p> ';

            unset($_SESSION['error']);

        }

        ?>
        <h1>Login</h1>


        <form action="check_user.php" method="POST">

            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username">
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password">
            <input type="submit" value="Login">
        </form>
        <div> <a href="registration.php" style=" display: flex;
                            justify-content: center;
                            padding: 10px;
                            font-weight: bold;
                            text-decoration: none;
                            color: red;">registration</a>
        </div>

    </div>


</body>

</html>