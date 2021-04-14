<?php $__env->startSection('panel'); ?>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="table-responsive table-responsive-xl">
                <table class="table align-items-center table-light">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">User</th>
                            <th scope="col">Date</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Ticket</th>
                            <th scope="col">Department</th>
                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td data-label="SL"><?php echo e($loop->index+1); ?></td>
                            <td data-label="User"><a href="<?php echo e(route('admin.users.detail', $item->user_id)); ?>"> <?php echo e($item->user->firstname); ?> <?php echo e($item->user->lastname); ?></a></td>

                            <td data-label="Date"><?php echo e($item->created_at->format('d F, Y H:i A')); ?></td>
                            <td data-label="Subject"><?php echo e($item->subject); ?> </td>
                            <td data-label="Ticket"><?php echo e($item->ticket); ?> </td>

                            <td data-label="Department"><strong><?php echo e($item->department); ?></strong> </td>
                            <td data-label="Status">
                                <?php if($item->status == 0): ?>
                                    <span class="badge badge-primary">Open</span>
                                <?php elseif($item->status == 1): ?>
                                    <span class="badge badge-success ">Answered</span>
                                <?php elseif($item->status == 2): ?>
                                    <span class="badge badge-info ">Customer Replied</span>
                                <?php elseif($item->status == 3): ?>
                                    <span class="badge badge-danger ">Closed</span>
                                <?php endif; ?>
                            </td>
                            <td data-label="Action">
                                <a href="<?php echo e(route('admin.ticket.reply', $item->id)); ?>" class="btn btn-primary btn-sm btn-icon btn-pill"><i
                                        class="fa fa-eye"></i></a>
                            </td>
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
                    <?php echo e($items->appends($_GET)->links()); ?>

                </nav>
            </div>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/support/tickets.blade.php ENDPATH**/ ?>