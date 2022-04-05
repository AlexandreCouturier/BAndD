
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feculent Forme</title>

</head>
<body>
<a href="../../router/routerFeculent.php?action=all">les Feculentes</a>


    <form action="../../router/routerFeculent.php" method="post">

        <input type="hidden" name="id" value="<?=$Feculent['idFeculent']?>">

        <label for = "productName"> name </label>
        <input type = "productName" name = "productName" id = "productName" required value="<?=$Feculent['productName']?>"> <br>

        <label for = "originPlant"> Votre Feculent:  </label> 
        <input type = "text" name = "originPlant" id = "originPlant" value="<?=$Feculent['originPlant']?>" required> <br>

        <label for = "transform"> Code postale:  </label> 
        <input type = "productName" name = "transform" id = "transform" value="<?=$Feculent['transform']?>" required> <br>

        <label for = "cooked"> Ville </label>
        <input type = "texte" name = "cooked" id = "cooked" value="<?=$Feculent['cooked']?>"> <br>

        <label for="Envoyer"></label>
        <input type="submit" name="submit"  value="Envoyer">

    </form>
</body>
</html>