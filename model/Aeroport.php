<?php

require_once 'model/Model.php';

class Aeroport extends Model
{

    //Connection à la bdd
    public function __construct()
    {
        parent::getBdd();
    }

    //Ajout d'un aéroport à la bdd
    public function addAeroport($data)
    {
        $sql = 'INSERT INTO AEROPORT (code_aeroport, id_ville, latitude, longitude, nom_aeroport)
                VALUES (:code_aeroport, :id_ville, :latitude, :longitude, :nom_aeroport)';

        $req = $this->bdd->prepare($sql);
        $req->execute(array(':code_aeroport' => $data['code_aeroport'],
                            ':id_ville'      => $data['id_ville'],
                            ':latitude'      => $data['latitude'],
                            ':longitude'     => $data['longitude'],
                            ':nom_aeroport'  => $data['nom_aeroport']));

        return $req;
    }

    public function getAeroport()
    {
        $sql = 'SELECT * getAeroport';

        $req = $this->bdd->query($sql);
        return $req;
    }
}
