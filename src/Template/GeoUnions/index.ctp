<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Union List</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-window-body">
        <?= $this->Html->link('Add New Union', ['action' => 'add'], ['class' => 'btn btn-default']) ?><br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Upazila</th>
                <th>District</th>
                <th>BBS Code</th>
                <th>Upazila BBS Code</th>
                <th>District BBS Code</th>
                <th>Union Name (Bangla)</th>
                <th>Union Name (English)</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($query as $rows):
            ?>
            <tr>
                <td><?php echo $rows['geo_upazila_id']; ?></td>
                <td><?php echo $rows['geo_district_id']; ?></td>
                <td><?php echo $rows['bbs_code']; ?></td>
                <td><?php echo $rows['upazila_bbs_code']; ?></td>
                <td><?php echo $rows['district_bbs_code']; ?></td>
                <td><?php echo $rows['union_name_bng']; ?></td>
                <td><?php echo $rows['union_name_eng']; ?></td>
                <td><?php echo $rows['status']; ?></td>
                <td>
                    <?= $this->Form->postLink(
                        'Delete',
                        ['action' => 'delete', $rows->id],
                        ['class' => 'btn btn-danger'],
                        ['confirm' => 'Are you sure to delete this item?'])
                    ?>
                    <?= $this->Html->link('Edit', ['action' => 'edit', $rows->id], ['class' => 'btn btn-primary']) ?>
                    <?= $this->Html->link('View', ['action' => 'view', $rows->id], ['class' => 'btn btn-success']) ?>

                </td>
            <?php
            endforeach;
            ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>
