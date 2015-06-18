
<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Organization User</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('org_user_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Organization Designation</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('org_designation_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Office Organization</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('office_organization_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Posting Date</label>
        <div class="col-md-4">
            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                <?php echo $this->Form->input('posting_date', array('label' => false, 'type' => 'text', 'class' =>'form-control', 'placeholder' => 'YYYY-MM-DD')); ?>
                <span class="input-group-btn">
                    <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Release Date</label>
        <div class="col-md-4">
            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                <?php echo $this->Form->input('release_date', array('label' => false, 'type' => 'text', 'class' =>'form-control', 'placeholder' => 'YYYY-MM-DD')); ?>
                <span class="input-group-btn">
                    <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Status</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('status', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-md-4 control-label">Created By</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('created_by', array('label' => false, 'class' =>'form-control', 'default' => 'Shahlal Hossain')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-md-4 control-label">Modified By</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('modified_by', array('label' => false, 'class' =>'form-control', 'default' => 'Shahlal Hossain')); ?>
        </div>
    </div>
</div>