<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php foreach($allfeculent as $feculent): ?>
        <p><a href="../../router/routerFeculent.php?action=id&id=<?= $feculent["idFeculent"] ?>">Afficher les feculent</a></p>
        <ul>
            <li><?= $feculent["productName"]?></li>
            <li><?= $feculent["originPlant"]?></li>
            <li><?= $feculent["transform"]?></li>
            <li><?= $feculent["cooked"]?></li>
        </ul>

    <?php endforeach ?>
</body>
</html>