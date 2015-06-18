<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Employee Registration</div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body form">
        <?php echo $this->Form->create($office_employee_history); ?>
            <div class="form-body">

                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-horizontal">
                            <label class="control-label col-md-4">Office Employee ID</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('office_employee_id', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="form-section">Name and Family</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5">Full Name in English</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('fullname_eng', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5 pull-left">Full Name in Bangla</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('fullname_bng', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5">Father Name in English</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('fathername_eng', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5 pull-left">Father Name in Bangla</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('fathername_bng', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5">Mother Name in English</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('mothername_eng', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5 pull-left">Mother Name in Bangla</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('mothername_bng', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5">Spouse Name in English</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('spouse_name_eng', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5 pull-left">Spouse Name in English</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('spouse_name_bng', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="form-section">Address Information</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5">Permanent Village</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('parmanent_village', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5 pull-left">Present Village</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('present_village', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5">Permanent Post Office</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('parmanent_postoffice', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5 pull-left">Present Post office</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('present_postoffice', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5">Permanent Thana</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('parmanent_thana', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5 pull-left">Present Thana</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('present_thana', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5">Permanent District</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('parmanent_district', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-5 pull-left">Present District</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('present_district', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="form-section">Personal Details</h3>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Your Email Address</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('email', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Mobile Number</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('mobile_no', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Telephone Number</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('telephone_no', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="icheck-inline">
                                    <input type="radio" name="gender" value="Male" checked class="icheck" data-radio="iradio_line-grey">&nbsp;Male&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="gender" value="Female" class="icheck" data-radio="iradio_line-grey">&nbsp;Female&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="gender" value="Others" class="icheck" data-radio="iradio_line-grey">&nbsp;Others
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Marital Status</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('marital_status', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Religion</label>
                        <div class="col-md-4">
                            <select class="form-control input-medium">
                                <option selected>Choose Religion</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Christian">Christian</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Your Nationality</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('nationality', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">National ID</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('nid', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Your Blood Group</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('blood_group', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Birth Date</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('birth_date', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Birth Registration Number</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('birth_reg_no', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group" hidden="hidden">
                        <label class="col-md-2 control-label">Profile Picture</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('image_file_name', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group" hidden="hidden">
                        <label class="col-md-2 control-label">Signature</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('signature_file_name', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>

                <h3 class="form-section">Service Information</h3>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Maximum Education Level</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('max_education_level', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Service Number</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('service_no', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Service Join Date</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('service_join_date', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Office Organization ID</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('office_organization_id', array('label' => false, 'class' =>'form-control')); ?>
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
                        <label class="col-md-4 control-label">Batch</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('batch', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Grade</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('grade', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Rank</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('rank', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group" hidden="hidden">
                        <label class="col-md-4 control-label">Status</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('status', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group" hidden="hidden">
                        <label class="col-md-4 control-label">Delete Or Not</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('isdelete', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group" hidden="hidden">
                        <label class="col-md-4 control-label">Created By</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('created_by', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group" hidden="hidden">
                        <label class="col-md-4 control-label">Modified By</label>
                        <div class="col-md-4">
                            <?php echo $this->Form->input('modified_by', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
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
        <?php echo $this->Form->end(); ?>
    </div>
</div>