<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="../../../BAndD/view/viewViandePoisson/formCreate.php">ajouter une viande,poisson ou oeuf</a>
<a href="../../../BAndD/view/searchByCategory/searchByCategory.php">Choisir une catégorie</a>

<?php foreach($allViandePoisson as $ViandePoisson): ?>
        <p><a href="../../../BAndD/router/routerViandePoisson.php?action=id&id=<?=$ViandePoisson['idViandePoisson']?>">Afficher cette ID</a></p>
        <ul>
            <li><?= $ViandePoisson["productName"]?></li>
            <li><?= $ViandePoisson["typeOfMeat"]?></li>
            <li><?= $ViandePoisson["animal"]?></li>
            <li><?= $ViandePoisson["disappearance"]?></li>
        </ul>
    <?php endforeach ?>
    
</body>
</html>