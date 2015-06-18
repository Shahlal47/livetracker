<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i> Office Employee Details</div>
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
                <tr><td class="text-right">Full Name in Bangla</td><td><?= h($office_employee->fullname_bng) ?></td></tr>
                <tr><td class="text-right">Full Name in English</td><td><?= h($office_employee->fullname_eng) ?></td></tr>
                <tr><td class="text-right">System Code</td><td><?= h($office_employee->sys_code) ?></td></tr>
                <tr><td class="text-right">Father Name in English</td><td><?= h($office_employee->fathername_eng) ?></td></tr>
                <tr><td class="text-right">Father Name in Bangla</td><td><?= h($office_employee->mothername_bng) ?></td></tr>
                <tr><td class="text-right">Mother Name in English</td><td><?= h($office_employee->mothername_eng) ?></td></tr>
                <tr><td class="text-right">Mother Name in Bangla</td><td><?= h($office_employee->fathername_bng) ?></td></tr>
                <tr><td class="text-right">Permanent Village</td><td><?= h($office_employee->parmanent_village) ?></td></tr>
                <tr><td class="text-right">Permanent Post Office</td><td><?= h($office_employee->parmanent_postoffice) ?></td></tr>
                <tr><td class="text-right">Permanent Thana</td><td><?= h($office_employee->parmanent_thana) ?></td></tr>
                <tr><td class="text-right">Permanent District</td><td><?= h($office_employee->parmanent_district) ?></td></tr>
                <tr><td class="text-right">Present Village</td><td><?= h($office_employee->present_village) ?></td></tr>
                <tr><td class="text-right">Present Post Office</td><td><?= h($office_employee->present_postoffice) ?></td></tr>
                <tr><td class="text-right">Present Thana</td><td><?= h($office_employee->present_thana) ?></td></tr>
                <tr><td class="text-right">Present District</td><td><?= h($office_employee->present_district) ?></td></tr>
                <tr><td class="text-right">Birth Registration Number</td><td><?= h($office_employee->birth_reg_no) ?></td></tr>
                <tr><td class="text-right">Birth Date</td><td><?= h($office_employee->birth_date) ?></td></tr>
                <tr><td class="text-right">Blood Group</td><td><?= h($office_employee->blood_group) ?></td></tr>
                <tr><td class="text-right">Nationality</td><td><?= h($office_employee->nationality) ?></td></tr>
                <tr><td class="text-right">National ID</td><td><?= h($office_employee->nid) ?></td></tr>
                <tr><td class="text-right">Image File Name</td><td><?= h($office_employee->image_file_name) ?></td></tr>
                <tr><td class="text-right">Signature File Name</td><td><?= h($office_employee->signature_file_name) ?></td></tr>
                <tr><td class="text-right">Telephone Number</td><td><?= h($office_employee->telephone_no) ?></td></tr>
                <tr><td class="text-right">Mobile Number</td><td><?= h($office_employee->mobile_no) ?></td></tr>
                <tr><td class="text-right">Email</td><td><?= h($office_employee->email) ?></td></tr>
                <tr><td class="text-right">Gender</td><td><?= h($office_employee->gender) ?></td></tr>
                <tr><td class="text-right">Marital Status</td><td><?= h($office_employee->marital_status) ?></td></tr>
                <tr><td class="text-right">Spouse Name in English</td><td><?= h($office_employee->spouse_name_bng) ?></td></tr>
                <tr><td class="text-right">Spouse Name in Bangla</td><td><?= h($office_employee->spouse_name_eng) ?></td></tr>
                <tr><td class="text-right">Religion</td><td><?= h($office_employee->religion) ?></td></tr>
                <tr><td class="text-right">Max Educational Qualification</td><td><?= h($office_employee->max_educational_qualification) ?></td></tr>
                <tr><td class="text-right">Cadre or Not</td><td><?= h($office_employee->iscadre) ?></td></tr>
                <tr><td class="text-right">Batch</td><td><?= h($office_employee->batch) ?></td></tr>
                <tr><td class="text-right">Grade</td><td><?= h($office_employee->grade) ?></td></tr>
                <tr><td class="text-right">Rank</td><td><?= h($office_employee->rank) ?></td></tr>
                <tr><td class="text-right">Service Number</td><td><?= h($office_employee->service_no) ?></td></tr>
                <tr><td class="text-right">Service Joining Date</td><td><?= h($office_employee->service_join_date) ?></td></tr>
                <tr><td class="text-right">Current Posting Date</td><td><?= h($office_employee->present_posting_date) ?></td></tr>
                <tr><td class="text-right">Organization ID</td><td><?= h($office_employee->office_organization_id) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($office_employee->status) ?></td></tr>
                <tr><td class="text-right">Deleted or Not</td><td><?= h($office_employee->isdeleted) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Office Employee', ['action' => 'edit', $office_employee->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Office Employee List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>