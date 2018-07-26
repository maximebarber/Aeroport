<?php

require_once 'model/Aeroport.php';
require_once 'model/Ville.php';

function addAeroport($data) {

    $aeroport = new Aeroport();
    $villeModel = new Ville();

    $aeroport->addAeroport($data);
    $villes = $villeModel->getVille();

    require_once 'view/addAeroport.php';

}

function getAeroport() {

    $aeroportModel = new Aeroport();

    $aeroports = $aeroportModel->getAeroport();

    require 'view/carte.php';

}
