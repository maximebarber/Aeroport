<?php

require_once 'model/Model.php';

class Billet extends Model {

    public function addAeroport($code_aeroport, $id_ville, $latitude, $longitude, $nom_aeroport) {

        $sql = 'INSERT INTO AEROPORT (code_aeroport, id_ville, latitude, longitude, nom_aeroport)
                VALUES (:code_aeroport, :id_ville, :latitude, :longitude, :nom_aeroport)';

        $req = $this->bdd->prepare($sql);
        $req->execute(array(':code_aeroport' => $code_aeroport,
                            ':id_ville'      => $id_ville,
                            ':latitude'      => $latitude,
                            ':longitude'     => $longitude,
                            ':nom_aeroport'  => $nom_aeroport));

        return $req;

    }

}
