<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Organization Structure</div>
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
                <tr><td class="text-right">Office Organization</td><td><?= h($office_organization_structure->org_organization_id) ?></td></tr>
                <tr><td class="text-right">Name in Bangla</td><td><?= h($office_organization_structure->title_bng) ?></td></tr>
                <tr><td class="text-right">Name in English</td><td><?= h($office_organization_structure->title_eng) ?></td></tr>
                <tr><td class="text-right">Level</td><td><?= h($office_organization_structure->org_level) ?></td></tr>
                <tr><td class="text-right">Sequence</td><td><?= h($office_organization_structure->sequence) ?></td></tr>
                <tr><td class="text-right">Structure Type</td><td><?= h($office_organization_structure->structure_type) ?></td></tr>
                <tr><td class="text-right">Des Division</td><td><?= h($office_organization_structure->Des_div) ?></td></tr>
                <tr><td class="text-right">Parent</td><td><?= h($office_organization_structure->parent) ?></td></tr>
                <tr><td class="text-right">Deleted or Not</td><td><?= h($office_organization_structure->isdeleted) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Organization Structure', ['action' => 'edit', $office_organization_structure->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Organization Structure List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>