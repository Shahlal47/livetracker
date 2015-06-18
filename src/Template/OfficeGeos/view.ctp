<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Office Geos</div>
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
                <tr><td class="text-right">Office Organization</td><td><?= h($office_geos->org_organization_id) ?></td></tr>
                <tr><td class="text-right">Geo Division</td><td><?= h($office_geos->geo_division_id) ?></td></tr>
                <tr><td class="text-right">Geo District</td><td><?= h($office_geos->geo_district_id) ?></td></tr>
                <tr><td class="text-right">Geo Upazila</td><td><?= h($office_geos->geo_upazila_id) ?></td></tr>
                <tr><td class="text-right">Geo Union</td><td><?= h($office_geos->geo_union_id) ?></td></tr>
                <tr><td class="text-right">Geo City Corporation</td><td><?= h($office_geos->geo_city_corporation_id) ?></td></tr>
                <tr><td class="text-right">Geo Municipality</td><td><?= h($office_geos->geo_municipality_id) ?></td></tr>
                <tr><td class="text-right">Thana</td><td><?= h($office_geos->thana) ?></td></tr>
                <tr><td class="text-right">Ward</td><td><?= h($office_geos->ward) ?></td></tr>
                <tr><td class="text-right">Deleted or Not</td><td><?= h($office_geos->isdeleted) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($office_geos->status) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Office Geos', ['action' => 'edit', $office_geos->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Office Geos List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>