<?php

require_once 'model/Model.php';

class Ville extends Model
{

    //Connection à la bdd
    public function __construct()
    {
        parent::getBdd();
    }

    public function getVille(){

      $sql = 'SELECT * FROM getVille';

      $req = $this->bdd->query($sql);

      return $req;
    }

}
