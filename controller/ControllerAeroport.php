<?php

require_once 'model/Aeroport.php';

function addAeroport($data) {

    $code_aeroport = $data['code_aeroport'];
    $id_ville      = $data['id_ville'];
    $latitude      = $data['latitude'];
    $longitude     = $data['longitude'];
    $nom_aeroport  = $data['nom_aeroport'];

    $aeroport = new Aeroport();

    $aeroport->addAeroport($code_aeroport, $id_ville, $latitude, $longitude, $nom_aeroport);

    require_once 'view/addAeroport.php';

}
