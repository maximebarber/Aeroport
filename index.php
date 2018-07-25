<link rel="stylesheet" href="content/style.css" type="text/css">

<?php

require_once 'controller/ControllerAeroport.php';
require_once 'view/navbar.php';

switch ($_GET['action']) {

  case 'addAeroport':

      if(!empty($_POST)){

          addAeroport($_POST);

      }

  default:

    require_once 'view/addAeroport.php';

    break;

}
var_dump($_POST);
