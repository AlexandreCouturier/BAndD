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
    <form action="../../router/RouterDairyProducts.php" method="post">
        <label for="productName">Quelle est le nom du produit laitier :</label>
            <input type="text" name="productName" id="">
            <label for="animalOrPlant">De quel animal ou plante proviens le produit laitier :</label>
            <input type="text" name="animalOrPlant" id="">
        <p>Quel est l'état de co :</p>
            <label for="state">Chaude</label>
                <input type="radio" name="state" id="" value="chaude">
            <label for="state">Froide</label>
                <input type="radio" name="state" id="" value="froide">
            <label for="state">Les deux</label>
                <input type="radio" name="state" id="" value="deux">
        <p>La boisson est tel plate ou gazeuse : </p>
            <label for="sparklingOrStill">Plate</label>
                <input type="radio" name="sparklingOrStill" id="" value="plate">
            <label for="sparklingOrStill">Gazeuse</label>
                <input type="radio" name="sparklingOrStill" id="" value="gazeuse">

                <input type="submit" value="Envoyer" name="submit">
    </form>
</body>
</html>