<?php
$geoDistricts = array();
foreach($geo_districts as $districts):
    $geoDistricts[$districts->id] = $districts['district_name_eng'];
endforeach;

$geoThanas = array();
foreach($geo_thanas as $geo_thana):
    $geoThanas[$geo_thana->id] = $geo_thana['thana_name_eng'];
endforeach;

$geoPostOffices = array();
foreach($geo_post_offices as $geo_post_office):
    $geoPostOffices[$geo_post_office->id] = $geo_post_office['postoffice_name_eng'];
endforeach;
?>


<h3 class="form-section">Address Information</h3>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-horizontal">
            <label class="control-label col-md-5">Permanent Village</label>
            <div class="col-md-6">
                <?php echo $this->Form->input('parmanent_village', array('label' => false, 'class' =>'form-control')); ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-horizontal">
            <label class="control-label col-md-5 pull-left">Present Village</label>
            <div class="col-md-6">
                <?php echo $this->Form->input('present_village', array('label' => false, 'class' =>'form-control')); ?>
            </div>
        </div>
    </div>
</div><br>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-horizontal">
            <label class="control-label col-md-5">Permanent Post Office</label>
            <div class="col-md-6">
                <?php echo $this->Form->input('parmanent_postoffice', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoPostOffices)); ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-horizontal">
            <label class="control-label col-md-5 pull-left">Present Post office</label>
            <div class="col-md-6">
                <?php echo $this->Form->input('present_postoffice', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoPostOffices)); ?>
            </div>
        </div>
    </div>
</div><br>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-horizontal">
            <label class="control-label col-md-5">Permanent Thana</label>
            <div class="col-md-6">
                <?php echo $this->Form->input('parmanent_thana', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoThanas)); ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-horizontal">
            <label class="control-label col-md-5 pull-left">Present Thana</label>
            <div class="col-md-6">
                <?php echo $this->Form->input('present_thana', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoThanas)); ?>
            </div>
        </div>
    </div>
</div><br>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-horizontal">
            <label class="control-label col-md-5">Permanent District</label>
            <div class="col-md-6">
                <?php echo $this->Form->input('parmanent_district', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDistricts)); ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-horizontal">
            <label class="control-label col-md-5 pull-left">Present District</label>
            <div class="col-md-6">
                <?php echo $this->Form->input('present_district', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDistricts)); ?>
            </div>
        </div>
    </div>
</div>