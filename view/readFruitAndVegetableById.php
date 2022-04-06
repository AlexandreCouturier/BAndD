<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fruit et légume </title>

</head>
<body>

    <ul>
        <li><?=$fruitAndVegetable["productName"]?></li>
        <li><?=$fruitAndVegetable["color"]?></li>
        <li><?=$fruitAndVegetable["taste"]?></li>
        <li><?=$fruitAndVegetable['coldOrHot']?></li>
    </ul>

    <a href="../router/RouterFruitAndVegetable.php?action=updateFruitAndVegetable&idFruitAndVegetable=<?=$fruitAndVegetable["idFruitAndVegetable"]?>">Modifier</a>
    <a href="../router/RouterFruitAndVegetable.php?action=deleteFruitAndVegetableById&idFruitAndVegetable=<?=$fruitAndVegetable["idFruitAndVegetable"]?>">Supprimer</a>

  
</body>
</html>

