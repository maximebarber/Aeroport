<?php

require_once 'model/Ville.php';

function getVille() {

  $aeroportModel = new Aeroport();

  $aeroports = $aeroportModel->getAeroport();

  require 'view/carte.php';
  
}
