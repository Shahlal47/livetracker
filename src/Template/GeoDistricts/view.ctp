<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Edit City Corporation</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">

<!--<div class="col-md-8 col-md-offset-2">-->
        <div class="panel-body">
    <table class="table table-bordered">

        <tr><td class="text-right">District Name in Bangla</td><td><?= h($geo_district->district_name_bng) ?></td></tr>
        <tr><td class="text-right">District Name in English</td><td><?= h($geo_district->district_name_eng) ?></td></tr>
        <tr><td class="text-right">Geo Division</td><td><?= h($geo_district->geo_division_id) ?></td></tr>
        <tr><td class="text-right">BBS Code</td><td><?= h($geo_district->bbs_code) ?></td></tr>
        <tr><td class="text-right">Division BBS Code</td><td><?= h($geo_district->division_bbs_code) ?></td></tr>
        <tr><td class="text-right">Status</td><td><?= h($geo_district->status) ?></td></tr>

        <tr>
            <td><?= $this->Html->link('Edit This City Corporation', ['action' => 'edit', $geo_district->id], array('class' => 'btn btn-primary pull-right')) ?></td>
            <td><?= $this->Html->link('Back to City Corporation List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
        </tr>

    </table>
        </div>
    </div>
</div>
