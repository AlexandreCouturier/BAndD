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
<a href="../view/viewDairyProducts/formDairyProducts.php">Formulaire DairyProducts</a>
    <?php foreach($allRows as $row): ?>
    <p>Votre boisson est : </p>
        <?= $row["productName"]?> <br>
        <?= $row["animalOrPlant"]?> <br>
        <?= $row["state"]?> <br>
        <?= $row["fermentation"]?> <br>
        <a href="../router/RouterDrink.php?action=id&idDairyProducts=<?= $row['idDairyProducts']?>">Afficher Produit</a>

    <?php endforeach ?>
</body>
</html>