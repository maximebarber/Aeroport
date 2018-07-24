<?php

require_once 'model/Aeroport.php';
require_once 'view/addAeroport.php';

class ControllerAeroport {

  private $billet;
  private $commentaire;

  public function __construct() {
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();
  }

  // Affiche les détails sur un billet
  public function billet($idBillet) {
    $billet = $this->billet->getBillet($idBillet);
    $commentaires = $this->commentaire->getCommentaires($idBillet);
    $vue = new Vue("Billet");
    $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
  }

  public function addAeroport($data) {

      $code_aeroport = $data['code_aeroport'];
      $id_ville = $data['id_ville'];
      $latitude = $data['latitude'];
      $longitude = $data['longitude'];
      $nom_aeroport = $data['nom_aeroport'];

      $aeroport = new Aeroport();

      $aeroport->addAeroport($code_aeroport, $id_ville, $latitude, $longitude, $nom_aeroport);

  }

}
