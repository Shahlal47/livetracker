

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Edit Office User</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body form"><br><br>
        <?php echo $this->Form->create($office_users); ?>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-4 control-label">System Code</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('sys_code', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Employee</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('org_employee_id', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Service Number</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('service_no', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Mobile Number</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('mobile_no', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Email</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('email', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Password</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('password', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Password Expiry Date</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('password_expiry_date', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Security Question</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('security_ques', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Security Question Answer</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('security_ques_answer', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Secret Code</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('secret_code', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">User Locked or Not</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('is_locked', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Deleted or Not</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('is_deleted', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Status</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('status', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>

            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-4 col-md-9">
                        <button type="submit" class="btn btn-circle blue">Update</button>
                        <button type="reset" class="btn btn-circle default">Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>


