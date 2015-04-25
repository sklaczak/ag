<?php

class IndexController extends Zend_Controller_Action {

    public function indexAction() {

        $cities = array (
            'Tychy',
            'Katowice',
            'Sosnowiec',
            'Gliwice',
            'Żywiec',
            'Opole',
            'Wrocław',
            'Łódź',
            'Kraków',
            'Dębica',
            /*'Warszawa',
            'Poznań',
            'Szczecin',
            'Suwałki',
            'Gdańsk',
            'Sopot',
            'Wadowice',
            'Kielce',
            'Sucha Beskidzka',
            'Pacanów',
            'Bytom',
            'Kamienica',
            'Zakopane',
            'Myślenice',
            'Nowy Sącz'*/
        );
        
        $address = '';
        
        foreach ($cities as $city) {
            $address .= $city . ' Polska';
            if ($city !== end($cities)) {
                 $address .= '|';
            }
        } 
        
        
        echo "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$address."&destinations=".$address."&mode=driving&language=pl-PL";
        
    }

}
