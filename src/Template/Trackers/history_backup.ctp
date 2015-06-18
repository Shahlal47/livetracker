<style>
    #map-canvas {
        width: auto;
        height: 590px;
    }
</style>


<?php //print_r($location); ?>

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

    <div id="map-canvas" class="gmaps"></div>

</div>




<table class="table table-bordered">
    <thead>
    <tr>
        <th>Server Date</th>
        <th>Server Time</th>
        <th>Latitude</th>
        <th>Longitude</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($locations1 as $location):
    ?>
    <tr>
        <td><?php echo date('Y-m-d', strtotime($location['server_date'])); ?></td>
        <td><?php echo date('H:i:s', strtotime($location['server_time'])); ?></td>
        <td><?php echo $location['latitude']; ?></td>
        <td><?php echo $location['longitude']; ?></td>
        <?php
        endforeach;
        ?>
    </tr>
    </tbody>
</table>


<table class="table table-bordered">
    <thead>
    <tr>
        <th>Server Date</th>
        <th>Server Time</th>
        <th>Latitude</th>
        <th>Longitude</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $latitude = array();
    $longitude = array();

    foreach ($locations2 as $location):
    ?>
    <tr>
        <td><?php echo date('Y-m-d', strtotime($location['server_date'])); ?></td>
        <td><?php echo date('H:i:s', strtotime($location['server_time'])); ?></td>
        <td><?php echo $latitude[] = $location['latitude']; ?></td>
        <td><?php echo $longitude[] = $location['longitude']; ?></td>
        <?php
        endforeach;
        ?>
    </tr>
    </tbody>
</table>

<?php
$latitude = array_values($latitude[0]);
$longitude = array_values($longitude[0]);
pr($latitude);
pr($longitude);
?>





<script>
    var geocoder;
    var map;
    var infowindow = new google.maps.InfoWindow();
    var marker;
    function initialize() {

//        var latitude = "<?//= $latitude; ?>//";
//        var longitude = "<?//= $longitude; ?>//";

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