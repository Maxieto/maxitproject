<?php $__env->startSection('panel'); ?>
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                
                <div class="table-responsive table-responsive-xl">
                    <table class="table align-items-center table-light">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Deposit Code</th>
                                <th scope="col">Username</th>
                                <th scope="col">Deposit Method</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Charge</th>
                                <th scope="col">Receiveable Amount</th>
                                <th scope="col">In <?php echo e($general->cur_text); ?></th>
                                <?php if(request()->routeIs('admin.deposit.pending') ): ?>
                                <th scope="col">Action</th>
                                <?php elseif(request()->routeIs('admin.deposit.list') || request()->routeIs('admin.deposit.search')): ?>
                                <th scope="col">Status</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php if(!$deposit->gateway): ?> <?php endif; ?>
                                <tr>
                                    <td><?php echo e(show_datetime($deposit->created_at)); ?></td>
                                    <td class="font-weight-bold text-uppercase"><?php echo e($deposit->trx); ?></td>
                                    <td><a href="<?php echo e(route('admin.users.detail', $deposit->user->id)); ?>"><?php echo e($deposit->user->username); ?></a></td>
                                    <td><?php echo e($deposit->gateway->name); ?></td>
                                    <td class="text-primary"><?php echo e($deposit->method_currency); ?><?php echo e(formatter_money($deposit->amount)); ?></td>
                                    <td class="text-danger"><?php echo e($deposit->method_currency); ?><?php echo e(formatter_money($deposit->charge)); ?></td>
                                    <td class="text-success"><?php echo e($deposit->method_currency); ?><?php echo e(formatter_money(bcsub($deposit->amount,$deposit->charge))); ?></td>
                                    <td><?php echo e($general->cur_sym); ?><?php echo e(formatter_money(bcmul($deposit->amount, $deposit->rate))); ?></td>
                                    <?php if(request()->routeIs('admin.deposit.pending')): ?>

                                        <?php
                                            $details = ($deposit->detail != null) ? $deposit->detail : '';
                                            $proveImg = "<img src='".get_image(config('constants.deposit.verify.path').'/'.$deposit->verify_image)."' alt=''>";
                                        ?>

                                        <td>

                                            <button class="btn btn-success approveBtn"  data-prove_img="<?php echo $proveImg ?>" data-detail="<?php echo e($details); ?>" data-id="<?php echo e($deposit->id); ?>" data-amount="<?php echo e(formatter_money($deposit->amount)); ?> <?php echo e($deposit->method_currency); ?>" data-username="<?php echo e($deposit->user->username); ?>"><i class="fa fa-fw fa-check"></i></button>
                                            <button class="btn btn-danger rejectBtn" data-prove_img="<?php echo $proveImg ?>" data-detail="<?php echo e($details); ?>" data-id="<?php echo e($deposit->id); ?>" data-amount="<?php echo e(formatter_money($deposit->amount)); ?> <?php echo e($deposit->method_currency); ?>" data-username="<?php echo e($deposit->user->username); ?>"><i class="fa fa-fw fa-ban"></i></button>
                                        </td>
                                    <?php elseif(request()->routeIs('admin.deposit.list')  || request()->routeIs('admin.deposit.search')): ?>
                                        <td>
                                            <?php if($deposit->status == 0): ?>
                                            <span class="badge badge-warning">Pending</span>
                                            <?php elseif($deposit->status == 1): ?>
                                            <span class="badge badge-success">Approved</span>
                                            <?php elseif($deposit->status == 2): ?>
                                            <span class="badge badge-danger">Rejected</span>
                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>
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
                        <?php echo e($deposits->links()); ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>

    

<div id="approveModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Approve Deposit Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.deposit.approve')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <p>Are you sure to <span class="font-weight-bold">approve</span> <span class="font-weight-bold withdraw-amount text-success"></span> deposit of <span class="font-weight-bold withdraw-user"></span>?</p>
                    <p class="withdraw-detail"></p>

                    <span class="withdraw-proveImg"></span>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Approve</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="rejectModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reject Deposit Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.deposit.reject')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <p>Are you sure to <span class="font-weight-bold">reject</span> <span class="font-weight-bold withdraw-amount text-success"></span> deposit of <span class="font-weight-bold withdraw-user"></span>?</p>

                    <p class="withdraw-detail"></p>
                    <span class="withdraw-proveImg"></span>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Reject</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    $('.approveBtn').on('click', function() {
        var modal = $('#approveModal');
        modal.find('input[name=id]').val($(this).data('id'));
        modal.find('.withdraw-amount').text($(this).data('amount'));
        modal.find('.withdraw-user').text($(this).data('username'));

        modal.find('.withdraw-proveImg').html($(this).data('prove_img'));

        var details =  Object.entries($(this).data('detail'));
        var list = [];
        details.map( function(item,i) {
            list[i] = ` <li class="list-group-item">${item[0]} : ${item[1]}</li>`
        });
        modal.find('.withdraw-detail').html(list);

        modal.modal('show');
    });

    $('.rejectBtn').on('click', function() {
        var modal = $('#rejectModal');
        modal.find('input[name=id]').val($(this).data('id'));
        modal.find('.withdraw-amount').text($(this).data('amount'));
        modal.find('.withdraw-user').text($(this).data('username'));
        modal.find('.withdraw-proveImg').html($(this).data('prove_img'));

        var details =  Object.entries($(this).data('detail'));
        var list = [];
        details.map( function(item,i) {
            list[i] = ` <li class="list-group-item">${item[0]} : ${item[1]}</li>`
        });
        modal.find('.withdraw-detail').html(list);


        modal.modal('show');
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
<?php if(request()->routeIs('admin.users.deposits')): ?>
<form action="" method="GET" class="form-inline">
    <div class="input-group has_append">
        <input type="text" name="search" class="form-control" placeholder="Deposit code" value="<?php echo e($search ?? ''); ?>">
        <div class="input-group-append">
        <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
<?php else: ?>
<form action="<?php echo e(route('admin.deposit.search', $scope ?? str_replace('admin.deposit.', '', request()->route()->getName()))); ?>" method="GET" class="form-inline">
    <div class="input-group has_append">
        <input type="text" name="search" class="form-control" placeholder="Deposit code/Username" value="<?php echo e($search ?? ''); ?>">
        <div class="input-group-append">
        <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/deposit_list.blade.php ENDPATH**/ ?>