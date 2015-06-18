<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Office Organization History</div>
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
                <tr><td class="text-right">Organization</td><td><?= h($office_organization_histories->org_organization_id) ?></td></tr>
                <tr><td class="text-right">Organization Code</td><td><?= h($office_organization_histories->code) ?></td></tr>
                <tr><td class="text-right">Organization Title Bangla</td><td><?= h($office_organization_histories->title_bng) ?></td></tr>
                <tr><td class="text-right">Organization Title English</td><td><?= h($office_organization_histories->title_eng) ?></td></tr>
                <tr><td class="text-right">Parent</td><td><?= h($office_organization_histories->parent) ?></td></tr>

                <tr><td class="text-right">Head Organization</td><td><?= h($office_organization_histories->head_org) ?></td></tr>
                <tr><td class="text-right">Organization Type</td><td><?= h($office_organization_histories->org_type) ?></td></tr>
                <tr><td class="text-right">Child Organization</td><td><?= h($office_organization_histories->org_child) ?></td></tr>
                <tr><td class="text-right">File Code</td><td><?= h($office_organization_histories->file_code) ?></td></tr>
                <tr><td class="text-right">Address</td><td><?= h($office_organization_histories->address) ?></td></tr>
                <tr><td class="text-right">Deleted or Not</td><td><?= h($office_organization_histories->isdeleted) ?></td></tr>

                <tr><td class="text-right">Web URL</td><td><?= h($office_organization_histories->web_url) ?></td></tr>
                <tr><td class="text-right">GIS Coordinate</td><td><?= h($office_organization_histories->gis_coordinate) ?></td></tr>
                <tr><td class="text-right">About Organization</td><td><?= h($office_organization_histories->about_info) ?></td></tr>
                <tr><td class="text-right">Version</td><td><?= h($office_organization_histories->version) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($office_organization_histories->status) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Organization History', ['action' => 'edit', $office_organization_histories->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Organization History List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>