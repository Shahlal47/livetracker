
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Create New Office Organogram</div>
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
                    <label class="col-sm-4 control-label">Des Division</label>
                    <div class="col-sm-3">
                        <?php echo $this->Form->input('des_div', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                    </div>
                </div>
                <?php echo $this->element('OfficeOrganograms/add'); ?>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Auth Role Group</label>
                    <div class="col-sm-3">
                        <?php echo $this->Form->input('auth_role_group_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                    </div>
                </div>
                <?php echo $this->element('submit'); ?>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
