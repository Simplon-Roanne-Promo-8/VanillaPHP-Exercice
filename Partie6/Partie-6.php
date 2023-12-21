<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello PHP</h1>
    <?php 
        if (!empty($_GET['lastname']) && !empty($_GET['firstname'])) {?>
            <p><?= $_GET['lastname']; ?></p>
            <p><?= $_GET['firstname']; ?></p>
    <?php } ?>
</body>
</html>