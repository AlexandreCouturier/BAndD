<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisir produit</title>
</head>
<body>
<a href="../../../BAndD/router/routerFeculent.php?action=all">toute les viandes poisson et oeuf</a>


    <form action="../../../BAndD/router/routerFeculent.php" method="post">

        <label for="productName">Nom</label>
        <input type="text" name="productName" id="productName" required>

        <label for="originPlant">origine de la Plante</label>
        <input type="text" name="originPlant" id="" required>

        <p>Transformé</p>
    <div>   
        <label for="transform">oui</label>
        <input type="radio" name="transform" id="transform" value="oui" required>
    </div>
    <div>   
        <label for="transform">non</label>
        <input type="radio" name="transform" id="transform" value="non" required>
    </div>

        <p>Cuit</p>
    <div>
        <label for="cooked">oui</label>
        <input type="radio" name="cooked" id="cooked" value="oui" required>
    </div>
    <div>
        <label for="cooked">non</label>
        <input type="radio" name="cooked" id="cooked" value="non" required>
    </div>

        <input type="submit" value="envoyer" name="submit" required>
    </form>
</body>
</html>