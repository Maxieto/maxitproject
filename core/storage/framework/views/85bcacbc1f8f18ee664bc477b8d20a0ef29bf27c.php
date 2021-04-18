<?php $__env->startSection('panel'); ?>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <form action="<?php echo e(route('admin.setting.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-row">



                        <div class="form-group col-md-3">
                            <label>Site Title</label>
                            <input type="text" class="form-control" placeholder="Your Company Title" name="sitename" value="<?php echo e($general_setting->sitename); ?>" />
                        </div>
                        <div class="form-group col-md-3">
                            <label>Currency</label>
                            <input type="text" class="form-control" placeholder="Your Transaction Currency" name="cur_text" value="<?php echo e($general_setting->cur_text); ?>" />
                        </div>
                        <div class="form-group col-md-3">
                            <label>Currency Symbol</label>
                            <input type="text" class="form-control" placeholder="Your Currency Symbol" name="cur_sym" value="<?php echo e($general_setting->cur_sym); ?>" />
                        </div>


                        <div class="form-group col-3">
                            <label>User Registration</label>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disabled" name="reg" <?php if($general_setting->reg): ?> checked <?php endif; ?>>
                        </div>

                        <div class="form-group col">
                            <label>Email Verification</label>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="ev" <?php if($general_setting->ev): ?> checked <?php endif; ?>>
                        </div>
                        <div class="form-group col">
                            <label>Email Notification</label>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="en" <?php if($general_setting->en): ?> checked <?php endif; ?>>
                        </div>
                        <div class="form-group col">
                            <label>SMS Verification</label>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="sv" <?php if($general_setting->sv): ?> checked <?php endif; ?>>
                        </div>

                        <div class="form-group col">
                            <label>SMS Notification</label>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="sn" <?php if($general_setting->sn): ?> checked <?php endif; ?>>
                        </div>

                        <div class="form-group col">
                            <label>Document Verification </label>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="id_verification_doc" <?php if($general_setting->id_verification_doc): ?> checked <?php endif; ?>>
                        </div>

                        <div class="form-group col">
                            <label>Address Verification </label>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="id_verification_address" <?php if($general_setting->id_verification_address): ?> checked <?php endif; ?>>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Active Template</label>
                             <?php
                                  $temPaths = array_filter(glob('core/resources/views/templates/*'), 'is_dir');
                             ?>

                            <select name="active_template" class="form-control select2">
                                <?php $__currentLoopData = $temPaths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $arr = explode('/', $temp);
                                        $tempname = end($arr);
                                    ?>
                                <option value="<?php echo e($tempname); ?>" <?php if($general_setting->active_template == $tempname): ?> selected <?php endif; ?>><?php echo e($tempname); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Alert UI</label>
                            <select name="alert" class="form-control select2">
                                <option value="0" <?php if($general_setting->alert == 0): ?> selected <?php endif; ?>>No Alert</option>
                                <option value="1" <?php if($general_setting->alert == 1): ?> selected <?php endif; ?>>iziTOAST</option>
                                <option value="2" <?php if($general_setting->alert == 2): ?> selected <?php endif; ?>>Toaster</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Site Base Color</label>
                            <div class="input-group">
                                <span class="input-group-addon ">
                                    <input type='text' class="form-control colorPicker" value="<?php echo e($general_setting->bclr); ?>"/>
                                </span>
                                <input type="text" class="form-control colorCode" name="bclr" value="<?php echo e($general_setting->bclr); ?>" />
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Site Secondary Color</label>
                            <div class="input-group">
                                <span class="input-group-addon ">
                                    <input type='text' class="form-control colorPicker" value="<?php echo e($general_setting->sclr); ?>"/>
                                </span>
                                <input type="text" class="form-control colorCode" name="sclr" value="<?php echo e($general_setting->sclr); ?>" />
                            </div>
                        </div>


                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-row">
                        <div class="form-group col-md-12 text-center">
                            <button type="submit" class="btn btn-block btn-primary mr-2">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="row justify-content-center">

    <div class="col-md-12">
        <div class="card mt-3">
            <div class="card-header bg-primary">
                <h4 class="card-title font-weight-normal">Cron Job Setting Instruction</h4>
            </div>
            <div class="card-body">

                <input type="hidden" name="_token" value="tVe9JL91A5A9fW5SecPeMZR1P999L4Wgk9hfHvLR">                        <div class="row justify-content-between mb-5">


                    <div class="col-md-12 py-3">
                        <p style="font-size: 24px; ">  <b>To automate Interest</b> Please run the <code style="display: inline-block;"> cron job </code> on your server.
                            Set the Cron time as minimum as possible. Once per <code style="display: inline-block;"> 5-15 </code> minutes is ideal.</p>
                    </div>

                    <div class="col-md-8">
                        <label>Cron Command</label>
                        <div class="input-group custom-height">
                            <input id="ref" type="text" class="form-control" value="curl -s <?php echo e(route('cron')); ?>" readonly="">
                            <div class="input-group-append" id="copybtn">
                                <span class="input-group-text btn-success" id="copybtn" data-copytarget="#ref"> COPY</span>
                            </div>
                        </div>
                    </div>






                    <?php $ago =  \Carbon\Carbon::parse($general->last_cron)->diffInSeconds(); ?>

                    <div class="col-md-4">
                        <div class="dashboard-w1
                        <?php if($ago<300): ?>
                        bg-success
                        <?php elseif($ago<1000): ?>
                        bg-warning
                        <?php else: ?>
                        bg-danger
                        <?php endif; ?>

                        border-radius-10">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="details">
                                <div class="desciption">
                                    <span>Last Cron Run</span>
                                </div>
                                <div class="numbers">
                                    <span class="amount"><?php echo e(\Carbon\Carbon::parse($general->last_cron)->diffForHumans()); ?></span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-lib'); ?>
<script src="<?php echo e(asset('assets/admin/js/spectrum.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>
<style>
.sp-replacer {
    padding: 0;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 5px 0 0 5px;
    border-right: none;
}
.sp-preview {
    width: 100px;
    height: 44px;
    border: 0;
}

.sp-preview-inner {
    width: 110px;
}

.sp-dd{
    display: none;
}

.input-group > .form-control:not(:first-child) {
    border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style-lib'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/spectrum.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<script>
    $('.colorPicker').spectrum({
        color: $(this).data('color'),
        change: function (color) {
            $(this).parent().siblings('.colorCode').val(color.toHexString().replace(/^#?/, ''));
        }
    });

    $('.colorCode').on('input', function() {
        var clr = $(this).val();
        $(this).parents('.input-group').find('.colorPicker').spectrum({
            color: clr,
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maxitproject\core\resources\views/admin/setting/general_setting.blade.php ENDPATH**/ ?>