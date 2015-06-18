<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Office Employee History List
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <?= $this->Html->link('Add New', ['action' => 'add'], ['class' => 'btn btn-success']) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print </a></li>
                                    <li><a href="#">Save as PDF </a></li>
                                    <li><a href="#">Export to Excel </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>National ID</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX">
                        <?php
                        foreach ($query as $rows):
                        ?>
                    <tr>
                        <td><?php echo $rows['fullname_eng']; ?></td>
                        <td><?php echo $rows['mobile_no']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['gender']; ?></td>
                        <td><?php echo $rows['nid']; ?></td>
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
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>