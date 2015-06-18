<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Union</div>
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

                <tr><td class="text-right">Union Name in Bangla</td><td><?= h($geo_union->union_name_bng) ?></td></tr>
                <tr><td class="text-right">Union Name in English</td><td><?= h($geo_union->union_name_eng) ?></td></tr>
                <tr><td class="text-right">Geo Upazila</td><td><?= h($geo_union->geo_upazila_id) ?></td></tr>
                <tr><td class="text-right">Geo District</td><td><?= h($geo_union->geo_district_id) ?></td></tr>
                <tr><td class="text-right">BBS Code</td><td><?= h($geo_union->bbs_code) ?></td></tr>
                <tr><td class="text-right">Upazila BBS Code</td><td><?= h($geo_union->upazila_bbs_code) ?></td></tr>
                <tr><td class="text-right">District BBS Code</td><td><?= h($geo_union->district_bbs_code) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($geo_union->status) ?></td></tr>

                <tr>
                    <td><?= $this->Html->link('Edit This Union', ['action' => 'edit', $geo_union->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Union List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>