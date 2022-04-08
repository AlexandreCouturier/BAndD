<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Produits laitiers</title>
</head>
<body>

    <?php
        require_once "../model/Header.php"
    ?>
    <div class=contenu>
        <h2>Produits Laitiers</h2>

        <div class=container>
            <div id=img_cow></div>
            <div class=descriptioncat>
            <p>Ce groupe d’aliments constitue un rôle fonctionnel et peu énergétique. 
                Les fruits (et a minima les légumes) apportent du fructose. 
                Ce sucre simple donne la saveur sucrée à ces aliments et équivaut énergétiquement au glucose.
                Cependant, les fruits et les légumes sont principalement riches en eau 
                (jusqu’à 80 à 95 % de leur poids) et en éléments que nous sommes incapables de fabriquer :</p>
            </div>
        </div>

        <div class=container>

            <div class=descriptioncat>

                <h5>Fibres</h5>
                <p>Accélèrent le transit intestinal, 
                impliquent un effet de satiété et favorisent le développement de la flore intestinale 
                (protection contre les agressions, réduction de l’absorption des graisses,
                 limitation de l’augmentation du taux de sucre dans le sang...). 
                Les fibres ont la particularité d’être le seul élément à ne pas être digéré.</p>
            </div>

                <div id=img_cheese></div>
        </div>

        <div class=container>

            <div id=img_yogourt></div>

            <div class=descriptioncat>

            <h5>Minéraux</h5>
            <p>- Potassium et sodium : régularisent la répartition de l’eau dans l’organisme.
                - Magnésium : équilibre le système nerveux, 
                régularise le rythme cardiaque...
                - Calcium : construction et maintien osseux. 
                La teneur en calcium des fruits et légumes est moindre par
                rapport à celle des produits laitiers et celui-ci est moins bien absorbé (5 % contre 30 %).</p>
            </div>

        </div>

        <div class=container>

            <div class=descriptioncat>

                <h5>Vitamines</h5>
                <p>- Vitamine C : stimulation du système immunitaire, assimilation du fer, 
                action antioxydante...
                - Vitamine B9 (acide folique) : rôle fondamental dans le métabolisme des protéines et le matériel génétique. -Béta-carotène : protection des tissus (antioxydant) et transformée dans l’organisme en vitamine A
                (croissance, vision).</p>
            </div>    

            <div id=img_milk></div>

        </div>

    </div>
    
</body>
</html>