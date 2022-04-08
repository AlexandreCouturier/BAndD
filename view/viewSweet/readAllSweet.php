<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les matières grasses enregistrées</title>
</head>
<body>


    <?php foreach($allSweet as $sweet):?>

        <ul>
            <li><?=$sweet["productName"]?></li>
            <li><?=$sweet["origin"]?></li>
            <li><?=$sweet["processedProduct"]?></li>
            <li><?=$sweet["ingredientOrConsumable"]?></li>
            <li><?=$sweet["coldOrHot"]?></li>

            <a href="../router/RouterSweet.php?action=idSweet&idSweet=<?=$sweet["idSweet"]?>">Afficher cet aliment</a>
        </ul>
        
    <?php endforeach?>
   
</body>
</html>