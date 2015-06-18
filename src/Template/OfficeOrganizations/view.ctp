<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Office Organization</div>
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
                <tr><td class="text-right">Organization Code</td><td><?= h($office_organizations->org_code) ?></td></tr>
                <tr><td class="text-right">Organization Title Bangla</td><td><?= h($office_organizations->org_title_bng) ?></td></tr>
                <tr><td class="text-right">Organization Title English</td><td><?= h($office_organizations->org_tile_eng) ?></td></tr>
                <tr><td class="text-right">Parent</td><td><?= h($office_organizations->parent) ?></td></tr>
                <tr><td class="text-right">Head Organization</td><td><?= h($office_organizations->head_org) ?></td></tr>
                <tr><td class="text-right">Organization Type</td><td><?= h($office_organizations->org_type) ?></td></tr>
                <tr><td class="text-right">Child Organization</td><td><?= h($office_organizations->org_child) ?></td></tr>
                <tr><td class="text-right">File Code</td><td><?= h($office_organizations->file_code) ?></td></tr>
                <tr><td class="text-right">Address</td><td><?= h($office_organizations->address) ?></td></tr>
                <tr><td class="text-right">Deleted or Not</td><td><?= h($office_organizations->isdeleted) ?></td></tr>
                <tr><td class="text-right">Web URL</td><td><?= h($office_organizations->web_url) ?></td></tr>
                <tr><td class="text-right">GIS Coordinate</td><td><?= h($office_organizations->gis_coordinate) ?></td></tr>
                <tr><td class="text-right">About Organization</td><td><?= h($office_organizations->about_info) ?></td></tr>
                <tr><td class="text-right">Version</td><td><?= h($office_organizations->version) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($office_organizations->status) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Office Organization', ['action' => 'edit', $office_organizations->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Office Organization List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>