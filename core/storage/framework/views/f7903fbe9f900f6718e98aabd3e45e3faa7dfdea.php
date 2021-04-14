<?php $__env->startSection('panel'); ?>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="table-responsive table-responsive-xl">
                <table class="table align-items-center table-light">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Withdrawal Code</th>
                            <th scope="col">Username</th>
                            <th scope="col">Withdrawal Method</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Charge</th>
                            <th scope="col">Payable Amount</th>
                            <th scope="col">User Will Get</th>
                            <?php if(request()->routeIs('admin.withdraw.pending')): ?>
                            <th scope="col">Action</th>
                            <?php elseif(request()->routeIs('admin.withdraw.log') || request()->routeIs('admin.withdraw.search')): ?>
                            <th scope="col">Status</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $now = \Carbon\Carbon::now(); ?>
                        <?php $__empty_1 = true; $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdraw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e(show_datetime($withdraw->created_at)); ?></td>

                            <td class="font-weight-bold"><?php echo e(strtoupper($withdraw->trx)); ?></td>
                            
                            <td><a href="<?php echo e(route('admin.users.detail', $withdraw->user->id)); ?>"><?php echo e($withdraw->user->username); ?></a></td>

                            <td><?php echo e($withdraw->method->name); ?></td>

                            <td class="budget"><?php echo e($general->cur_sym); ?> <?php echo e(formatter_money($withdraw->amount)); ?> </td>

                            <td class="budget text-danger"><?php echo e($general->cur_sym); ?> <?php echo e(formatter_money($withdraw->charge)); ?> </td>

                            <?php $payable = $withdraw->amount + $withdraw->charge; ?>
                            <td class="budget"><?php echo e($general->cur_sym); ?> <?php echo e(formatter_money($payable)); ?> </td>

                            <td class="budget"><?php echo e(formatter_money($withdraw->rate * $withdraw->amount)); ?> <?php echo e($withdraw->currency); ?> </td>
                            <?php if(request()->routeIs('admin.withdraw.pending')): ?>
                            <td>

                                <?php
                                    $details = ($withdraw->detail != null) ? $withdraw->detail : '';
                                    $proveImg = "<img src='".get_image(config('constants.deposit.verify.path').'/'.$withdraw->verify_image)."' alt=''>";
                                ?>

                                <button class="btn btn-success approveBtn" data-prove_img="<?php echo $proveImg ?>" data-detail="<?php echo e($details); ?>"  data-id="<?php echo e($withdraw->id); ?>" data-amount="<?php echo e(formatter_money($withdraw->amount)); ?> <?php echo e($withdraw->currency); ?>" data-username="<?php echo e($withdraw->user->username); ?>"><i class="fa fa-fw fa-check"></i></button>
                                <button class="btn btn-danger rejectBtn" data-prove_img="<?php echo $proveImg ?>" data-detail="<?php echo e($details); ?>"  data-id="<?php echo e($withdraw->id); ?>" data-amount="<?php echo e(formatter_money($withdraw->amount)); ?> <?php echo e($withdraw->currency); ?>" data-username="<?php echo e($withdraw->user->username); ?>"><i class="fa fa-fw fa-ban"></i></button>

                            </td>
                            <?php elseif(request()->routeIs('admin.withdraw.log') || request()->routeIs('admin.withdraw.search')): ?>
                            <td>
                                <?php if($withdraw->status == 0): ?>
                                <span class="badge badge-warning">Pending</span>
                                <?php elseif($withdraw->status == 1): ?>
                                <span class="badge badge-success">Approved</span>
                                <?php elseif($withdraw->status == 2): ?>
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
                    <?php echo e($withdrawals->links()); ?>

                </nav>
            </div>
        </div>
    </div>
</div>


<div id="viewModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View User Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="approveModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Approve Withdrawal Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.withdraw.approve')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <p>Are you sure to <span class="font-weight-bold">approve</span> <span class="font-weight-bold withdraw-amount text-success"></span> withdrawal of <span class="font-weight-bold withdraw-user"></span>?</p>
                    <p class="withdraw-detail"></p>
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
                <h5 class="modal-title">Reject Withdrawal Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.withdraw.reject')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <p>Are you sure to <span class="font-weight-bold">reject</span> <span class="font-weight-bold withdraw-amount text-success"></span> withdrawal of <span class="font-weight-bold withdraw-user"></span>?</p>
                    <p class="withdraw-detail"></p>
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


        var details =  Object.entries($(this).data('detail'));
        var list = [];
        details.map( function(item,i) {
            list[i] = ` <li class="list-group-item">${item[0].replace('_'," ")} : ${item[1]}</li>`
        });
        modal.find('.withdraw-detail').html(list);

        modal.modal('show');
    });

    $('.rejectBtn').on('click', function() {
        var modal = $('#rejectModal');
        modal.find('input[name=id]').val($(this).data('id'));
        modal.find('.withdraw-amount').text($(this).data('amount'));
        modal.find('.withdraw-user').text($(this).data('username'));


        var details =  Object.entries($(this).data('detail'));
        var list = [];
        details.map( function(item,i) {
            list[i] = ` <li class="list-group-item">${item[0].replace('_'," ")} : ${item[1]}</li>`
        });
        modal.find('.withdraw-detail').html(list);

        modal.modal('show');
    });

    $('.viewBtn').on('click', function() {
        var modal = $('#viewModal');
        var data = $(this).data('ud');
        var html = `<ul>`;
        $.each(data, function(idx, val) {
            html += `<li>${idx} - ${val}</li>`; 
        });
        html += `</ul>`;
        modal.find('.modal-body').html(html);
        modal.modal('show');
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
<?php if(request()->routeIs('admin.users.withdrawals')): ?> 

<form action="" method="GET" class="form-inline">
    <div class="input-group has_append">
        <input type="text" name="search" class="form-control" placeholder="Withdrawal code" value="<?php echo e($search ?? ''); ?>">
        <div class="input-group-append">
            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
<?php else: ?>
<form action="<?php echo e(route('admin.withdraw.search', $scope ?? str_replace('admin.withdraw.', '', request()->route()->getName()))); ?>" method="GET" class="form-inline">
    <div class="input-group has_append">
        <input type="text" name="search" class="form-control" placeholder="Withdrawal code/Username" value="<?php echo e($search ?? ''); ?>">
        <div class="input-group-append">
            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/withdraw/withdrawals.blade.php ENDPATH**/ ?>