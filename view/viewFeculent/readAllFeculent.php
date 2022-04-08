<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="../../../BAndD/view/viewFeculent/formCreateFeculent.php">AJOUTEZ UN FECULENT</a>

<?php foreach($allFeculent as $Feculent): ?>
        <p><a href="../../../BAndD/router/routerFeculent.php?action=id&id=<?=$Feculent['idFeculent']?>">Afficher cette ID</a></p>
        <ul>
            <li><?= $Feculent["productName"]?></li>
            <li><?= $Feculent["originPlant"]?></li>
            <li><?= $Feculent["transform"]?></li>
            <li><?= $Feculent["cooked"]?></li>
        </ul>
    <?php endforeach ?>
    
</body>
</html>