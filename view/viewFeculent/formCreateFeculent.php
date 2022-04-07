<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisir produit</title>
</head>
<body>
<a href="../../../BAndD/router/routerFeculent.php?action=all">toute les viandes poisson et oeuf</a>


    <form action="../../../BAndD/router/routerFeculent.php" method="post">

        <label for="productName">productName</label>
        <input type="text" name="productName" id="productName">

        <label for="originPlant">originPlant</label>
        <input type="text" name="originPlant" id="">

        <label for="transform">transform</label>
        <input type="text" name="transform" id="transform">

        <label for="cooked">disapear</label>
        <input type="text" name="cooked" id="cooked">

        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>