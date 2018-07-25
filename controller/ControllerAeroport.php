<?php

require_once 'model/Aeroport.php';

function addAeroport($data) {

    $aeroport = new Aeroport();

    $aeroport->addAeroport($data);

    require_once 'view/addAeroport.php';

}
