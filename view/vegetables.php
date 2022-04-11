<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Fruits & Légumes</title>
</head>
<body>

    <?php
        require_once "./Header.php"
    ?>
    <div class=contenu>
        <h2>Fruits & Légumes</h2>

        <div class=container>
            <div id=img_fruit></div>
            <div class=descriptioncat>
            <p>Ce groupe d’aliments constitue un <span>rôle fonctionnel</span> et <span>peu énergétique</span>. 
                Les fruits (et a minima les légumes) apportent du <span>fructose</span>. 
                Ce sucre simple donne la <span>saveur sucrée</span> à ces aliments et équivaut énergétiquement au <span>glucose</span>.
                Cependant, les fruits et les légumes sont principalement <span>riches en eau</span> 
                (jusqu’à 80 à 95 % de leur poids) et en éléments que nous sommes incapables de fabriquer :</p>
            </div>
        </div>

        <div class=container>

            <div class=descriptioncat>

                <h5>Fibres</h5>
                <p>Accélèrent le transit intestinal, 
                impliquent <span>un effet de satiété</span> et favorisent le développement de la flore intestinale 
                (<span>protection</span> contre les agressions, <span>réduction de l’absorption des graisses</span>,
                 limitation de l’augmentation du taux de sucre dans le sang...). 
                Les <span>fibres</span> ont la particularité d’être le seul élément à ne pas être digéré.</p>
            </div>

                <div id=img_vegetable></div>
        </div>

        <div class=container>

            <div id=img_fruit2></div>

            <div class=descriptioncat>

            <h5>Minéraux</h5>
            <p>- <span>Potassium et sodium</span> : régularisent la répartition de l’eau dans l’organisme.
                - <span>Magnésium</span> : équilibre le système nerveux, 
                régularise le rythme cardiaque...
                - <span>Calcium</span> : construction et maintien osseux. 
                La teneur en calcium des fruits et légumes est moindre par
                rapport à celle des produits laitiers et celui-ci est moins bien absorbé (5 % contre 30 %).</p>
            </div>

        </div>

        <div class=container>

            <div class=descriptioncat>

                <h5>Vitamines</h5>
                <p>- <span>Vitamine C</span> : stimulation du système immunitaire, assimilation du fer, 
                action antioxydante...
                - <span>Vitamine B9</span> (acide folique) : rôle fondamental dans le métabolisme des protéines et le matériel génétique. -Béta-carotène : protection des tissus (antioxydant) et transformée dans l’organisme en vitamine A
                (croissance, vision).</p>
            </div>    

            <div id=img_vegetable2></div>

        </div>
        <div class=container>

            <div id=img_vegetable3></div>

            <div class=descriptioncat>
                <h5>Minéraux</h5>
                <p>Une consommation <span>variée</span>, <span>régulière</span> de fruits et légumes permettra de répondre aux besoins en fibres, vitami-
                nes et minéraux. Le respect de la saisonnalité <span>optimisera</span> la qualité des fruits et légumes.</p>
            </div>

        </div>

    </div>
    
</body>
</html>