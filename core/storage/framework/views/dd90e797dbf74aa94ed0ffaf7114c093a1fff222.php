

<?php $__env->startSection('panel'); ?>
<div class="row">

    <div class="col-xl-12">
        <div class="card">
            <form action="<?php echo e(route('admin.users.email.single', $user->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label>Subject <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Email subject" name="subject"  required/>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Message <span class="text-danger">*</span></label>
                            <textarea name="message" rows="10" class="form-control nicEdit" placeholder="Your message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" class="btn btn-block btn-primary mr-2">Send Email</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
<a href="<?php echo e(route('admin.users.detail', $user->id)); ?>" class="btn btn-dark" ><i class="fa fa-fw fa-reply"></i>Back</a> 
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/users/email_single.blade.php ENDPATH**/ ?>