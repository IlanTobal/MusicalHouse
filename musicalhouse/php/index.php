<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicalHouse</title>

    <link rel="stylesheet" href="/css/style.css">

    <!-- ----Materialize---- -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- -----MapBox----- -->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.5.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.5.0/mapbox-gl.css' rel='stylesheet' />

<script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });
</script>

<style>
        body {
            margin: 0;
            padding: 0;
        }
        
        #map {
            /* /* position: absolute; */
            /* top: 0;
            bottom: 0; */ 
            margin-top: 10px;
            width: 250px;
            height: 250px;
        }

        .map_ctn {
            display: flex;
            justify-content: center;
        }
        
        .marker {
            background: red;
            /* background-image: url('/Images/Instagram.png');
            background-size: cover; */
            width: 10px;
            height: 10px;
            border-radius: 50%;
            cursor: pointer;
        }
        
        .mapboxgl-popup {
            max-width: 200px;
        }
        
        .mapboxgl-popup-content {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body>
    <div class="row">
        <nav>
            <div class="nav-wrapper col s12 red darken-3">
                <a href="#!" class="brand-logo">MusicalHouse</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#"><i class="material-icons">home</i></a></li>
                    <li><a href="retrieve.php">PRODUCTS</a></li>
                    <li><a href="insert.php">INSERT</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
        </ul>

        <h1 class="col xl12 center-align">Bienvenido a MusicalHouse!</h1>
        <h5 class="col xl12 center-align txt">La mejor casa de musica de Argentina</h5>

        
    </div>
    <div class = "map_ctn center-align">
        <div id='map' class = "z-depth-3"></div>
    </div>
    <div class = "center-align">
        <button class="btn waves-effect waves-light" type="submit" style = "margin-top: 20px">
            <a href = "retrieve.php" style = "color: white;">Go To Catalogue</a>
        </button>
    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiaWxhbnRvMTUiLCJhIjoiY2tzamkyYWFmMDJ4djJ1anNpYWFicHM0NCJ9.fklxa2i4ohzR1GbWxin5vA';

        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/light-v10',
            center: [-58.46, -34.55],
            zoom: 10
        });

        // code from the next step will go here!

        const geojson = {
            type: 'FeatureCollection',
            features: [{
                type: 'Feature',
                geometry: {
                    type: 'Point',
                    coordinates: [-58.46, -34.55]
                },
                properties: {
                    title: 'MusicalHouse',
                    description: 'Ubicación Local: Av. Cabildo 2739'
                }
            }]
        };

        // add markers to map
        for (const {
                geometry,
                properties
            }
            of geojson.features) {
            // create a HTML element for each feature
            const el = document.createElement('div');
            el.className = 'marker';

            // make a marker for each feature and add to the map
            new mapboxgl.Marker(el).setLngLat(geometry.coordinates).addTo(map);

            new mapboxgl.Marker(el)
                .setLngLat(geometry.coordinates)
                .setPopup(
                    new mapboxgl.Popup({
                        offset: 25
                    }) // add popups
                    .setHTML(`<p>${properties.title}</p><p>${properties.description}</p>`)
                )
                .addTo(map);
        }
    </script>
    
</body>


</html>