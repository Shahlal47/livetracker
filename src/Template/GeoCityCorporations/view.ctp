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

                <tr><td class="text-right">City Corporation Name in Bangla</td><td><?= h($geo_city_corporation->city_corporation_name_bng) ?></td></tr>
                <tr><td class="text-right">City Corporation Name in English</td><td><?= h($geo_city_corporation->city_corporation_name_eng) ?></td></tr>
                <tr><td class="text-right">Geo District</td><td><?= h($geo_city_corporation->geo_district_id) ?></td></tr>
                <tr><td class="text-right">Geo Division</td><td><?= h($geo_city_corporation->geo_division_id) ?></td></tr>
                <tr><td class="text-right">BBS Code</td><td><?= h($geo_city_corporation->bbs_code) ?></td></tr>
                <tr><td class="text-right">District BBS Code</td><td><?= h($geo_city_corporation->district_bbs_code) ?></td></tr>
                <tr><td class="text-right">Division BBS Code</td><td><?= h($geo_city_corporation->division_bbs_code) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This City Corporation', ['action' => 'edit', $geo_city_corporation->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to City Corporation List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>

            </table>
        </div>
    </div>
</div>
