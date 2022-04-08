<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>

        <li><?=$sweet["productName"]?></li>
        <li><?=$sweet["origin"]?></li>
        <li><?=$sweet["processedProduct"]?></li>
        <li><?=$sweet["ingredientOrConsumable"]?></li>
        <li><?=$sweet["coldOrHot"]?></li>

    </ul>

    <a href="../router/RouterSweet.php?action=updateSweet&idSweet=<?=$sweet["idSweet"]?>">Modifier</a>
    <a href="../router/RouterSweet.php?action=deleteSweetById&idSweet=<?=$sweet["idSweet"]?>">Supprimer</a>
    
</body>
</html>