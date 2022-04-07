<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un aliment</title>

</head>
<body>

    <form action="../../router/RouterOilyMaterial.php" method="post">
        
            <input type="hidden" name="idOilyMaterial" value="<?=$oilyMaterial['idOilyMaterial']?>">

            <label for="productName">Nom de l'aliment</label>
            <input type="text" name="productName" id="productName" value=<?=$oilyMaterial['productName']?> >

            <label for="state">Etat</label>
            <select name="state" id="state">
                <option value="<?=$oilyMaterial["state"]?>" selected><?=$oilyMaterial["state"]?></option>
                <option value="gaseous">Gazeux</option>
                <option value="liquid">Liquide</option>
                <option value="solid">Solide</option>
            </select>

            <label for="origin">Provenance de l'aliment</label>
            <input type="text" name="origin" id="origin" value="<?=$oilyMaterial["origin"]?>" >

            <label for="processedProduct">Produit naturel ou transformé :</label>
            <select name="processedProduct" id="processedProduct">
                <option value="<?=$oilyMaterial['processedProduct']?>"><?=$oilyMaterial['processedProduct']?></option>
                <option value="natural">Naturel</option>
                <option value="transformed">Transformé</option>
            </select>

            <label for="ingredientOrConsumable">Produit consommable directement ou pour servir d'ingrédient :</label>
            <select name="ingredientOrConsumable" id="ingredientOrConsumable" required>
                <option value="consumable">Consommable</option>
                <option value="ingredient">Ingrédient</option>
                <option value="both">Peut être les deux à la fois</option>
            </select>

            <input type="submit" value="Poster votre annonce" name="submit">   

    </form>
</body>
</html>