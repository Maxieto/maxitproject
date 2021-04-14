<?php echo $__env->make(activeTemplate().'layouts.new_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php $__env->startSection('style'); ?>
<style>

    .pincode-input-container{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pincode-input-container .pincode-input-text {
        /*margin-left: 5px;*/
        text-align: center;
        font-weight: 600;
        font-size: 48px;
        border: 2px solid #000036;
        color: #<?php echo e($general->bclr); ?>;
    }
    .login-area .login-form .frm-grp input {
        padding:inherit;
    }
    .pincode-input-text, .form-control.pincode-input-text {
        width: 60px;
        height: 60px !important;
    }
</style>
<?php $__env->stopSection(); ?>

<section class="slice">
      <div class="container">

      <div class="actions-toolbar py-2 mb-5">
                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white "><?php echo e(__($page_title)); ?> </h3>

     </div>


     <?php if(!$user->status): ?>
      <div class="account--section sign-in-section active relative">
        <div class="container-fluid">
          <div class="account--area">
            <h1 class="title text-center text-danger"><?php echo e(__($page_title)); ?></h1>
          </div>
        </div>
     </div>

     <?php elseif(!$user->ev): ?>

        <div class="row row-grid">
            <div class="col-lg-7 offset-md-3   col-md-7 offset-lg-3  ">

                <form method="POST" action="<?php echo e(route('user.verify_email')); ?>" >
                    <?php echo csrf_field(); ?>
                    <h4 class="text-center py-5"> <?php echo app('translator')->get('Please Verify Your Email to Get Access'); ?></h4>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"><?php echo app('translator')->get('Your Email Address'); ?></label>
                        <input type="email" name="email" class="form-control " readonly value="<?php echo e(auth()->user()->email); ?>">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"><?php echo app('translator')->get('Enter Verification Code'); ?></label>
                        <br>
                        <input  name="email_verified_code"  id="pincode-input" placeholder="<?php echo app('translator')->get('Code'); ?>" class="form-control ">
                        <?php if($errors->has('email_verified_code')): ?>
                        <small class="text-danger"><?php echo e($errors->first('email_verified_code')); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group ">
                        

                        <button  class="btn  btn-primary mt-3"  type="submit" id="recaptcha" ><i class="fa fa-paper-plane"></i>&nbsp;<?php echo app('translator')->get('Submit Now'); ?></button>
                    </div>
                    <div class="form-group">
                        <div class="remember mr-5">
                            <label class="form-check-label" for="gridCheck1">
                                <?php echo app('translator')->get('Please check including your Junk/Spam Folder. if not found, you can '); ?> <a href="<?php echo e(route('user.send_verify_code')); ?>?type=email"> <?php echo app('translator')->get('Resend code again'); ?></a> !
                                <?php if($errors->has('resend')): ?>
                                <br/>
                                <small class="text-danger"><?php echo e($errors->first('resend')); ?></small>
                                <?php endif; ?>
                            </label>
                        </div>
                    </div>
                </form>

            </div>
        </div>
     <?php elseif(!$user->tv): ?>

        <div class="row row-grid">
            <div class="col-lg-7 offset-md-3   col-md-7 offset-lg-3  ">
                <form method="POST" action="<?php echo e(route('user.verify_sms')); ?>" >
                    <?php echo csrf_field(); ?>
                    <h2 class="text-center text-white pb-4 text-uppercase"> <?php echo app('translator')->get($page_title); ?></h2>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"><?php echo app('translator')->get('Your Mobile Number'); ?></label>
                        <input type="text" name="mobile" class="form-control" readonly value="<?php echo e(auth()->user()->mobile); ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"><?php echo app('translator')->get('Enter Code'); ?></label>
                        <input  name="sms_verified_code"  id="pincode-input" placeholder="<?php echo app('translator')->get('Code'); ?>" class="form-control form-control-lg">
                        <?php if($errors->has('sms_verified_code')): ?>
                        <small class="text-danger"><?php echo e($errors->first('sms_verified_code')); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group ">
                        <button type="submit"  class="btn  btn-primary mt-3 ">
                            <?php echo app('translator')->get('Submit'); ?>
                        </button>
                    </div>
                    <div class="form-group">

                        <div class="remember mr-5">
                            <label class="form-check-label" for="gridCheck1">
                                <?php echo app('translator')->get('No code on your phone Yet ?'); ?> <a  href="<?php echo e(route('user.send_verify_code')); ?>?type=phone"> <?php echo app('translator')->get('Resend code'); ?></a>
                                <?php if($errors->has('resend')): ?>
                                <br/>
                                <small class="text-danger"><?php echo e($errors->first('resend')); ?></small>
                                <?php endif; ?>

                            </label>
                        </div>

                    </div>

                </form>

            </div>
        </div>
        <?php elseif(!$user->tv): ?>

        <div class="row row-grid">
            <div class="col-lg-7 offset-md-3   col-md-7 offset-lg-3  ">
                <form method="POST"  action="<?php echo e(route('user.go2fa.verify')); ?>" >
                    <?php echo csrf_field(); ?>

                    <h2 class="text-center pb-4 text-uppercase"> <?php echo app('translator')->get('2FA Verification'); ?></h2>
                    <strong> <?php echo app('translator')->get('Current Time'); ?>: <?php echo e(\Carbon\Carbon::now()); ?></strong>

                    <div class="form-group pt-3">
                        <label for="inputEmail3" class="col-form-label"><?php echo app('translator')->get('Google Authenticator Code'); ?></label>
                        <input  name="code" id="pincode-input" placeholder="<?php echo app('translator')->get('Enter Google Authenticator Code'); ?>" class="form-control">
                        <?php if($errors->has('code')): ?>
                        <small class="text-danger"><?php echo e($errors->first('code')); ?></small>
                        <?php endif; ?>
                    </div>


                    <div class="form-group ">
                        <button type="submit" class="custom-button bg-3  text-center mt-3">
                            <?php echo app('translator')->get('Submit'); ?>
                        </button>
                    </div>

                </form>

            </div>
        </div>
       <?php endif; ?>
    </section>


</div>


<footer class="footer p-0 footer-light bg-section-secondary" id="footer-main">


<div class="container">
 <div class="py-4">
   <div class="row align-items-md-center">
     <div class="col-md-4 mb-4 mb-md-0">
       <div class="d-flex align-items-center">
         <p class="text-sm mb-0">&copy; Purpose. 2019 <a href="https://webpixels.io" target="_blank">Webpixels</a>. All rights reserved.</p>
       </div>
     </div>
     <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
       <ul class="nav justify-content-center">
         <li class="nav-item">
           <a class="nav-link" href="../../pages/utility/support.html">Support</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="../../pages/utility/terms.html">Terms</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="../../pages/utility/privacy.html">Privacy</a>
         </li>
       </ul>
     </div>
     <div class="col-sm-6 col-md-4">
       <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
         <li class="nav-item">
           <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
             <i class="fab fa-dribbble"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
             <i class="fab fa-instagram"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="https://github.com/webpixels" target="_blank">
             <i class="fab fa-github"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
             <i class="fab fa-facebook"></i>
           </a>
         </li>
       </ul>
     </div>
   </div>
 </div>
</div>
</footer>

<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="<?php echo e(asset('assets_new/js/purpose.core.js')); ?>"></script>
<!-- Purpose JS -->
<script src="<?php echo e(asset('assets_new/js/purpose.js')); ?>"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="<?php echo e(asset('assets_new/js/demo.js')); ?>"></script>
</body>


<?php if($plugins[2]->status == 1): ?>
        <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
        <?php echo recaptcha() ?>
    <?php endif; ?>


    <script>
        function extraTicketAttachment() {
            $("#fileUploadsContainer").append('<input type="file" name="attachments[]" class="form-control form-control-lg mt-2" required />')
        }
        function formReset() {
            window.location.href = "<?php echo e(url()->current()); ?>"
        }
    </script>


<?php $__env->startPush('style-lib'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/bootstrap-pincode-input.css')); ?>"/>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/admin/js/bootstrap-pincode-input.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('js'); ?>
<script>
    $('#pincode-input').pincodeInput({
        inputs:6,
        placeholder:"- - - - - -",
        hidedigits:false
    });
</script>

</html>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/auth/authorize.blade.php ENDPATH**/ ?>