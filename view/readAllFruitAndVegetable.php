<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les matières grasses enregistrées</title>
</head>
<body>

<a href="./formOilyMaterial.php">Ajouter un aliment</a>

    <?php foreach($allFruitAndVegetable as $fruitAndVegetable):?>

        <ul>
            <li><?=$fruitAndVegetable["productName"]?></li>
            <li><?=$fruitAndVegetable["color"]?></li>
            <li><?=$fruitAndVegetable["taste"]?></li>
            <li><?=$fruitAndVegetable['coldOrHot']?></li>


            <a href="../router/RouterOilyMaterial.php?action=idOilyMaterial&idOilyMaterial=<?=$fruitAndVegetable["idOilyMaterial"]?>">Afficher cet aliment</a>
        </ul>
    <?php endforeach?>
   
</body>
</html>