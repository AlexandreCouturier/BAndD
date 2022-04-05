
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViandePoisson Forme</title>

</head>
<body>
<a href="../../router/routerViandePoisson.php?action=all">les ViandePoissones</a>


    <form action="../../router/routerViandePoisson.php" method="post">

        <input type="hidden" name="id" value="<?=$ViandePoisson['idViandePoisson']?>">

        <label for = "productName"> name </label>
        <input type = "productName" name = "productName" id = "productName" required value="<?=$ViandePoisson['productName']?>"> <br>

        <label for = "typeOfMeat"> Votre ViandePoisson:  </label> 
        <input type = "text" name = "typeOfMeat" id = "typeOfMeat" value="<?=$ViandePoisson['typeOfMeat']?>" required> <br>

        <label for = "animal"> Code postale:  </label> 
        <input type = "productName" name = "animal" id = "animal" value="<?=$ViandePoisson['animal']?>" required> <br>

        <label for = "disappearance"> Ville </label>
        <input type = "texte" name = "disappearance" id = "disappearance" value="<?=$ViandePoisson['disappearance']?>"> <br>

        <label for="Envoyer"></label>
        <input type="submit" name="submit"  value="Envoyer">

    </form>
</body>
</html>