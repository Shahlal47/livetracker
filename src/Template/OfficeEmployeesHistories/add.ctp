
<div class="portlet box green">
    <div class="portlet-title">
            <div class="caption"><i class="fa fa-gift"></i>Employee History</div>
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
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-horizontal">
                            <label class="control-label col-md-4">Office Employee ID</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="office_employee_id" placeholder="Office Employee ID">
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $this->element('OfficeEmployees/family'); ?>
                <?php echo $this->element('OfficeEmployees/address'); ?>
                <?php echo $this->element('OfficeEmployees/personal'); ?>
                <?php echo $this->element('OfficeEmployees/service'); ?>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-4 col-md-9">
                        <button type="submit" class="btn btn-circle blue">Submit</button>
                        <button type="reset" class="btn btn-circle default">Reset</button>
                    </div>
                </div>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>