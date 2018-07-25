<link rel="stylesheet" href="content/style.css" type="text/css">

<?php

require_once 'controller/ControllerAeroport.php';
require_once 'view/navbar.php';

//url format index/?functionname
$var = array_keys($_GET);
$var[0]();

