<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Viandes & Poissons...</title>
</head>

<body>

    <?php
    include 'header.php';
    ?>
    <h2>Viandes, Poissons, Oeufs & Légumineuses</h2>
    <main>
        <div class=descriptioncat>
            <div id=img_meat></div>
            <p class="proteinesBlocs">
                Ces aliments sont principalement recommandés pour
                <span class="texteOrange">leur richesse en protéines</span>.
                La quantité de protéines apportée par la viande, le poisson ou
                les œufs est similaire. Par contre leurs teneurs en lipides,
                vitamines et minéraux sont très variables et sont fonction
                de l’animal et des morceaux cuisinés. C’est pourquoi nous
                conseillons de <span class="texteOrange">varier</span> au
                maximum <span class="texteOrange">l'origine</span> de ces
                aliments.
            </p>
        </div>

        <div class=descriptioncat>
            <div class="proteinesBlocs">
                <h5>Nutriments</h5>
                <p>
                    - <span class="texteOrange">Protéines</span> : elles sont composées d’acides aminés qui
                    permettent la construction et le renouvellement des organes
                    vitaux et des tissus (particulièrement les muscles).
                    - <span class="texteOrange">Lipides</span> (matières grasses) : apportent de l’énergie
                    mais leurs quantités et qualités sont très variables
                    selon l’origine de
                    l’animal.
                </p>
            </div>
            <div id=img_fish></div>
        </div>

        <div class=descriptioncat>
            <div id=img_eggs></div>
            <div class="proteinesBlocs">
                <h5>Minéraux</h5>
                <p>- <span class="texteOrange">Fer</span> : fabrication d’éléments (hémoglobine et myoglobine) qui permettent le transport et le stockage de l’oxygène. Le fer d’origine animale est plus assimilable (x 2,5) par l’organisme que le fer d’origine végétale.
                    - <span class="texteOrange">Zinc</span> : renforce le fonctionnement du système immunitaire et rôle antioxydant (protection contre le vieillissement).
                    - <span class="texteOrange">Sélénium</span> : rôle antioxydant (protection contre le vieillissement)</p>
            </div>
        </div>

        <div class=descriptioncat>
            <div class="proteinesBlocs">
                <h5>Vitamines</h5>
                <p>- <span class="texteOrange">Vitamines du groupe B</span> : elles sont multiples et leurs richesses dépendent de la quantité de matières grasses.
                    - <span class="texteOrange">Vitamine E</span> : antioxydante (protection des tissus).
                    - <span class="texteOrange">Vitamine K</span> : intervient dans la coagulation du sang.</p>
            </div>
            <div id=img_legume></div>
        </div>
    </main>

</body>

</html>