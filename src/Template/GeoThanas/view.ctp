<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Thana</div>
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
                <tr><td class="text-right">Thana Name in Bangla</td><td><?= h($geo_thana->thana_name_bng) ?></td></tr>
                <tr><td class="text-right">Thana Name in English</td><td><?= h($geo_thana->thana_name_eng) ?></td></tr>
                <tr><td class="text-right">District</td><td><?= h($geo_thana->district_id) ?></td></tr>
                <tr><td class="text-right">BBS Code</td><td><?= h($geo_thana->bbs_code) ?></td></tr>
                <tr><td class="text-right">District BBS Code</td><td><?= h($geo_thana->district_bbs_code) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($geo_thana->status) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Thana', ['action' => 'edit', $geo_thana->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Thana List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>