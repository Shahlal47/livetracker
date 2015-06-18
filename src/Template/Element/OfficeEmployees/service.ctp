<h3 class="form-section">Service Information</h3>
<div class="form-horizontal">
    <div class="form-group">
        <label class="col-md-4 control-label">Maximum Education Level</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('max_educational_qualification', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Service Number</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('service_no', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
<!--    <div class="form-group">-->
<!--        <label class="col-md-4 control-label">Service Join Date</label>-->
<!--        <div class="col-md-4">-->
<!--            --><?php //echo $this->Form->input('service_join_date', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
<!--        </div>-->
<!--    </div>-->
    <div class="form-group">
        <label class="col-md-4 control-label">Service Joining Date</label>
        <div class="col-md-4">
            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                <?php echo $this->Form->input('service_join_date', array('label' => false, 'type' => 'text', 'class' =>'form-control', 'placeholder' => 'YYYY-MM-DD')); ?>
                <span class="input-group-btn">
                    <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Office/Organization ID</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('office_organization_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Cadre or Not</label>
        <div class="col-md-4">
            <div class="icheck-inline">
                <input type="radio" name="iscadre" value="Yes" checked class="icheck" data-radio="iradio_line-grey">&nbsp;Yes&nbsp;&nbsp;&nbsp;
                <input type="radio" name="iscadre" value="No" class="icheck" data-radio="iradio_line-grey">&nbsp;No
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Batch Number</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('batch', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Grade</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('grade', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Rank</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('rank', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-md-4 control-label">Status</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('status', array('label' => false, 'type' => 'text', 'class' =>'form-control', 'default' => '1')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-md-4 control-label">Delete Or Not</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('isdelete', array('label' => false, 'type' => 'text', 'class' =>'form-control', 'default' => 'N')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-md-4 control-label">Created By</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('created_by', array('label' => false, 'type' => 'text', 'class' =>'form-control', 'default' => 'Shahlal Hossain')); ?>
        </div>
    </div>
    <div class="form-group" hidden="hidden">
        <label class="col-md-4 control-label">Modified By</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('modified_by', array('label' => false, 'type' => 'text', 'class' =>'form-control', 'default' => 'Shahlal Hossain')); ?>
        </div>
    </div>
</div>

