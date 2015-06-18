<?php
$geoDistricts = array();
foreach($geo_districts as $districts):
    $geoDistricts[$districts->id] = $districts['district_name_eng'];
endforeach;

$geoUpazilas = array();
foreach($geo_upazilas as $geo_upazila):
    $geoUpazilas[$geo_upazila->id] = $geo_upazila['upazila_name_eng'];
endforeach;
?>


<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality Name in Bangla</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="municipality_name_bd" placeholder="Municipality Name in Bangla">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality Name in English</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="municipality_name_en" placeholder="Municipality Name in English">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality BBS Code</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="municipality_bbs_code">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Upazila BBS Code</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="upazila_bbs_code">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">District BBS Code</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="district_bbs_code">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Upazila</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('upazila_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoUpazilas)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">District</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('district_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDistricts)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Status</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="status">
        </div>
    </div>
</div>