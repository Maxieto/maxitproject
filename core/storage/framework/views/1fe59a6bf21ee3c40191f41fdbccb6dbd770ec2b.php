

<?php $__env->startSection('panel'); ?>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="table-responsive table-responsive-xl">
                <table class="table align-items-center table-light">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Username</th>
                            <th scope="col">IP</th>
                            <th scope="col">Location</th>
                            <th scope="col">Browser</th>
                            <th scope="col">OS</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $__empty_1 = true; $__currentLoopData = $login_logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e(\Carbon\Carbon::parse($log->created_at)->diffForHumans()); ?></td>
                            <td><a href="<?php echo e(route('admin.users.detail', $log->user->id)); ?>"> <?php echo e($log->user->username); ?></a></td>
                            <td><?php echo e($log->user_ip); ?></td>
                            <td><?php echo e($log->location); ?></td>
                            <td><?php echo e($log->browser); ?></td>
                            <td><?php echo e($log->os); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td class="text-muted text-center" colspan="100%"><?php echo e($empty_message); ?></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer py-4">
                <nav aria-label="...">
                    <?php echo e($login_logs->links()); ?>

                </nav>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
<form action="<?php echo e(route('admin.users.login.history')); ?>" method="GET" class="form-inline">
    <div class="input-group has_append">
        <input type="text" name="search" class="form-control" placeholder="Username" value="<?php echo e($search ?? ''); ?>">
        <div class="input-group-append">
            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/users/logins.blade.php ENDPATH**/ ?>