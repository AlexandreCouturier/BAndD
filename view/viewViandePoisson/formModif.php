
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViandePoisson Forme</title>

</head>
<body>
<a href="../../../BAndD/router/routerViandePoisson.php?action=all">tout les viande et poisson oeuf</a>


    <form action="../../../BAndD/router/routerViandePoisson.php" method="post">

        <input type="hidden" name="id"  value="<?=$ViandePoisson['idViandePoisson']?>">

        <label for = "productName"> name </label>
        <input type = "text" name = "productName" id = "productName"  value="<?=$ViandePoisson['productName']?>"> <br>

        <label for = "typeOfMeat"> type de viande </label> 
        <input type = "text" name = "typeOfMeat" id = "typeOfMeat" value="<?=$ViandePoisson['typeOfMeat']?>"> <br>

        <label for = "animal"> animale </label> 
        <input type = "text" name = "animal" id = "animal" value="<?=$ViandePoisson['animal']?>" > <br>

        <p>disparition</p>
        <div>
        <label for = "disappearance">oui</label>
        <input type = "radio" name = "disappearance" id = "disappearance"  value="oui"> <br>
        </div>
        <div>
        <label for = "disappearance">non</label>
        <input type = "radio" name = "disappearance" id = "disappearance"  value="non"> <br>
        </div>

        <label for="Envoyer"></label>
        <input type="submit" name="submit"  value="Envoyer">

    </form>
</body>
</html>