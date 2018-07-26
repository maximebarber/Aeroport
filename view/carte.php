

<div id="map">

</div>

<!-- On récupère le getAeroport -->
<?php
while ($aeroport = $aeroports->fetch()) {
    echo '<p>'.$aeroport["nom_aeroport"].'</p>';
    echo '<p>'.$aeroport["longitude"].'</p>';
    echo '<p>'.$aeroport["latitude"].'</p>';
}

$aeroports->closeCursor();
?>
