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
    <form action="../../router/RouterDrink.php" method="post">
        <input type="hidden" name="" value="<?= $row['idDrink']?>">
        <label for="productName">Quelle est le nom de la boisson :</label>
            <input type="text" name="productName" id="" value="<?= $row['productName']?>">
        <p>La boisson est tel chaude ou froide :</p>
            <label for="hotOrCold">Chaude</label>
                <input type="radio" name="hotOrCold" id="" value="chaude">
            <label for="hotOrCold">Froide</label>
                <input type="radio" name="hotOrCold" id="" value="froide">
            <label for="hotOrCold">Les deux</label>
                <input type="radio" name="hotOrCold" id="" value="froide" value="deux">
        <p>La boisson est tel plate ou gazeuse : </p>
            <label for="sparklingOrStill">Plate</label>
                <input type="radio" name="sparklingOrStill" id="" value="plate">
            <label for="sparklingOrStill">Gazeuse</label>
                <input type="radio" name="sparklingOrStill" id="" value="gazeuse">

                <input type="submit" value="Envoyer" name="submit">
    </form>
</body>
</html>