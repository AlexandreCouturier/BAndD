<?php
echo "dans le controller drink avant la class";
include($_SERVER['DOCUMENT_ROOT']."/BAndD/model/Drink.php");
Class ControllerDrink{


    public static function getAllDrink(){
        $drinks = Drink::getAllDrink();
        require "./view/test.php";
    }

    /*public static function getOfferById($id_Offer){
        $row = Offer::getOfferByid($id_Offer);
        require "./View/offreById.php";
    }*/

    public static function createDrink($post){
        echo "dans la fonction createDrink dans le controller";
        var_dump($post);
        $drink = new Drink($post['productName'], $post['hotOrCold'], $post['sparklingOrStill']);

        $drink->createDrink();
        self::getAllDrink();
    }

   /* public static function updateOffer($post){
        
        Offer::updateOffer($post['id_offer'], $post['name_post'], $post['city'], $post['contrat_type'], $post['week_hours'], $post['description'],$post['name_business'], $post['annual_salary'], $post['monthly_pay'], $post['begin'], $post['ending']);

        self::getAllOffer();
    }

    public static function deleteOfferById($id){
       
        Offer::deleteOfferById($id);
        self::getAllOffer();
    }

    /*public static function formUpdateOffer($id_Offer){

        $Offer = Offer::getOfferByid($id_Offer);
        require "/viewOffer/formUpdateOffer.php";
    }*/

    public static function formOffer(){

        require "./View";
    }

}