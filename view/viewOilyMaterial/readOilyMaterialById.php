<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Matière grasse </title>

</head>
<body>

    <ul>
        <li><?=$oilyMaterial["productName"]?></li>
        <li><?=$oilyMaterial["state"]?></li>
        <li><?=$oilyMaterial["origin"]?></li>
        <li><?=$oilyMaterial["processedProduct"]?></li>
        <li><?=$oilyMaterial["ingredientOrConsumable"]?></li>

    </ul>

    <a href="../router/RouterOilyMaterial.php?action=updateOilyMaterial&idOilyMaterial=<?=$oilyMaterial["idOilyMaterial"]?>">Modifier</a>
    <a href="../router/RouterOilyMaterial.php?action=deleteOilyMaterialById&idOilyMaterial=<?=$oilyMaterial["idOilyMaterial"]?>">Supprimer</a>

  
</body>
</html>

