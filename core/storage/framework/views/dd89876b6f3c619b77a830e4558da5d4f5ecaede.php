<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make(activeTemplate().'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ========User-Panel-Section Starte Here ========-->
    <section class="user-panel-section padding-bottom padding-top">
        <div class="container user-panel-container">
            <div class=" user-panel-tab">
                <div class="row">
                    <?php echo $__env->make(activeTemplate().'partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="col-lg-9">
                        <div class="user-panel-header mb-60-80">
                            <div class="left d-sm-block d-none">
                                <h6 class="title"><?php echo e(__($page_title)); ?></h6>
                            </div>
                            <ul class="right">


                                <li>
                                    <a href="#0" class="log-out d-lg-none">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>

                                            <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="tab-area fullscreen-width">
                            <div class="tab-item active">
                                <div class="row mb-60-80">
                                    <div class="col-lg-6 col-md-6">
                                        <?php if(Auth::user()->ts): ?>
                                            <div class="card">
                                                <h5 class="card-header card-header-bg"><?php echo app('translator')->get('Two Factor Authenticator'); ?></h5>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" value="<?php echo e($prevcode); ?>"
                                                                   class="form-control form-control-lg" id="referralURL"
                                                                   readonly>
                                                            <div class="input-group-append">
                                                        <span class="input-group-text copytext" id="copyBoard"
                                                              onclick="myFunction()"> <i class="fa fa-copy"></i> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mx-auto text-center">
                                                        <img class="mx-auto" src="<?php echo e($prevqr); ?>">
                                                    </div>

                                                    <div class="form-group mx-auto text-center">
                                                        <a href="#0"  class="btn btn-block btn-lg btn-danger"  data-toggle="modal" data-target="#disableModal"><?php echo app('translator')->get('Disable Two Factor Authenticator'); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="card">

                                                <h5 class="card-header card-header-bg"><?php echo app('translator')->get('Two Factor Authenticator'); ?></h5>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" name="key" value="<?php echo e($secret); ?>"
                                                                   class="form-control form-control-lg" id="referralURL"
                                                                   readonly>
                                                            <div class="input-group-append">
                                                        <span class="input-group-text copytext" id="copyBoard"
                                                              onclick="myFunction()"> <i class="fa fa-copy"></i> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mx-auto text-center">
                                                        <img class="mx-auto" src="<?php echo e($qrCodeUrl); ?>">
                                                    </div>
                                                    <div class="form-group mx-auto text-center">

                                                        <a href="#0" class="btn btn-success btn-lg mt-3 mb-1"
                                                           data-toggle="modal"
                                                           data-target="#enableModal"><?php echo app('translator')->get('Enable Two Factor Authenticator'); ?></a>
                                                    </div>

                                                </div>
                                            </div>

                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class=" card">
                                            <h5 class="card-header card-header-bg"><?php echo app('translator')->get('Google Authenticator'); ?></h5>
                                            <div class=" card-body">
                                                <h5 class="text-uppercase"><?php echo app('translator')->get('Use Google Authenticator to Scan the QR code  or use the code'); ?></h5>
                                                <hr/>
                                                <p><?php echo app('translator')->get('Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.'); ?></p>
                                                <a class="btn btn-success btn-md mt-3"
                                                   href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"
                                                   target="_blank"><?php echo app('translator')->get('DOWNLOAD APP'); ?></a>
                                            </div>
                                        </div><!-- //. single service item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========User-Panel-Section Ends Here ========-->




    <!--Enable Modal -->
    <div id="enableModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"><?php echo app('translator')->get('Verify Your OTP'); ?></h6>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal">&times;</a>
                </div>
                <form action="<?php echo e(route('user.go2fa.create')); ?>" method="POST">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="hidden" name="key" value="<?php echo e($secret); ?>">
                            <input type="text" class="form-control" name="code" placeholder="<?php echo app('translator')->get('Enter Google Authenticator Code'); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-lg"><?php echo app('translator')->get('Verify'); ?></button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Disable Modal -->
    <div id="disableModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"><?php echo app('translator')->get('Verify Your OTP to Disable'); ?></h6>
                    <a  href="javascript:void(0)"  class="close" data-dismiss="modal">&times;</a>
                </div>
                <form action="<?php echo e(route('user.disable.2fa')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="code" placeholder="<?php echo app('translator')->get('Enter Google Authenticator Code'); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-lg"><?php echo app('translator')->get('Verify'); ?></button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    </div>
                </form>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('load-js'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

    <script>
        function myFunction() {
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            var alertStatus = "<?php echo e($general->alert); ?>";
            if (alertStatus == '1') {
                iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
            } else if (alertStatus == '2') {
                toastr.success("Copied: " + copyText.value);
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(activeTemplate() .'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/goauth/create.blade.php ENDPATH**/ ?>