<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>La description de la boisson :</p>
        <ul>
            <li><?= $row['productName']?></li>
            <li><?= $row['animalOrPlant']?></li>
            <li><?= $row['state']?></li>
            <li><?= $row['fermentation']?></li>
        </ul>
        <a href="../../../BAndD/router/RouterDairyProducts.php?action=update&idDairyProducts=<?= $row['idDairyProducts']?>">Modifier</a>
        <a href="../../../BAndD/router/RouterDairyProducts.php?action=delete&idDairyProducts=<?= $row['idDairyProducts']?>">Supprimer</a>
</body>
</html>