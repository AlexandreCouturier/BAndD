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
            <li><?= $row['hotOrCold']?></li>
            <li><?= $row['sparklingOrStill']?></li>
        </ul>
        <a href="../../../BAndD/router/RouterDrink.php?action=update&idDrink=<?= $row['idDrink']?>">Modifier</a>
        <a href="../../../BAndD/router/RouterDrink.php?action=delete&idDrink=<?= $row['idDrink']?>">Supprimer</a>
</body>
</html>