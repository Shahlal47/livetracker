

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
        <?php echo $this->Form->create(); ?>
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-horizontal">
                            <label class="control-label col-md-4">System Generated Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sys_code" placeholder="System Generated Code">
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $this->element('OfficeEmployees/family'); ?>
                <?php echo $this->element('OfficeEmployees/address'); ?>
                <?php echo $this->element('OfficeEmployees/personal'); ?>
                <?php echo $this->element('OfficeEmployees/service'); ?>
            </div>
        <?php echo $this->element('submit'); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>