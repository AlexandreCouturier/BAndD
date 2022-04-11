<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php echo "dans le fichier dairyProductsAll.php" ?>

<body>
    <a href="../../../BAndD/view/viewDairyProducts/formDairyProducts.php">Formulaire DairyProducts</a>
    <a href="../../../BAndD/view/searchByCategory/searchByCategory.php">Choisir une catégorie</a>
    <?php foreach ($allRows as $row) : ?>
        <p>Votre boisson est : </p>
        <?php echo "dhd"; ?>
        <?= $row["productName"]?> <br>
        <?= $row["animalOrPlant"]?> <br>
        <?= $row["state"]?> <br>
        <?= $row["fermentation"]?> <br>
        <a href="../../../BAndD/router/RouterDairyProducts.php?action=id&idDairyProducts=<?= $row['idDairyProducts'] ?>">Afficher Produit</a>

    <?php endforeach ?>
    <?php echo "dddd"; ?>
</body>

</html>