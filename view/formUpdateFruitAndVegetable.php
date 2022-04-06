<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un aliment</title>

</head>
<body>

    <form action="../router/RouterFruitAndVegetable.php" method="post">
        
            <input type="hidden" name="idFruitAndVegetable" value="<?= $fruitAndVegetable['idFruitAndVegetable']?>">

            <label for="productName">Nom de l'aliment</label>
            <input type="text" name="productName" id="productName" required>

            <label for="color">Couleur</label>
            <input type="text" name="color" id="color" required>

            <label for="taste">Goût</label>
            <select name="taste" id="taste" >
                <option value="sweet">Sucré</option>
                <option value="sour">Acide</option>
                <option value="salty">Salé</option>
                <option value="bitter">Amer</option>
                <option value="umami">Umami</option>
            </select>

            <label for="coldOrHot">Produit naturel ou transformé :</label>
            <select name="coldOrHot" id="coldOrHot" require >
                <option value="hot">Chaud</option>
                <option value="cold">Froid</option>
                <option value="both">Les deux</option>
            </select>

            <input type="submit" value="Poster votre annonce" name="submit">   

    </form>
</body>
</html>