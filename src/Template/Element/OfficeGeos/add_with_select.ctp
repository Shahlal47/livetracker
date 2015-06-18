<?php
$geoOrganizations = array();
foreach($office_organizations as $office_organization):
    $geoOrganizations[$office_organization->id] = $office_organization['org_tile_eng'];
endforeach;

$geoDivisions = array();
foreach($geo_divisions as $geo_division):
    $geoDivisions[$geo_division->id] = $geo_division['division_name_eng'];
endforeach;

$geoDistricts = array();
foreach($geo_districts as $districts):
    $geoDistricts[$districts->id] = $districts['district_name_eng'];
endforeach;

$geoUpazilas = array();
foreach($geo_upazilas as $geo_upazila):
    $geoUpazilas[$geo_upazila->id] = $geo_upazila['upazila_name_eng'];
endforeach;

$geoThanas = array();
foreach($geo_thanas as $geo_thana):
    $geoThanas[$geo_thana->id] = $geo_thana['thana_name_eng'];
endforeach;

$geoUnions = array();
foreach($geo_unions as $geo_union):
    $geoUnions[$geo_union->id] = $geo_union['union_name_eng'];
endforeach;

$geoCityCorporations = array();
foreach($geo_city_corporations as $geo_city_corporation):
    $geoCityCorporations[$geo_city_corporation->id] = $geo_city_corporation['city_corporation_name_eng'];
endforeach;

$geoMunicipalities = array();
foreach($geo_municipalities as $geo_municipality):
    $geoMunicipalities[$geo_municipality->id] = $geo_municipality['municipality_name_en'];
endforeach;
?>



<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Office Organization</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('org_organization_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoOrganizations)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Division</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_division_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDivisions)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo District</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_district_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDistricts)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Upazila</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_upazila_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoUpazilas)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Union</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_union_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoUnions)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo City Corporation</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_city_corporation_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoCityCorporations)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Municipality</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_municipality_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoMunicipalities)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Thana</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_thana_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoThanas)); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Ward</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('ward', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-sm-4 control-label">Deleted or Not</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('isdeleted', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-sm-4 control-label">Created By</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('created_by', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-sm-4 control-label">Modified By</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('modified_by', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-sm-4 control-label">Status</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('status', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
</div>