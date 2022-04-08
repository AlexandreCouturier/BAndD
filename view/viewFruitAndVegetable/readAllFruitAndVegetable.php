<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les fruits et légumes enregistrées</title>
</head>
<body>

    <?php foreach($allFruitAndVegetable as $fruitAndVegetable):?>

        <ul>
            <li><?=$fruitAndVegetable["productName"]?></li>
            <li><?=$fruitAndVegetable["color"]?></li>
            <li><?=$fruitAndVegetable["taste"]?></li>
            <li><?=$fruitAndVegetable['coldOrHot']?></li>

            <a href="../router/RouterFruitAndVegetable.php?action=idFruitAndVegetable&idFruitAndVegetable=<?=$fruitAndVegetable["idFruitAndVegetable"]?>">Afficher cet aliment</a>
        </ul>
    <?php endforeach?>
   
</body>
</html>