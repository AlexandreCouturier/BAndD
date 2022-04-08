<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../../router/RouterSweet.php" method="POST">

        <label for="productName">Nom de l'aliment</label>
        <input type="text" name="productName" id="productName" required>

        <label for="origin">Provenance</label>
        <select name="origin" id="origin" required>
            <option value="animal">Animal</option>
            <option value="vegetal">Végétale</option>
        </select>

        <label for="processedProduct">Produit naturel ou transformé :</label>
        <select name="processedProduct" id="processedProduct" required>
            <option value="natural">Naturel</option>
            <option value="transformed">Transformé</option>
        </select>

        <label for="ingredientOrConsumable">Produit consommable directement ou pour servir d'ingrédient :</label>
        <select name="ingredientOrConsumable" id="ingredientOrConsumable" required>
            <option value="consumable">Consommable</option>
            <option value="ingredient">Ingrédient</option>
            <option value="both">Peut être les deux à la fois</option>
        </select>

        <label for="coldOrHot">Consommable chaud ou froid :</label>
        <select name="coldOrHot" id="coldOrHot" required>
            <option value="hot">Chaud</option>
            <option value="cold">Froid</option>
            <option value="both">Les deux</option>
        </select>

        <input type="submit" value="Publier votre aliment" name="submit">     

    </form>

</body>
</html>