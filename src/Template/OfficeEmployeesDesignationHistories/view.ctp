<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Employee Designation</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered">
                <tr><td class="text-right">Organization User</td><td><?= h($employees_designation_history->org_user_id) ?></td></tr>
                <tr><td class="text-right">Organization Designation</td><td><?= h($employees_designation_history->org_designation_id) ?></td></tr>
                <tr><td class="text-right">Organization</td><td><?= h($employees_designation_history->org_organization_id) ?></td></tr>
                <tr><td class="text-right">Posting Date</td><td><?= h($employees_designation_history->posting_date) ?></td></tr>
                <tr><td class="text-right">Release Date</td><td><?= h($employees_designation_history->relase_date) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($employees_designation_history->status) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Employee Designation', ['action' => 'edit', $employees_designation_history->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Employee Designation List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>