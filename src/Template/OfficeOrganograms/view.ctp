<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Office Organogram</div>
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
                <tr><td class="text-right">Office Organization</td><td><?= h($office_oraganograms->office_organization_id) ?></td></tr>
                <tr><td class="text-right">Name in Bangla</td><td><?= h($office_oraganograms->title_bng) ?></td></tr>
                <tr><td class="text-right">Name in English</td><td><?= h($office_oraganograms->title_eng) ?></td></tr>
                <tr><td class="text-right">Level</td><td><?= h($office_oraganograms->level) ?></td></tr>
                <tr><td class="text-right">Sequence</td><td><?= h($office_oraganograms->sequence) ?></td></tr>
                <tr><td class="text-right">Auth Group</td><td><?= h($office_oraganograms->auth_role_group_id) ?></td></tr>
                <tr><td class="text-right">Des Division</td><td><?= h($office_oraganograms->Des_div) ?></td></tr>
                <tr><td class="text-right">Parent</td><td><?= h($office_oraganograms->parent) ?></td></tr>
                <tr><td class="text-right">Deleted or Not</td><td><?= h($office_oraganograms->isdeleted) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Office Organogram', ['action' => 'edit', $office_oraganograms->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Office Organogram List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>