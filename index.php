<!-- CSS Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

<!-- CSS maison -->
<link rel="stylesheet" href="content/style.css" type="text/css">

<?php

require_once 'controller/ControllerAeroport.php';
//require_once 'controller/ControllerLeaflet.js';
require_once 'view/navbar.php';

switch ($_GET['action']) {

  case 'addAeroport':

      if(!empty($_POST)){

          addAeroport($_POST);

      }

      require_once 'view/addAeroport.php';

      break;

  case 'carte':

    require_once 'view/carte.php';

    break;

  default:

    require_once 'view/addAeroport.php';

    break;

}
var_dump($_POST);

?>

<!-- JQuery, Ajax et JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</body>
</html>
