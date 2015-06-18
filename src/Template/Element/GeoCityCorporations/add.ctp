        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-4 control-label">City Corporation Name in Bangla</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('city_corporation_name_eng', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">City Corporation Name in English</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('city_corporation_name_bng', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Geo District</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('geo_district_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Geo Division</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('geo_division_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
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
                <label class="col-sm-4 control-label">Division BBS Code</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('division_bbs_code', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group" hidden="hidden">
                <label class="col-sm-4 control-label">Status</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('status',  array('label' => false, 'class' => 'form-control', 'value' => '1')); ?>
                </div>
            </div>
        </div>
