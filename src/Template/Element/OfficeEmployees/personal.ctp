<h3 class="form-section">Personal Details</h3>
<div class="form-horizontal">
    <div class="form-group">
        <label class="col-md-2 control-label">Your Email Address</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('email', array('label' => false, 'type' => 'email', 'class' =>'form-control', 'placeholder' => 'Email Address')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Mobile Number</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('mobile_no', array('label' => false, 'class' =>'form-control', 'placeholder' => 'Mobile Number')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Telephone Number</label>
        <div class="col-md-4">
            <?php echo $this->Form->input('telephone_no', array('label' => false, 'class' =>'form-control', 'placeholder' => 'Telephone Number')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Gender</label>
        <div class="col-md-4">
<!--            --><?php //$gender = array('Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others'); ?>
<!--            --><?php //echo $this->Form->radio('gender', array(
//                'label' => false,
//                'class' => 'form-control',
//                'type' => 'radio',
//                'options' => $gender
//                )); ?>
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
            <?php echo $this->Form->input('marital_status', array('label' => false, 'class' =>'form-control', 'placeholder' => 'Marital Status')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Religion</label>
        <div class="col-md-4">
            <?php
            $religionOptions = array(
                '' => 'Choose Religion',
                'Muslim' => 'Muslim',
                'Hinduism' => 'Hinduism',
                'Buddhism' => 'Buddhism',
                'Christian' => 'Christian',
                'Others' => 'Others');
            ?>
            <?php echo $this->Form->input('religion', array('label' => false, 'class' =>'form-control input-medium', 'type' => 'select', 'options' => $religionOptions)); ?>
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
<!--    <div class="form-group">-->
<!--        <label class="col-md-2 control-label">Birth Date</label>-->
<!--        <div class="col-md-4">-->
<!--            --><?php //echo $this->Form->input('birth_date', array('label' => false, 'class' =>'form-control', 'placeholder' => 'YYYY-MM-DD')); ?>
<!--        </div>-->
<!--    </div>-->
    <div class="form-group">
        <label class="col-md-2 control-label">Birth Date</label>
        <div class="col-md-4">
            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                <?php echo $this->Form->input('birth_date', array('label' => false, 'type' => 'text', 'class' =>'form-control', 'placeholder' => 'YYYY-MM-DD')); ?>
                <span class="input-group-btn">
                    <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                </span>
            </div>
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