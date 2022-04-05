<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php echo "dans le fichier test.php" ?>
<body>
<a href="../view/viewDrink/formDrink.php">Formulaire Drinks</a>
    <?php foreach($allRows as $row): ?>
    <p>Votre boisson est : </p>
        <?= $row["productName"]?> <br>
        <?= $row["hotOrCold"]?> <br>
        <?= $row["sparklingOrStill"]?> <br>
        
    <?php endforeach ?>
</body>
</html>