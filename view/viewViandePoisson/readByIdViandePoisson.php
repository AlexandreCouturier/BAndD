
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViandePoisson</title>
</head>
<body>
<a href="../../router/routerViandePoisson.php">les ViandePoissones</a>

    <ul>
        <li><?=$ViandePoisson["productName"]?></li>
        <li><?=$ViandePoisson["typeOfMeat"]?></li>
        <li><?=$ViandePoisson["animal"]?></li>
        <li><?=$ViandePoisson["disappearance"]?></li>
        <a href="../../router/routerViandePoisson.php?action=update&id=<?=$ViandePoisson["idViandePoisson"]?>">Modifier</a>
        <a href="../../router/routerViandePoisson.php?action=delete&id=<?=$ViandePoisson["idViandePoisson"]?>">Supprimer</a>
    </ul>
</body>
</html>
