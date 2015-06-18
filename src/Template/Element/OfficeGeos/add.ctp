
<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Office Organization</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('org_organization_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Division</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_division_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo District</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_district_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Upazila</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_upazila_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Union</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_union_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo City Corporation</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_city_corporation_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Municipality</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_municipality_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Thana</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('thana', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Ward</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('ward', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-sm-4 control-label">Deleted or Not</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('isdeleted', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
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