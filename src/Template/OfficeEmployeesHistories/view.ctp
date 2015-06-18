<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i> Office Employee History Details</div>
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
                <tr><td class="text-right">Full Name in Bangla</td><td><?= h($office_employee_history->fullname_bng) ?></td></tr>
                <tr><td class="text-right">Full Name in English</td><td><?= h($office_employee_history->fullname_eng) ?></td></tr>
                <tr><td class="text-right">System Code</td><td><?= h($office_employee_history->sys_code) ?></td></tr>
                <tr><td class="text-right">Father Name in English</td><td><?= h($office_employee_history->fathername_eng) ?></td></tr>
                <tr><td class="text-right">Father Name in Bangla</td><td><?= h($office_employee_history->mothername_bng) ?></td></tr>
                <tr><td class="text-right">Mother Name in English</td><td><?= h($office_employee_history->mothername_eng) ?></td></tr>
                <tr><td class="text-right">Mother Name in Bangla</td><td><?= h($office_employee_history->fathername_bng) ?></td></tr>
                <tr><td class="text-right">Permanent Village</td><td><?= h($office_employee_history->parmanent_village) ?></td></tr>
                <tr><td class="text-right">Permanent Post Office</td><td><?= h($office_employee_history->parmanent_postoffice) ?></td></tr>
                <tr><td class="text-right">Permanent Thana</td><td><?= h($office_employee_history->parmanent_thana) ?></td></tr>
                <tr><td class="text-right">Permanent District</td><td><?= h($office_employee_history->parmanent_district) ?></td></tr>
                <tr><td class="text-right">Present Village</td><td><?= h($office_employee_history->present_village) ?></td></tr>
                <tr><td class="text-right">Present Post Office</td><td><?= h($office_employee_history->present_postoffice) ?></td></tr>
                <tr><td class="text-right">Present Thana</td><td><?= h($office_employee_history->present_thana) ?></td></tr>
                <tr><td class="text-right">Present District</td><td><?= h($office_employee_history->present_district) ?></td></tr>
                <tr><td class="text-right">Birth Registration Number</td><td><?= h($office_employee_history->birth_reg_no) ?></td></tr>
                <tr><td class="text-right">Birth Date</td><td><?= h($office_employee_history->birth_date) ?></td></tr>
                <tr><td class="text-right">Blood Group</td><td><?= h($office_employee_history->blood_group) ?></td></tr>
                <tr><td class="text-right">Nationality</td><td><?= h($office_employee_history->nationality) ?></td></tr>
                <tr><td class="text-right">National ID</td><td><?= h($office_employee_history->nid) ?></td></tr>
                <tr><td class="text-right">Image File Name</td><td><?= h($office_employee_history->image_file_name) ?></td></tr>
                <tr><td class="text-right">Signature File Name</td><td><?= h($office_employee_history->signature_file_name) ?></td></tr>
                <tr><td class="text-right">Telephone Number</td><td><?= h($office_employee_history->telephone_no) ?></td></tr>
                <tr><td class="text-right">Mobile Number</td><td><?= h($office_employee_history->mobile_no) ?></td></tr>
                <tr><td class="text-right">Email</td><td><?= h($office_employee_history->email) ?></td></tr>
                <tr><td class="text-right">Gender</td><td><?= h($office_employee_history->gender) ?></td></tr>
                <tr><td class="text-right">Marital Status</td><td><?= h($office_employee_history->marital_status) ?></td></tr>
                <tr><td class="text-right">Spouse Name in English</td><td><?= h($office_employee_history->spouse_name_bng) ?></td></tr>
                <tr><td class="text-right">Spouse Name in Bangla</td><td><?= h($office_employee_history->spouse_name_eng) ?></td></tr>
                <tr><td class="text-right">Religion</td><td><?= h($office_employee_history->religion) ?></td></tr>
                <tr><td class="text-right">Max Educational Qualification</td><td><?= h($office_employee_history->max_educational_qualification) ?></td></tr>
                <tr><td class="text-right">Cadre or Not</td><td><?= h($office_employee_history->iscadre) ?></td></tr>
                <tr><td class="text-right">Batch</td><td><?= h($office_employee_history->batch) ?></td></tr>
                <tr><td class="text-right">Grade</td><td><?= h($office_employee_history->grade) ?></td></tr>
                <tr><td class="text-right">Rank</td><td><?= h($office_employee_history->rank) ?></td></tr>
                <tr><td class="text-right">Service Number</td><td><?= h($office_employee_history->service_no) ?></td></tr>
                <tr><td class="text-right">Service Joining Date</td><td><?= h($office_employee_history->service_join_date) ?></td></tr>
                <tr><td class="text-right">Current Posting Date</td><td><?= h($office_employee_history->present_posting_date) ?></td></tr>
                <tr><td class="text-right">Organization ID</td><td><?= h($office_employee_history->office_organization_id) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($office_employee_history->status) ?></td></tr>
                <tr><td class="text-right">Deleted or Not</td><td><?= h($office_employee_history->isdeleted) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Employee History', ['action' => 'edit', $office_employee_history->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Employee History List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>