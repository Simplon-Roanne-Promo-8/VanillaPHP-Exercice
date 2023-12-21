<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // echo '<pre>';
        // print_r($_SERVER);
        // echo '<pre>';
    ?>
        <!--<p><?= $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p><?= $_SERVER['SERVER_ADDR'];?></p>
        <p><?= $_SERVER['SERVER_NAME'];?></p>-->

        <?php 
            $_SESSION["firstname"] = "Hamza";
            $_SESSION["lastname"] = "Karfa";
            $_SESSION["age"] = 26;
        ?>
        <a href="./user.php">Aller sur la page user</a>
        <a href="./logout.php">Deconnexion</a>
    </body>
</html>