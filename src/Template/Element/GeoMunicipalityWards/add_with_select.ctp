<?php
$geoMunicipality = array();
foreach($geo_municipalities as $geo_municipality):
    $geoMunicipality[$geo_municipality->id] = $geo_municipality['municipality_name_en'];
endforeach;

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
        <label class="col-sm-4 control-label">Ward Name in Bangla</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('ward_name_bng', array('label' => false, 'type'=>'text', 'class' =>'form-control',  'placeholder' => 'Ward Name in English')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Ward Name in English</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('ward_name_eng', array('label' => false, 'type'=>'text', 'class' =>'form-control', 'placeholder' => 'Ward Name in English')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Ward BBS Code</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('ward_bbs_code', array('label' => false, 'type'=>'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality BBS Code</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('municipality_bbs_code', array('label' => false, 'type'=>'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Upazila BBS Code</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('upazila_bbs_code', array('label' => false, 'type'=>'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">District BBS Code</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('district_bbs_code', array('label' => false, 'type'=>'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_municipality_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoMunicipality)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Upazila</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_upazila_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoUpazilas)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">District</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_district_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDistricts)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Status</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="status">
        </div>
    </div>
</div>