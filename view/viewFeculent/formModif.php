
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feculent Forme</title>

</head>
<body>
<a href="../../../BAndD/router/routerFeculent.php?action=all">toute les feculent</a>


    <form action="../../../BAndD/router/routerFeculent.php" method="post">

        <input type="hidden" name="id" value="<?=$Feculent['idFeculent']?>">

        <label for = "productName"> name </label>
        <input type = "text" name = "productName" id = "productName" required value="<?=$Feculent['productName']?>"> <br>

        <label for = "originPlant"> origin de la plante </label> 
        <input type = "text" name = "originPlant" id = "originPlant" value="<?=$Feculent['originPlant']?>" required> <br>

        <label for = "transform"> transforme </label> 
        <input type = "text" name = "transform" id = "transform" value="<?=$Feculent['transform']?>" required> <br>

        <label for = "cooked"> preparé ou pas</label>
        <input type = "text" name = "cooked" id = "cooked" value="<?=$Feculent['cooked']?>"> <br>

        <label for="Envoyer"></label>
        <input type="submit" name="submit"  value="Envoyer">

    </form>
</body>
</html>