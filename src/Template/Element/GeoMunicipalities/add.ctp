
<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality Name in Bangla</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('municipality_name_bd', array(
                'label' => false,
                'type'=>'text',
                'class' =>'form-control',
                'placeholder' => 'Municipality Name in Bangla'
            )); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality Name in English</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('municipality_name_en', array(
                'label' => false,
                'type'=>'text',
                'class' =>'form-control',
                'placeholder' => 'Municipality Name in English'
            )); ?>
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
        <label class="col-sm-4 control-label">Upazila</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('upazila_id', array('label' => false, 'type'=>'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">District</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('district_id', array('label' => false, 'type'=>'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Status</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('status', array('label' => false, 'type'=>'text', 'class' =>'form-control')); ?>
        </div>
    </div>
</div>