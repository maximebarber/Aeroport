<?php

require_once 'model/Aeroport.php';
require_once 'model/Ville.php';

function addAeroport($data = null) {

  //On vérifie si les champs existent ou non
  if(isset($data)){
    $aeroport = new Aeroport();
    $aeroport->addAeroport($data);
  }

    $villeModel = new Ville();
    $villes = $villeModel->getVille();

    require_once 'view/addAeroport.php';

}

function getAeroport() {

    $aeroportModel = new Aeroport();

    $aeroports = $aeroportModel->getAeroport();

    require 'view/carte.php';

}
