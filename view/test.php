<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../view/viewDrink/formDrink.php">Formulaire Drinks</a>
<a href="../../BAndD/view/searchByCategory/searchByCategory.php">Choisir une catégorie</a>
    <?php foreach($allRows as $row): ?>
    <p>Votre boisson est : </p>
        <?= $row["productName"]?> <br>
        <?= $row["hotOrCold"]?> <br>
        <?= $row["sparklingOrStill"]?> <br>
        <a href="../router/RouterDrink.php?action=id&idDrink=<?= $row['idDrink']?>">Afficher Produit</a>

    <?php endforeach ?>
</body>
</html>