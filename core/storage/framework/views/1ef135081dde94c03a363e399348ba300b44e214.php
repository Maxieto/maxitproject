<?php $__env->startSection('panel'); ?>



    <div class="row">

        <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <ul class="list-group">
                                        <li class="list-group-item" style="font-weight: bold">Name: <?php echo e($data->name); ?></li>
                                        <li class="list-group-item">Time:  <?php echo e($data->time); ?> Hours</li>
                                    </ul>

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#editModal<?php echo e($data->id); ?>" data-toggle="modal" class="btn btn-primary btn-block">Edit</a>
                                </div>

                                <div class="col-6">
                                    <a href="#delModal<?php echo e($data->id); ?>" data-toggle="modal" class="btn btn-danger btn-block">Delete</a>
                                </div>

                            </div>
                        </div>
                    </div>

            </div>



            <div id="delModal<?php echo e($data->id); ?>" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form role="form" action="<?php echo e(route('admin.time-destroy', $data->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <div class="modal-body">
                                <strong class="text-dark">Are you sure to delete this?</strong>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editModal<?php echo e($data->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel"> Edit Time</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
                        </div>
                        <form id="frmProducts" method="post" action="<?php echo e(route('admin.time-update', $data->id)); ?>" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="modal-body">

                                <div class="form-group">
                                    <strong>Time Name: </strong>
                                    <input type="text" class="form-control" value="<?php echo e($data->name); ?>"  name="name"  required>
                                </div>

                                <div class="form-group">
                                    <strong>Time in Hours</strong>
                                    <div class="input-group">
                                        <input type="number" class="form-control"  name="time" value="<?php echo e($data->time); ?>"  required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Hours</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                <button type="submit" class="btn btn-primary bold uppercase"><i class="fa fa-send"></i> Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> Add New Time</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
                </div>
                <form id="frmProducts" method="post" action="<?php echo e(route('admin.time-store')); ?>" class="form-horizontal" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">

                        <div class="form-group">
                            <strong>Time Name: </strong>
                            <input type="text" class="form-control"  name="name"  required>
                        </div>

                        <div class="form-group">
                            <strong>Time in Hours</strong>
                            <div class="input-group">
                                <input type="number" class="form-control"  name="time"  required>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Hours</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-primary bold uppercase"><i class="fa fa-send"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
    <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success"><i class="fa fa-fw fa-plus"></i>Add New</button>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/time_setting/index.blade.php ENDPATH**/ ?>