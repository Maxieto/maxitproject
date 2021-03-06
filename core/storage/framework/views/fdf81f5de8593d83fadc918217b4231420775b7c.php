

<?php $__env->startSection('panel'); ?>
<div class="row">

    <div class="col-xl-12">
        <div class="card">
            <div class="table-responsive table-responsive-xl">
                <table class="table align-items-center table-light">
                    <thead>
                        <tr>
                            <th>Short Code</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                            <th>{{name}}</th>
                            <td>User Name</td>
                        </tr>
                        <tr>
                            <th>{{message}}</th>
                            <td>Message</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title font-weight-normal"><?php echo e($page_title); ?></h4>
            </div>
            <form action="<?php echo e(route('admin.email-template.global')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label>Email Sent From <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Email address" name="efrom" value="<?php echo e($general_setting->efrom); ?>"  required/>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Email Body <span class="text-danger">*</span></label>
                            <textarea name="etemp" rows="10" class="form-control nicEdit" placeholder="Your email template"><?php echo e($general_setting->etemp); ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" class="btn btn-block btn-primary mr-2">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/email_template/email_template.blade.php ENDPATH**/ ?>