<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Municipality Ward</div>
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

        <tr><td class="text-right">Ward Name in Bangla</td><td><?= h($geo_municipality_wards->ward_name_bng) ?></td></tr>
        <tr><td class="text-right">Ward Name in English</td><td><?= h($geo_municipality_wards->ward_name_eng) ?></td></tr>
        <tr><td class="text-right">BBS Code</td><td><?= h($geo_municipality_wards->bbs_code) ?></td></tr>
        <tr><td class="text-right">Municipality BBS Code</td><td><?= h($geo_municipality_wards->municipality_bbs_code) ?></td></tr>
        <tr><td class="text-right">Upazila BBS Code</td><td><?= h($geo_municipality_wards->upazila_bbs_code) ?></td></tr>
        <tr><td class="text-right">District BBS Code</td><td><?= h($geo_municipality_wards->district_bbs_code) ?></td></tr>
        <tr><td class="text-right">Municipality</td><td><?= h($geo_municipality_wards->geo_municipality_id) ?></td></tr>
        <tr><td class="text-right">Upazila</td><td><?= h($geo_municipality_wards->geo_upazila_id) ?></td></tr>
        <tr><td class="text-right">District</td><td><?= h($geo_municipality_wards->geo_district_id) ?></td></tr>
        <tr><td class="text-right">Status</td><td><?= h($geo_municipality_wards->status) ?></td></tr>

                <tr>
                    <td><?= $this->Html->link('Edit This Municipality Ward', ['action' => 'edit', $geo_municipality_wards->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Municipality Ward List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>

            </table>
        </div>
    </div>
</div>