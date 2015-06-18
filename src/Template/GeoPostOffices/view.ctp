<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>View Post Office</div>
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
                <tr><td class="text-right">Post Office Name in Bangla</td><td><?= h($geo_post_office->postoffice_name_bng) ?></td></tr>
                <tr><td class="text-right">Post Office Name in English</td><td><?= h($geo_post_office->postoffice_name_eng) ?></td></tr>
                <tr><td class="text-right">Geo Division</td><td><?= h($geo_post_office->geo_district_id) ?></td></tr>
                <tr><td class="text-right">BBS Code</td><td><?= h($geo_post_office->bbs_code) ?></td></tr>
                <tr><td class="text-right">Division BBS Code</td><td><?= h($geo_post_office->district_bbs_code) ?></td></tr>
                <tr><td class="text-right">Status</td><td><?= h($geo_post_office->status) ?></td></tr>
                <tr>
                    <td><?= $this->Html->link('Edit This Post Office', ['action' => 'edit', $geo_post_office->id], array('class' => 'btn btn-primary pull-right')) ?></td>
                    <td><?= $this->Html->link('Back to Post Office List', ['action' => 'index'], array('class' => 'btn btn-primary pull-left')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>