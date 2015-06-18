<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Edit Organization Structure</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body form"><br><br>
        <?php echo $this->Form->create($office_organization_structure); ?>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-4 control-label">Structure Type</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="structure_type">
                </div>
            </div>
            <?php echo $this->element('OfficeOrganograms/add'); ?>
            <?php echo $this->element('update'); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
