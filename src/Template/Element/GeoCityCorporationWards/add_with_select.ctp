<?php
$geoDistricts = array();
foreach($geo_districts as $districts):
    $geoDistricts[$districts->id] = $districts['district_name_eng'];
endforeach;

$geoDivisions = array();
foreach($geo_divisions as $divisions):
    $geoDivisions[$divisions->id] = $divisions['division_name_eng'];
endforeach;

$geoCityCorporation = array();
foreach($geo_city_corporations as $geo_city_corporation):
    $geoCityCorporation[$geo_city_corporation->id] = $geo_city_corporation['city_corporation_name_eng'];
endforeach;
?>



<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Ward Name in Bangla</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('ward_name_eng', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Ward Name in English</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('ward_name_bng', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo City Corporation</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_city_corporation_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoCityCorporation)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo District</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_district_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDistricts)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Division</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_division_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDivisions)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">BBS Code</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('bbs_code', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">District BBS Code</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('district_bbs_code', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Division BBS Code</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('division_bbs_code', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">City Corporation BBS Code</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('city_corporation_bbs_code', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-sm-4 control-label">Status</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('status',  array('label' => false, 'class' => 'form-control', 'value' => '1')); ?>
        </div>
    </div>
</div>