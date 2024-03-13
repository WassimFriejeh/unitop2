
<div class="map-wrapper pt-8">
    <div id="map" style="background-color:grey; height: 70%;"></div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX7uiS-Mw6cfoXW28RxOvZa-ZdrQ3QmA4&callback=initMap" async
    defer></script>

<script>
    let map;

    function initMap() {

        // map customization
        const center = new google.maps.LatLng({{ $rows->latitude }}, {{ $rows->longitude }});
        map = new google.maps.Map(document.getElementById('map'), {
            center: center,
            zoom: 11,
            disableDefaultUI: true // Hide default UI components
        });
        var styles = [

            {
                "featureType": "landscape",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "transit",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "stylers": [{
                        "hue": "#00aaff"
                    },
                    {
                        "saturation": -100
                    },
                    {
                        "gamma": 2.15
                    },
                    {
                        "lightness": 12
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                        "visibility": "on"
                    },
                    {
                        "lightness": 24
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "lightness": 57
                }]
            }

        ];

        // Define the map styles


        // Create a new StyledMapType object, passing it the array of styles,
        // as well as the name to be displayed on the map type control.
        var styledMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        });

        // Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMap);
        map.setMapTypeId('styled_map');

        //marker
        const svgMarker = {
            path: "M-1.547 12l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM0 0q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
            fillColor: "black",
            fillOpacity: 1,
            strokeWeight: 0,
            rotation: 0,
            scale: 2,
            anchor: new google.maps.Point(0, 20),
        };


        new google.maps.Marker({
            position: new google.maps.LatLng({{ $rows->latitude }}, {{ $rows->longitude }}),
            map: map,
            icon: svgMarker,
            // Customize the marker properties if needed
        });


        // new google.maps.Marker({
        //     position: map.getCenter(),
        //     icon: svgMarker,
        //     map: map,
        // });
    }
    window.initMap = initMap;
</script>