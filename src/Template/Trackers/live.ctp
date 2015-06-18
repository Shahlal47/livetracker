<style>
    #map-canvas {
        width: auto;
        height: 590px;
    }
</style>


<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Live Trackers View</div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-window-body">
        <div id="map-canvas"></div>
    </div>
</div>


<?php
    $latitude = $row['latitude'];
    $longitude = $row['longitude'];
    echo 'Latitude  '. $latitude.'<br>';
    echo 'Longitude  '.$longitude;
//    die();
?>


<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
var geocoder;
var map;
var infowindow = new google.maps.InfoWindow();
var marker;
function initialize() {

    var latitude = "<?= $latitude; ?>";
    var longitude = "<?= $longitude; ?>";

    geocoder = new google.maps.Geocoder();

    var latlng = new google.maps.LatLng(latitude, longitude);
        var mapOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: 'roadmap'
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    var marker = new google.maps.Marker({
        position: latlng,
        map: map
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

