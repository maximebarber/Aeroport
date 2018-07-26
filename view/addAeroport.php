<form id="form" method="POST" action="index.php?action=addAeroport">

  <div class="form-group">
    <label for="nom_aeroport">Nom aéroport</label>
    <input type="text" class="form-control" id="nom_aeroport" placeholder="" name="nom_aeroport">
  </div>

  <div class="form-group">
    <label for="code_aeroport">Code aéroport</label>
    <input type="text" class="form-control" id="code_aeroport" placeholder="" name="code_aeroport">
  </div>

  <div class="form-group">
    <label for="longitude">Longitude</label>
    <input type="number" step="" class="form-control" id="longitude" placeholder="" name="longitude">
  </div>

  <div class="form-group">
    <label for="latitude">Latitude</label>
    <input type="number" step="" class="form-control" id="latitude" placeholder="" name="latitude">
  </div>

  <div class="form-group">
    <label for="id_ville">Ville</label>
    <select class="custom-select" name="id_ville">
      <option selected>Choix ville...</option>

      <!-- Liste déroulante des villes -->
      <?php while ($ville = $villes->fetch()){
        echo '<option value="'.$ville["id_ville"].'">'.$ville["nom_ville"].'</option>';
      }?>

    </select>
  </div>

  <button type="submit" class="btn btn-primary">Ajouter</button>

</form>
