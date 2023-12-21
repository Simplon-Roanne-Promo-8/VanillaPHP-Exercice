<?php 
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        setcookie('email', $_POST['email'], time()+3600);        
        setcookie('password', $_POST['password'], time()+3600);        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="email" name="email" placeholder="email" id="">
        <input type="password" name="password" placeholder="password" id="">
        <button type="submit">Connexion</button>
    </form>
</body>
</html>