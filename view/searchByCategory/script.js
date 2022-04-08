const select = document.getElementById('choix');
            select.addEventListener('change', function () {
                var valeur = select.options[select.selectedIndex].value;
                valeur = parseInt(valeur);
                 
                switch (valeur) {
                    case 1:
                        changeURL('../viewFruitAndVegetable/formFruitAndVegetable.php');
                        break;
                    case 2:
                        changeURL('../viewOilyMaterial/formOilyMaterial.php');
                        break;
                    case 3:
                        changeURL('../viewSweet/formSweet.php');
                        break;
                    default:
                        console.log('default');
                }
 
            });
             
            function changeURL(url) {
                window.location.href = url;
            }