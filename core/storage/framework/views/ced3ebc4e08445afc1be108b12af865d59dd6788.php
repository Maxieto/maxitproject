

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
                            <th>{{number}}</th>
                            <td>Number</td>
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
                <h4 class="card-title font-weight-normal pull-left"><?php echo e($page_title); ?></h4>
                <button type="button" data-target="#tesSMSModal" data-toggle="modal" class="btn btn-success pull-right">Send Test SMS</button>
            </div>
            <form action="<?php echo e(route('admin.sms-template.global')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label>SMS API <span class="text-danger">*</span></label>
                            <input type="string" class="form-control" placeholder="SMS API Configuration" name="smsapi" value="<?php echo e($general_setting->smsapi); ?>" required/>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-block btn-primary mr-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<div id="tesSMSModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Test SMS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.email-template.sendTestSMS')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Sent to <span class="text-danger">*</span></label>
                            <input type="text" name="mobile" class="form-control" placeholder="Mobile number">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/sms_template/sms_setting.blade.php ENDPATH**/ ?>