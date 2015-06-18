

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-cogs"></i>Register User List</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Html->link(__('Create New User'), ['action' => 'add'], ['class' => 'btn btn-default']) ?>
        <div class="table-scrollable">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th class="text-center"><?= $this->Paginator->sort('id') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('name') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('email') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('profiles_id') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('created') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions text-center"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->profiles_id) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td>
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-success']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>