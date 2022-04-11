<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../../BAndD/router/RouterDairyProducts.php" method="post">
        <input type="hidden" name="idDairyProducts" value="<?= $row['idDairyProducts']?>">
        <label for="productName">Quelle est le nom du produit laitier :</label>
            <input type="text" name="productName" id="" value="<?= $row['productName']?>">
            <label for="animalOrPlant">De quel animal ou plante proviens le produit laitier :</label>
            <input type="text" name="animalOrPlant" id="" value="<?= $row['animalOrPlant']?>">
        <p>Quel est l'état de composition:</p>
            <label for="state">Liquide</label>
                <input type="radio" name="state" id="" value="liquide">
            <label for="state">Solide</label>
                <input type="radio" name="state" id="" value="solide">
            <label for="state">Gazeux</label>
                <input type="radio" name="state" id="" value="gazeux">
                <label for="fermentation">Le temps de fermentation en jours :</label>
            <input type="number" name="fermentation" id="" value="<?= $row['fermentation']?>">

                <input type="submit" value="Envoyer" name="submit">
    </form>
</body>
</html>