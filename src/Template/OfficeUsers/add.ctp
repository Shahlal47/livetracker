<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Create New Office User</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body form"><br><br>
        <?php echo $this->Form->create(); ?>
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-4 control-label">System Code</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="sys_code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Employee</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="org_employee_id">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Service Number</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="service_no">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Mobile Number</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="mobile_no">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Password Expiry Date</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="password_expiry_date">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Security Question</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control pull-right" name="security_ques">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Security Question Answer</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control pull-right" name="security_ques_answer">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Secret Code</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control pull-right" name="secret_code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">User Locked or Not</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="is_locked">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Deleted or Not</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="is_deleted">
                    </div>
                </div>

                <h3 class="form-section">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login Information</h3>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Email Address</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Repeat Password</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="rep-password">
                    </div>
                </div>

                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-9">
                            <button type="submit" class="btn btn-circle blue">Submit</button>
                            <button type="reset" class="btn btn-circle default">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
