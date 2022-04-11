<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Les Boissons</title>
</head>
<body>
    <?php
        require_once "./Header.php"
    ?>

    <div id=main>
        <h2>Les Boissons</h2>

        <div id=drink>

        </div>

        <h4>Eau plate/Eau Gazeuse</h4>

        <div class=descriptioncat>
            <h5>Rôle:</h5>
            <p>Permet de compenser quotidiennement <span>les pertes urinaires</span> (1 500 ml/j) et <span>fécales</span> (100-150 g/j), ou par <span>voie cutanée</span> (pertes sudorales liées aux besoins de la thermorégulation très variable selon les conditions) et par <span>voie respiratoire</span> (800 ml/j).</p>
        </div>
        
        <div id=otherdrink>
            <div id=tea></div>
            <div id=coffe></div>
        </div>

            <div class=descriptioncat>
                <h5>Besoins</h5>
                <p>1,2 L à 2,5 L au minimum selon l’activité physique et les conditions climatiques.
                Il est conseillé de varier les eaux : du <span>robinet</span> ou <span>en bouteilles</span> (minérales, de source) puisque chacune d’entre elles est plus ou moins composée en minéraux.</p>
            </div>
    </div>
</body>
</html>