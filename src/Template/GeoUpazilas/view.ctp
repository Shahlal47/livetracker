<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Upazila</div>
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

                <tr><td class="text-right">Upazila Name in Bangla</td><td><?= h($geo_upazila->upazila_name_bng) ?></td></tr>
                <tr><td class="text-right">Upazila Name in English</td><td><?= h($geo_upazila->upazila_name_eng) ?></td></tr>
                <tr><td class="text-right">Geo District</td><td><?= h($geo_upazila->geo_district_id) ?></td></tr>
                <tr><td class="text-right">BBS Code</td><td><?= h($geo_upazila->bbs_code) ?></td></tr>
                <tr><td class="text-right">District BBS Code</td><td><?= h($geo_upazila->district_bbs_code) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($geo_upazila->status) ?></td></tr>

                <tr>
                    <td><?= $this->Html->link('Edit This Upazila', ['action' => 'edit', $geo_upazila->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Upazila List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>