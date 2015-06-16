<?php
/**
 * Created by PhpStorm.
 * User: boaz
 * Date: 13/06/2015
 * Time: 18:30
 */

    /***** GENERAL DEFFENITION ****/
    $site_theme_location = get_bloginfo('template_directory');
    $site_theme_map_pointer_location = '/images/map-point.png';
    $pointer_path = $site_theme_location . $site_theme_map_pointer_location;

?>



<div id="google-maps" class="row">
    <div id="map-canvas" class="col-xs-12"></div>
    <div id="title-map" class="col-xs-12">
        <div id="title-inner" class="col-xs-12">

        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
            center: new google.maps.LatLng(32.073007, 34.782066),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.LARGE,
                position: google.maps.ControlPosition.RIGHT_CENTER
            },
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            },
            disableDoubleClickZoom: true,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var iconBase = '<?php echo $pointer_path; ?>';

        var branches = {
            begin: {
                name: 'begin',
                location: [32.0721537,34.7894554]
            },
            robinshtein: {
                name: 'robinshtein',
                location: [32.06612,34.783165]
            },
            weizman: {
                name: 'weizman',
                location: [32.0788308,34.7880437]
            }
        };
            
        for ( var branch in branches) {
            for (var prop in branches[branch]) {
                if (branches[branch].hasOwnProperty("name")) {
                    var name = branches[branch].name;
                    if ( typeof name == "string") {
                        name = name
                    }else {
                        name = "";
                    }
                    branches[branch].name = new google.maps.Marker({
                        position: new google.maps.LatLng(branches[branch].location[0], branches[branch].location[1]),
                        map: map,
                        icon: iconBase,
                        title : name
                    });
                }
            }
        }

        /*
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(32.073007, 34.782066),
            map: map,
            icon: iconBase
        });
        */


        var roadAtlasStyles = [
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {"saturation": -100},
                    {"lightness": -8},
                    {"gamma": 1.18}
                ]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {"saturation": -100},
                    {"gamma": 1},
                    {"lightness": -24}
                ]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {"saturation": -100}
                ]
            }, {
                "featureType": "administrative",
                "stylers": [
                    {"saturation": -100}
                ]
            }, {
                "featureType": "transit",
                "stylers": [
                    {"saturation": -100}
                ]
            }, {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {"saturation": -100}
                ]
            }, {
                "featureType": "road",
                "stylers": [
                    {"saturation": -100}
                ]
            }, {
                "featureType": "administrative",
                "stylers": [
                    {"saturation": -100}
                ]
            }, {
                "featureType": "landscape",
                "stylers": [
                    {"saturation": -100}
                ]
            }, {
                "featureType": "poi",
                "stylers": [
                    {"saturation": -100}
                ]
            }, {}
        ]
        var styledMapOptions = {};

        var usRoadMapType = new google.maps.StyledMapType(
            roadAtlasStyles, styledMapOptions);

        map.mapTypes.set('usroadatlas', usRoadMapType);
        map.setMapTypeId('usroadatlas');

    }
    google.maps.event.addDomListener(window, 'load', initialize);
    google.maps.event.addDomListener(window, 'resize', initialize);

</script>

