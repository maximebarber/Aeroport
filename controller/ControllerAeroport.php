<?php

require_once 'model/Aeroport.php';

function addAeroport($data) {


    $aeroport = new Aeroport();

    $aeroport->addAeroport($data);
    echo "sdsd";
    require_once 'view/addAeroport.php';

    require_once 'view/addAeroport.php';

}
