<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Office User</div>
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
                <tr><td class="text-right">System Code</td><td><?= h($office_users->sys_code) ?></td></tr>
                <tr><td class="text-right">Employee</td><td><?= h($office_users->org_employee_id) ?></td></tr>
                <tr><td class="text-right">Service Number</td><td><?= h($office_users->service_no) ?></td></tr>
                <tr><td class="text-right">Mobile Number</td><td><?= h($office_users->mobile_no) ?></td></tr>
                <tr><td class="text-right">Email</td><td><?= h($office_users->email) ?></td></tr>
                <tr><td class="text-right">Password Expiry Date</td><td><?= h($office_users->password_expiry_date) ?></td></tr>
                <tr><td class="text-right">Security Question</td><td><?= h($office_users->security_ques) ?></td></tr>
                <tr><td class="text-right">Security Question Answer</td><td><?= h($office_users->securiry_ques_answer) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($office_users->status) ?></td></tr>
                <tr><td class="text-right">Deleted or Not</td><td><?= h($office_users->is_deleted) ?></td></tr>
                <tr><td class="text-right">Locked or Not</td><td><?= h($office_users->is_locked) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Office User', ['action' => 'edit', $office_users->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Office User List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>