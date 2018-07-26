<script>
//On initialize la carte
var map = L.map('map').setView([48.856614, 2.3522219000000177], 6);

L.tileLayer('https://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}',{
    maxZoom:20
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

    var redIcon = new PinIcon({iconUrl: 'IMG/red-pin-md.png'}),
        pinkIcon = new PinIcon({iconUrl: 'IMG/pink-pin-md.png'}),
        greenIcon = new PinIcon({iconUrl: 'IMG/green-pin-md.png'}),
        orangeIcon = new PinIcon({iconUrl: 'IMG/orange-pin-md.png'});

    /*
    *On ajoute les TROIS villes plus grandes avec la couleur orange
    *juste pour montrer la taille de centre de Formation par rapport
    *aux autres qui sont d'une taille plus moderée.
    */

    L.marker([49.1065237, 6.2334335000000465], {icon: redIcon}).addTo(map).bindPopup("<h3>Metz</h3>");
    L.marker([48.7050197, 6.14384199999995], {icon: redIcon}).addTo(map).bindPopup("<h3>Nancy</h3>");
    L.marker([48.557575, 7.747591100000022], {icon: redIcon}).addTo(map).bindPopup("<h3>Strasbourg</h3>");

    </script>
