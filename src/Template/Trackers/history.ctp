<style>
    #map-canvas {
        width: auto;
        height: 590px;
    }
</style>

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Trackers History Records</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <tr>
                <td class="text-success text-right">Device Activation Date</td>
                <td><?php echo date('Y-m-d', strtotime($row_first['device_date'])); ?></td>
            </tr>
            <tr>
                <td class="text-success text-right">Last Communication Date</td>
                <td><?php echo date('Y-m-d', strtotime($row_last['device_date'])); ?></td>
            </tr>
            <tr>
                <td class="text-success text-right">Last Communication Time</td>
                <td><?php echo date('H:i:s', strtotime($row_last['device_time'])); ?></td>
            </tr>
            <tr>
                <td class="text-success text-right">Last Communicate Location</td>
                <td>Mirpur DOHS</td>
            </tr>
        </table>
    </div>
</div>

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Search Trackers History Records</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Search Using Date & Time
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
<!--                        <form class="form-inline">-->
                        <?php echo $this->Form->create(); ?>
                            <div class="form-group form-inline">
                                <label><b>From</b></label>
                                <input type="date" class="form-control" name="server_date_start" placeholder="Date" style = "width:130px;">
                                <input type="time" class="form-control" name="server_time_start" placeholder="Time" style = "width:130px;">

                                <label><b>To</b></label>
                                <input type="date" class="form-control" name="server_date_end" placeholder="Date" style = "width:130px;">
                                <input type="time" class="form-control" name="server_time_end" placeholder="Time" style = "width:130px;">

                                <button type="submit" class="btn btn-default">Show</button>
                            </div>
                        <?php echo $this->Form->end(); ?>
<!--                        </form>-->
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Search Using Time Only
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
<!--                        <form class="form-inline">-->
                            <?php echo $this->Form->create(); ?>
                            <div class="form-group form-inline">
                                <h4>Date (Today)</h4><label><b>From</b></label>

                                <input type="date" class="form-control" name="server_date" value="2014-09-25" placeholder="Time" style = "width:130px;" >

                                <input type="time" class="form-control" name="server_time_start" placeholder="Time" style = "width:130px;" >

                                <label><b>To</b></label>
                                <input type="time" class="form-control" name="server_time_end" placeholder="Time" style = "width:130px;">

                                <button type="submit" class="btn btn-default">Show</button>
                            </div>
                            <?php echo $this->Form->end(); ?>
<!--                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Trackers History Records</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <div id="map-canvas" class="gmaps"></div>
    </div>
</div>


<?php
$latitude = array();
$longitude = array();
$speed = array();

foreach($locations1 as $location){
    $latitude[] = $location['latitude'];
    $longitude[] = $location['longitude'];
    $speed[] = $location['speed'];
}

foreach($locations2 as $location){
    $latitude[] = $location['latitude'];
    $longitude[] = $location['longitude'];
    $speed[] = $location['speed'];
}

$latitude = json_encode($latitude);
$longitude = json_encode($longitude);
$speed = json_encode($speed);

?>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.1.min.js"></script>

<script type="text/javascript">

    var latitude = new Array();
    var longitude = new Array();
    var speed = new Array();

    latitude = <?php echo $latitude ?>;
    longitude = <?php echo $longitude ?>;
    speed = <?php echo $speed ?>;

//    var locations = [
//        ['', -33.923036, 151.259052],
//        ['', -34.028249, 151.157507],
//        ['', -33.800101, 151.287478],
//        ['', -33.950198, 151.259302]
//    ];

    locations = [];
    $.each(latitude, function(i, lat){
        var row = [];
        row.push(speed[i]);
        row.push(lat);
        row.push(longitude[i]);

        locations.push(row);
    });

    console.debug(locations);

    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 6,
        center: new google.maps.LatLng(-39.92, 151.25),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    var markers = new Array();

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        markers.push(marker);

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    function AutoCenter() {
        //  Create a new viewpoint bound
        var bounds = new google.maps.LatLngBounds();
        //  Go through each...
        $.each(markers, function (index, marker) {
            bounds.extend(marker.position);
        });
        //  Fit these bounds to the map
        map.fitBounds(bounds);
    }
    AutoCenter();

</script>