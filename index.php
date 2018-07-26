<?php
//Affichage erreurs dans le navigateur
ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);
?>

<!-- CSS Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

<!-- CSS Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css"
  integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
  crossorigin=""/>

<!-- CSS maison -->
<link rel="stylesheet" href="content/style.css" type="text/css">

<?php

require_once 'controller/ControllerAeroport.php';
require_once 'view/navbar.php';

//Vérifie s'il y a bien 'action' dans l'url
if(isset($_GET['action'])){

  //Affichage des différentes pages
  switch ($_GET['action']) {

    case 'accueil':

      require_once 'view/accueil.php';

      break;

    case 'addAeroport':

        if(!empty($_POST)){

            addAeroport($_POST);

        }

        //affichage du formlaire
        else addAeroport();

        break;

    case 'carte':

        getAeroport();

        break;

    default:

      require_once 'view/accueil.php';

      break;

  }

}
//var_dump($_POST);

?>

<!-- JQuery, Ajax et JS de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<!-- JS app.js -->
<!-- <script type="text/javascript" src="controller/ControllerLeaflet.js"></script> -->
<!-- Plus nécessaire car script directement dans carte.php -->

</body>
</html>
