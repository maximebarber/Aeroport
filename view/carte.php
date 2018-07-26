
<!-- Récupération des aéroports dans la bdd -->
<?php while ($aeroport = $aeroports->fetch()) {

    $nom = ($aeroport["nom_aeroport"]);
    //$code = ($aeroport["code_aeroport"]);
    $latitude = ($aeroport["latitude"]);
    $longitude = ($aeroport["longitude"]);

    //Création d'un array qui contient les info nécessaires aux pointeurs
    $dataAeroport[] = array('nom' => $nom, 'position' => array('latitude' => $latitude, 'longitude' => $longitude));

}

// //Array version PHP
// var_dump($dataAeroport);
// echo '<br>';
// //Array version JSON
// echo json_encode($dataAeroport);
// echo '<br>';

//Conversion array PHP en JSON
$tabJSON = json_encode($dataAeroport);

?>

<!--Div contenant la carte -->
<div id="map"></div>

<!-- JS Leaflet -->
<script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
  integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
  crossorigin=""></script>

<!-- Script contenant ls JS nécessaire à l'affichage de la carte et des pointeurs -->
<script>

var tabJSON = <?= $tabJSON ?>;
console.log(tabJSON);
//console.log(tabJSON[0]['position']['latitude']);
//console.log(tabJSON[0]['nom']);

//On initialize la carte
var map = L.map('map').setView([48.856614, 2.3522219000000177], 3);

//On initialize la tuile (affichage de la carte)
L.tileLayer("https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}",{
    attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    subdomains: 'abcd',
    minZoom: 1,
    maxZoom: 16,
    ext: 'png'
    }).addTo(map);

//On restreint la largeur de la map

//On définit les limites
var southWest = L.latLng(-89.98155760646617, -180),
northEast = L.latLng(89.99346179538875, 180);
var bounds = L.latLngBounds(southWest, northEast);

//Et on les applique
map.setMaxBounds(bounds);
map.on('drag', function()
{
    map.panInsideBounds(bounds, { animate: false });
});

//On crée un pointeur sans ombre
var PinIcon = L.Icon.extend({
    options: {
        //shadowUrl: '-shadow.png',
        iconSize:     [38, 40],  // la taille de l'icon, dans notre cas c'est le ballon
        shadowSize:   [50, 64],  // la taille de l'ombre. On l'a désactivé car on n'a pas d'un fichier pour l'ombre.
        iconAnchor:   [10, 45],  // Le point où on montre le ballon (icon)
        shadowAnchor: [4, 62],   // point pour l'ombre, on n'a pas de l'ombre
        popupAnchor:  [-3, -76]  // l'endroit où sort la description du ballon (icon)
    }
});

//On crée un pointeur rouge
var redIcon = new PinIcon({iconUrl: 'IMG/airport.png'});


//On boucle sur les aéroports dans le tableau JSON et on les affiche grâce aux pointeurs
for(var i = 0; i < tabJSON.length; i++)
{
  L.marker([tabJSON[i]['position']['latitude'],tabJSON[i]['position']['longitude']],
  {icon: redIcon}).addTo(map).bindPopup(tabJSON[i]["nom"]);
}

//Version en while de Vincent (très sale)

// var i = -1;
// while (i++ < tabJSON.length - 1)
// {
//   L.marker([tabJSON[i]['position']['latitude'],tabJSON[i]['position']['longitude']],
//   {icon: redIcon}).addTo(map).bindPopup(tabJSON[i]["nom"]);
// }

</script>
