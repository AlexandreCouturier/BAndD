<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Catégories</title>
</head>
<body>

    <?php
        require_once "./Header.php"
    ?>
    <div class=contenu>
        <div class=category>
                <div class=container>
                    <a href="drink.php"><div id=boisson>

                    </div></a>
                
                    <div class=description>
                        <h3 class=section>Les Boissons</h3>

                        <p>
                        Plus qu’indispensable, l’eau est vitale. Notre corps est constitué d’environ 60 à 70 % d’eau. 
                        Les pertes journalières peuvent entraîner une déshydratation qui implique rapidement des troubles fonctionnels de l’organisme. 
                        Il ne faut donc pas attendre d’avoir soif pour boire.
                        </p>
                    </div>

                </div>
        </div>

        <div class=category>
                <div class=container>
                
                    <div class=description>
                        <h3 class=section>Fruits & Légumes</h3>

                        <p>
                            Ce groupe d’aliments constitue un rôle fonctionnel et peu énergétique. Les fruits (et a minima les légumes) apportent du fructose. Ce sucre simple donne la saveur sucrée à ces aliments et équivaut énergétiquement au glucose.
                        </p>
                    </div>
                    <a href="vegetables.php"><div id=fruit>

                    </div></a>

                </div>
        </div>

        <div class=category>
                <div class=container>
                    <a href="starches.php"><div id=feculent>

                    </div></a>
                
                    <div class=description>
                        <h3 class=section>Féculents</h3>

                        <p>
                            Cette grande famille regroupe les pommes de terre, les céréales, le pain et les légumes secs... Elle est notre pre- mière source d’énergie et doit représenter la moitié de notre ration alimentaire quotidienne.
                        </p>
                    </div>

                </div>
        </div>

        <div class=category>
                <div class=container>
                
                    <div class=description>
                        <h3 class=section>Produits Laitiers</h3>

                        <p>
                            Ces aliments « bâtisseurs » ont un rôle très important pendant l’adolescence puisqu’ils participent au développement de la masse osseuse qui peut doubler pendant la puberté. Les produits laitiers sont nutritionnellement les aliments qui apportent la plus grande diversité d’éléments.
                        </p>
                    </div>

                    <a href="milkProduct.php"></a><div id=laitier></div></a>

                </div>
        </div>

        <div class=category>
                <div class=container>
                    <a href=""><div id=viande>

                    </div></a>
                
                    <div class=description>
                        <h3 class=section>Viande & Poisson & Oeuf & Légumineuse</h3>

                        <p>
                            Ces aliments sont principalement recommandés pour leur richesse en protéines. La quantité de protéines apportée par la viande, le poisson ou les œufs est similaire. Par contre leurs teneurs en lipides, vitamines et minéraux sont très variables et sont fonction de l’animal et des morceaux cuisinés. C’est pourquoi nous conseillons de varier au maximum l’origine de ces aliments.
                        </p>
                    </div>

                </div>
        </div>

        <div class=category>
                <div class=container>
                
                    <div class=description>
                        <h3 class=section>Matières Grasses</h3>

                        <p>
                            Les matières grasses regroupent le beurre, la crème fraîche, les huiles et les margarines.
                        </p>
                    </div>

                    <a href="fat.php"><div id=gras></div></a>
                </div>
        </div>

        <div class=category>
                <div class=container>
                    <a href="sugar.php"><div id=sucrerie>

                    </div></a>
                
                    <div class=description>
                        <h3 class=section>Sucreries</h3>

                        <p>
                            Ils regroupent tous les aliments ayant un goût sucré prononcé : chocolat, miel, confiture, viennoiserie, pâte à tartiner... cependant ces aliments apportent également des matières grasses dites « cachées ».
                            La consommation de ces produits sucrés doit être modérée car une consommation importante de ceux-ci engendre un déséquilibre alimentaire. Les sportifs trouveront un intérêt dans ces aliments lors d’un effort prolongé.
                        </p>
                    </div>

                </div>
        </div>
    </div>
        
    <?php
        require_once "./footer.php"
    ?>
    
</body>
</html>