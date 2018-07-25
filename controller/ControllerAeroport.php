<?php

require_once 'model/Aeroport.php';

function addAeroport($data) {

    $aeroport = new Aeroport();

    $aeroport->addAeroport($data);

    require_once 'view/addAeroport.php';

}

function getAeroport() {

    $aeroport = new Aeroport();

    $aeroport->getAeroport();

    require_once 'view/carte.php';

}
