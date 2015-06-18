    <style>
        #map-canvas {
            width: auto;
            height: 590px;
        }
    </style>


    <div class="portlet light">
        <div class="portlet-title">
            <div class="caption"><i class="fa fa-gift"></i>Live Trackers Home</div>
            <div class="tools">
                <a href="javascript:" class="collapse"></a>
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:" class="reload"></a>
                <a href="javascript:" class="remove"></a>
            </div>
        </div>
        <div class="portlet-window-body">
            <div id="map-canvas"></div>
        </div>
    </div>


    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(23.7000, 90.3667),
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
