
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feculent Forme</title>

</head>
<body>
<a href="../../../BAndD/route/routerFeculent.php?action=all">tout les feculent</a>


    <form action="../../../BAndD/router/routerFeculent.php" method="post">

        <input type="hidden" name="id" value="<?=$Feculent['idFeculent']?>">

        <label for = "productName"> Nom </label>
        <input type = "text" name = "productName" id = "productName"  value="<?=$Feculent['productName']?>"> <br>

        <label for = "originPlant"> origin de la plante </label> 
        <input type = "text" name = "originPlant" id = "originPlant" value="<?=$Feculent['originPlant']?>" > <br>

        <p>Transformé</p>
        <div>
        <label for = "transform">oui</label> 
        <input type = "radio" name = "transform" id = "transform" value="<?=$Feculent['transform']?>" > <br>
        </div>

        <div>
        <label for = "transform">non</label> 
        <input type = "radio" name = "transform" id = "transform" value="<?=$Feculent['transform']?>" > <br>
        </div>


        <p>Préparer</p>
        <div>
        <label for = "cooked">oui</label>
        <input type = "radio" name = "cooked" id = "cooked" value="<?=$Feculent['cooked']?>" > <br>
        </div>
        <div>
        <label for = "cooked">non</label>
        <input type = "radio" name = "cooked" id = "cooked" value="<?=$Feculent['cooked']?>" > <br>
        </div>

        <label for="Envoyer"></label>
        <input type="submit" name="submit"  value="Envoyer">

    </form>
</body>
</html>