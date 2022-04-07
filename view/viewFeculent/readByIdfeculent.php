
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feculent</title>
</head>
<body>
<a href="../../../BAndD/router/routerFeculent.php">les Viande,Poisson</a>

    <ul>
        <li><?=$Feculent["productName"]?></li>
        <li><?=$Feculent["originPlant"]?></li>
        <li><?=$Feculent["transform"]?></li>
        <li><?=$Feculent["cooked"]?></li>
        <a href="../../../BAndD/router/routerFeculent.php?action=update&id=<?=$Feculent["idFeculent"]?>">Modifier</a>
        <a href="../../../BAndD/router/routerFeculent.php?action=delete&id=<?=$Feculent["idFeculent"]?>">Supprimer</a>
    </ul>
</body>
</html>
