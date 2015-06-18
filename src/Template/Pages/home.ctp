this is a sample text from home

        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-6">
                <!-- BEGIN BASIC PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Basic
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:;" class="reload">
                            </a>
                            <a href="javascript:;" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="gmap_basic" class="gmaps">
                        </div>
                    </div>
                </div>
                <!-- END BASIC PORTLET-->
            </div>
            <div class="col-md-6">
                <!-- BEGIN MARKERS PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Markers
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:;" class="reload">
                            </a>
                            <a href="javascript:;" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="gmap_marker" class="gmaps">
                        </div>
                    </div>
                </div>
                <!-- END MARKERS PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- BEGIN GEOLOCATION PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Geolocation
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:;" class="reload">
                            </a>
                            <a href="javascript:;" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="label label-danger visible-ie8">
                            Not supported in Internet Explorer 8
                        </div>
                        <div id="gmap_geo" class="gmaps">
                        </div>
                    </div>
                </div>
                <!-- END GEOLOCATION PORTLET-->
            </div>
            <div class="col-md-6">
                <!-- BEGIN POLYLINES PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Polylines
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:;" class="reload">
                            </a>
                            <a href="javascript:;" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="gmap_polylines" class="gmaps">
                        </div>
                    </div>
                </div>
                <!-- END POLYLINES PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- BEGIN POLYGONS PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Polygons
                        </div>
                        <div class="tools">
                            <a href="javascript:" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:" class="reload">
                            </a>
                            <a href="javascript:" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="label label-danger visible-ie8">
                            Not supported in Internet Explorer 8
                        </div>
                        <div id="gmap_polygons" class="gmaps">
                        </div>
                    </div>
                </div>
                <!-- END POLYGONS PORTLET-->
            </div>
            <div class="col-md-6">
                <!-- BEGIN STATIC PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Static
                        </div>
                        <div class="tools">
                            <a href="javascript:" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:" class="reload">
                            </a>
                            <a href="javascript:" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="gmap_static" class="gmaps">
                            <div style="height:100%;overflow:hidden;display:block;background: url(http://maps.googleapis.com/maps/api/staticmap?center=48.858271,2.294264&amp;size=640x300&amp;sensor=true&amp;zoom=5) no-repeat 50% 50%;">
                                <img src="http://maps.googleapis.com/maps/api/staticmap?center=48.858271,2.294264&amp;size=640x300&amp;sensor=true&amp;zoom=16" style="visibility:hidden" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END STATIC PORTLET-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- BEGIN ROUTES PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Routes
                        </div>
                        <div class="tools">
                            <a href="javascript:" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:" class="reload">
                            </a>
                            <a href="javascript:" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form class="form-inline margin-bottom-10" action="#">
                            <input type="button" id="gmap_routes_start" class="btn blue" value="Start Routing"/>
                        </form>
                        <div class="label label-danger visible-ie8">
                            Not supported in Internet Explorer 8
                        </div>
                        <div id="gmap_routes" class="gmaps">
                        </div>
                        <ol id="gmap_routes_instructions">
                        </ol>
                    </div>
                </div>
                <!-- END ROUTES PORTLET-->
            </div>
            <div class="col-md-6">
                <!-- BEGIN GEOCODING PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Geocoding
                        </div>
                        <div class="tools">
                            <a href="javascript:" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:" class="reload">
                            </a>
                            <a href="javascript:" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form class="form-inline margin-bottom-10" action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" id="gmap_geocoding_address" placeholder="address...">
									<span class="input-group-btn">
									<button class="btn blue" id="gmap_geocoding_btn"><i class="fa fa-search"></i></button>
									</span>
                            </div>
                        </form>
                        <div id="gmap_geocoding" class="gmaps">
                        </div>
                    </div>
                </div>
                <!-- END GEOCODING PORTLET-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->
