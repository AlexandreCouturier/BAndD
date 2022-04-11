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
                    case 4: 
                        changeURL('../viewDrink/formDrink.php');
                        break;
                    case 5: 
                        changeURL('../viewDairyProducts/formDairyProducts.php');
                        break;
                    case 6: 
                        changeURL('../viewFeculent/formCreateFeculent.php');
                        break;
                    case 7: 
                        changeURL('../viewViandePoisson/formCreate.php');
                        break;
                    default:
                        console.log('default');
                }
 
            });
             
            function changeURL(url) {
                window.location.href = url;
            }