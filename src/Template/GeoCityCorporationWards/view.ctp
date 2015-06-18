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

        <div class="panel-body">
            <div class="col-md-8">
                <table class="table table-bordered">

                    <tr><td class="text-right">Ward Name in Bangla</td><td><?= h($geo_city_corporation_wards->ward_name_bng) ?></td></tr>
                    <tr><td class="text-right">Ward Name in English</td><td><?= h($geo_city_corporation_wards->ward_name_eng) ?></td></tr>
                    <tr><td class="text-right">Geo City Corporation</td><td><?= h($geo_city_corporation_wards->geo_city_corporation_id) ?></td></tr>
                    <tr><td class="text-right">Geo District</td><td><?= h($geo_city_corporation_wards->geo_district_id) ?></td></tr>
                    <tr><td class="text-right">Geo Division</td><td><?= h($geo_city_corporation_wards->geo_division_id) ?></td></tr>
                    <tr><td class="text-right">BBS Code</td><td><?= h($geo_city_corporation_wards->bbs_code) ?></td></tr>
                    <tr><td class="text-right">City Corporation BBS Code</td><td><?= h($geo_city_corporation_wards->city_corporation_bbs_code) ?></td></tr>
                    <tr><td class="text-right">District BBS Code</td><td><?= h($geo_city_corporation_wards->district_bbs_code) ?></td></tr>
                    <tr><td class="text-right">Division BBS Code</td><td><?= h($geo_city_corporation_wards->division_bbs_code) ?></td></tr>
                    <tr><td class="text-right">Status</td><td><?= h($geo_city_corporation_wards->status) ?></td></tr>

                </table>

            <?= $this->Html->link('Edit This Ward', ['action' => 'edit', $geo_city_corporation_wards->id], array('class' => 'btn btn-default')) ?>
            <?= $this->Html->link('Back to Ward List', ['action' => 'index'], array('class' => 'btn btn-default')) ?>
        </div>
    </div>
</div>
