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
    <input type="number" step="any" class="form-control" id="longitude" placeholder="" name="longitude">
  </div>

  <div class="form-group">
    <label for="latitude">Latitude</label>
    <input type="number" step="any" class="form-control" id="latitude" placeholder="" name="latitude">
  </div>

  <div class="form-group">
    <label for="id_ville">Id ville</label>
    <input type="number" step="any" class="form-control" id="id_ville" placeholder="" name="id_ville">
  </div>

  <button type="submit" class="btn btn-primary">Ajouter</button>

</form>
