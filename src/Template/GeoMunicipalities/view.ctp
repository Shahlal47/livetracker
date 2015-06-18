<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Municipality</div>
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

        <tr><td class="text-right">Municipal Name in Bangla</td><td><?= h($geo_municipalities->municipality_name_bd) ?></td></tr>
        <tr><td class="text-right">Municipal Name in English</td><td><?= h($geo_municipalities->municipality_name_en) ?></td></tr>
        <tr><td class="text-right">BBS Code</td><td><?= h($geo_municipalities->municipality_bbs_code) ?></td></tr>
        <tr><td class="text-right">Upazila BBS Code</td><td><?= h($geo_municipalities->upazila_bbs_code) ?></td></tr>
        <tr><td class="text-right">District BBS Code</td><td><?= h($geo_municipalities->district_bbs_code) ?></td></tr>
        <tr><td class="text-right">Upazila</td><td><?= h($geo_municipalities->upazila_id) ?></td></tr>
        <tr><td class="text-right">District</td><td><?= h($geo_municipalities->district_id) ?></td></tr>
        <tr><td class="text-right">Status</td><td><?= h($geo_municipalities->status) ?></td></tr>

                <tr>
                    <td><?= $this->Html->link('Edit This Municipality', ['action' => 'edit', $geo_municipalities->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Municipality List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>

            </table>
        </div>
    </div>
</div>
