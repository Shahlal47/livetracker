<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-gift"></i>Office Organization Structure List</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-window-body">
        <?= $this->Html->link('Add New Office Organization Structure', ['action' => 'add'], ['class' => 'btn btn-default']) ?><br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Title in Bangla</th>
                <th>Title in English</th>
                <th>Level</th>
                <th>Sequence</th>
                <th>Deleted or Not</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($query as $rows):
            ?>
            <tr>
                <td><?php echo $rows['title_bng']; ?></td>
                <td><?php echo $rows['title_eng']; ?></td>
                <td><?php echo $rows['level']; ?></td>
                <td><?php echo $rows['sequence']; ?></td>
                <td><?php echo $rows['isdeleted']; ?></td>
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
