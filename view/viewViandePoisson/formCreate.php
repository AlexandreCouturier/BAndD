<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisir produit</title>
</head>
<body>
<a href="../../../BAndD/router/routerViandePoisson.php?action=all">toute les viandes poisson et oeuf</a>


    <form action="../../../BAndD/router/routerViandePoisson.php" method="post">

        <label for="productName">productName</label>
        <input type="text" name="productName" id="productName" required>

        <label for="TypeOfMeat">typeofmeat</label>
        <input type="text" name="typeOfMeat" id="" required>

        <label for="animal">animal</label>
        <input type="text" name="animal" id="animal" required>

        <p>Disparition</p>
        <div>
        <label for="disappearance">oui</label>
        <input type="radio" name="disappearance" id="disappearance" value="oui" required>
        </div>
        <div>
        <label for="disappearance">non</label>
        <input type="radio" name="disappearance" id="disappearance" value="non" required>
        </div>

        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>