<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hello PHP</h1>
    <div class="container">

        <?php 
        if (!empty($_POST['lastname']) && 
        !empty($_POST['firstname']) &&
        !empty($_POST['civilite'])
        ) {?>
            <p class="red"><?= $_POST['civilite']; ?></p>
            <p class="red"><?= $_POST['lastname']; ?></p>
            <p class="red"><?= $_POST['firstname']; ?></p>
            <?php } ?>
    </div>
</body>
</html>