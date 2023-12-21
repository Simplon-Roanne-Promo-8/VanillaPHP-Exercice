<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo '<pre>';
    print_r($_FILES['file']);
    echo '<pre>';
    if (!empty($_FILES['file'])) {
        if ($_FILES['file']['type'] === 'application/pdf') {
            echo 'Merci de la part de Jorge';
            echo $_FILES['file']['name'];
        }else{
            echo 'ce n\'est pas un pdf';
        }
    }

    if (
        !empty($_POST['lastname']) &&
        !empty($_POST['firstname']) &&
        !empty($_POST['civilite'])
    ) { ?>
        <p class="red"><?= $_POST['civilite']; ?></p>
        <p class="red"><?= $_POST['lastname']; ?></p>
        <p class="red"><?= $_POST['firstname']; ?></p>
    <?php }else{ ?>
        <form action="./index.php" method="post" enctype="multipart/form-data">
            <select name="civilite" id="">
                <option value="monsieur">monsieur</option>
                <option value="madame">madame</option>
            </select>
            <input type="text" name="firstname">
            <input type="text" name="lastname">
            <input type="file" name="file">
            <button type="submit">Envoyer</button>
        </form>
    <?php } ?>



</body>

</html>