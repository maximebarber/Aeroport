

      <div id="map">

      </div>

      <!-- On récupère le getAeroport -->
      <?php
     
      while($aeroport = $aeroports->fetch()) {
      echo $aeroport['nom_aeroport'];}

      $aeroports->closeCursor();

      ?>
