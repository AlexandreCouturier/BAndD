
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feculent</title>
</head>
<body>
<a href="../../router/routerFeculent.php">les feculentes</a>

    <ul>
        <li><?=$feculent["productName"]?></li>
        <li><?=$feculent["typeOfMeat"]?></li>
        <li><?=$feculent["animal"]?></li>
        <li><?=$feculent["disappearance"]?></li>
        <a href="../../router/routerFeculent.php?action=update&id=<?=$feculent["idfeculent"]?>">Modifier</a>
        <a href="../../router/routerFeculent.php?action=delete&id=<?=$feculent["idfeculent"]?>">Supprimer</a>
    </ul>
</body>
</html>
