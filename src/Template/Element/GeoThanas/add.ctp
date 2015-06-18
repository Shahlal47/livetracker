

<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Thana Name in Bangla</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('thana_name_bng', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Thana Name in English</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('thana_name_eng', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">District</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('district_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
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
        <label class="col-sm-4 control-label">Status</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('status', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
</div>