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
            <p>Ces aliments « <span>bâtisseurs</span> » ont un rôle très important pendant l’adolescence puisqu’ils participent 
                au <span>développement de la masse osseuse</span> qui peut doubler pendant la puberté. 
                Les produits laitiers sont nutritionnellement les aliments qui apportent <span>la plus grande diversité d’éléments</span> :</p>
            </div>
        </div>

        <div class=container>

            <div class=descriptioncat>

                <h5>Nutriment</h5>
                <p>- <span>Protéines</span> : elles sont composées d’acides aminés qui permettent la construction 
                    et le renouvellement des organes vitaux et des tissus (particulièrement les muscles).</p>
                <p>- <span>Lipides</span> : outre le fait de donner de l’énergie, les matières grasses des produits laitiers se décomposent en acides gras saturés, 
                    acides gras mono-insaturés et acides gras poly-insaturés qui s’équilibrent entre eux.</p>
            </div>

                <div id=img_cheese></div>
        </div>

        <div class=container>

            <div id=img_yogourt></div>

            <div class=descriptioncat>

            <h5>Minéraux</h5>
            <p>- <span>Calcium</span> : constitution du squelette et des dents (développement de la masse osseuse de 7 à 8 % par an pour un adolescent), 
                contraction musculaire... 
                Les teneurs en calcium sont variables selon les produits.</p>
            <p>- <span>Phosphore</span> : associé au calcium, il est un constituant des cellules et participe à la mise en réserve de l’énergie.</p>
            </div>

        </div>

        <div class=container>

            <div class=descriptioncat>

                <h5>Vitamines</h5>
                <p>- <span>Vitamine A</span> : indispensable pour la croissance, la vision, le renouvellement de la peau...</p>
                <p>- <span>Vitamine D</span> : permet l’utilisation du calcium par l’organisme.</p>
                <p>- <span>Vitamines du groupe B</span> : elles sont multiples et leurs richesses dépendent de la quantité de matière
                grasses.</p>
            </div>    

            <div id=img_milk></div>

        </div>

    </div>
    
</body>
</html>