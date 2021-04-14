<?php $__env->startSection('panel'); ?>


    <div class="row">

        <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h3><?php echo e($data->name); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group">
                                    <?php if($data->fixed_amount == 0): ?>
                                        <li class="list-group-item"><p>Invest Min-Max Amount:
                                                <strong> <?php echo e($general->cur_sym); ?> <?php echo e($data->minimum); ?>

                                                    - <?php echo e($general->cur_sym); ?> <?php echo e($data->maximum); ?></strong></p></li>
                                    <?php else: ?>
                                        <li class="list-group-item"><p>Fixed Invest Amount:
                                                <strong> <?php echo e($general->cur_sym); ?> <?php echo e($data->maximum); ?></strong></p></li>
                                    <?php endif; ?>

                                    <li class="list-group-item"><p>Interest :
                                            <strong><?php echo e($data->interest); ?> <?php if($data->interest_status == 1): ?>
                                                    % <?php else: ?> <?php echo e($general->cur_text); ?> <?php endif; ?></strong></p></li>
                                    <li class="list-group-item">Repeat will every <?php echo e($data->times); ?> Hours
                                        After <?php if($data->lifetime_status == 0): ?> <?php echo e($data->repeat_time); ?> Times <?php endif; ?></li>

                                    <li class="list-group-item"><p> Capital Back: <?php if($data->capital_back_status == 1): ?>
                                                <span
                                                    class="badge badge-success">Yes</span> <?php elseif($data->capital_back_status == 0): ?>
                                                <span class="badge badge-danger">No</span><?php endif; ?></p></li>
                                    <li class="list-group-item"><p>Life Time Status: <?php if($data->lifetime_status == 1): ?>
                                                <span
                                                    class="badge badge-success">Active</span> <?php elseif($data->lifetime_status == 0): ?>
                                                <span class="badge badge-danger">Inactive</span><?php endif; ?></p></li>
                                    <li class="list-group-item"><p>Status: <?php if($data->status == 1): ?> <span
                                                class="badge badge-success">Active</span> <?php elseif($data->status == 0): ?>
                                                <span class="badge badge-danger">Disable</span><?php endif; ?> </p></li>
                                    <li class="list-group-item"><p>Featured: <?php if($data->featured == 1): ?> <span
                                                class="badge badge-success">Yes</span> <?php else: ?> <span
                                                class="badge badge-danger">No</span><?php endif; ?> </p></li>
                                </ul>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-12">
                                <a href="<?php echo e(route('admin.plan-edit',$data->id)); ?>"
                                   class="btn btn-primary btn-block">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="col-md-12">
            <div class="card">
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <?php echo e($plan->links()); ?>

                    </nav>
                </div>
            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>

    <a href="<?php echo e(route('admin.plan-create')); ?>" class="btn btn-success"><i class="fa fa-fw fa-plus"></i>Add New</a>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/plan/index.blade.php ENDPATH**/ ?>