

<div id="map">

</div>

<!-- JS Leaflet -->
<script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
  integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
  crossorigin=""></script>

<script>
//On initialize la carte
var map = L.map('map').setView([48.856614, 2.3522219000000177], 3);

L.tileLayer("https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}",{
    attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    subdomains: 'abcd',
    minZoom: 1,
    maxZoom: 16,
    ext: 'png'
    }).addTo(map);

    /*
    * On crée notre ballon.
    * on met en commentaire la méthode 'ombre'
    * parce que dans notre exercice on n'a pas un fichier pour l'ombre.
    */

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

    /*
    *On crée les ballon avec des differentes couleurs.
    *Les differentes couleurs montraint la taille de la ville
    *où se trouve le centre de Formation.
    */

    var redIcon    = new PinIcon({iconUrl: 'IMG/red-pin-md.png'}),
        pinkIcon   = new PinIcon({iconUrl: 'IMG/pink-pin-md.png'}),
        greenIcon  = new PinIcon({iconUrl: 'IMG/green-pin-md.png'}),
        orangeIcon = new PinIcon({iconUrl: 'IMG/orange-pin-md.png'});

    /*
    *On ajoute les TROIS villes plus grandes avec la couleur orange
    *juste pour montrer la taille de centre de Formation par rapport
    *aux autres qui sont d'une taille plus moderée.
    */
    <?php
    //On boucle sur
    while ($aeroport = $aeroports->fetch()) {?>
    L.marker([<?= $aeroport["latitude"]; ?>,<?= $aeroport["longitude"];?>], {icon: redIcon}).addTo(map).bindPopup('<?= $aeroport["nom_aeroport"];?>');<?php }?>

</script>
