<?php

require_once 'controller/ControllerAeroport.php';

switch ($_GET['action']) {

  case 'addAeroport':

      if(!empty($_POST)){

          addAeroport($_POST);

      }

  default:

    require_once 'view/addAeroport.php';

    break;

}
