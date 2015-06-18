

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Add New Office Organization History</div>
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
                    <label class="col-sm-4 control-label">Organization</label>
                    <div class="col-sm-3">
                        <?php echo $this->Form->input('office_organization_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Office Geo</label>
                    <div class="col-sm-3">
                        <?php echo $this->Form->input('office_geos_id', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                    </div>
                </div>
                <?php echo $this->element('OfficeOrganizations/add'); ?>
                <?php echo $this->element('submit'); ?>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
