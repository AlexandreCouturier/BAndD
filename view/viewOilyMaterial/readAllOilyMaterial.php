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

    <?php foreach($allOilyMaterial as $oilyMaterial):?>

        <ul>
            <li><?=$oilyMaterial["productName"]?></li>
            <li><?=$oilyMaterial["state"]?></li>
            <li><?=$oilyMaterial["origin"]?></li>
            <li><?=$oilyMaterial["processedProduct"]?></li>
            <li><?=$oilyMaterial["ingredientOrConsumable"]?></li>

            <a href="../../router/RouterOilyMaterial.php?action=idOilyMaterial&idOilyMaterial=<?=$oilyMaterial["idOilyMaterial"]?>">Afficher cet aliment</a>
        </ul>
    <?php endforeach?>
   
</body>
</html>