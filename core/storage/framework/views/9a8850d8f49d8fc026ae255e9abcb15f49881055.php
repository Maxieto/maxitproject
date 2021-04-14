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

        <div class="account--section sign-in-section active relative">
           <div class="container-fluid">
             <div class="account--area">
                <h4 class="title text-center text-danger"><?php echo e('Verification Code'); ?></h4>
             </div>
          </div>
       </div>

        <div class="row">
            <div class="col-lg-7 offset-md-3   col-md-7 offset-lg-3  ">
                <form action="<?php echo e(route('user.password.verify-code')); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="email" value="<?php echo e($email); ?>">
                    <div class="form-group">
                        <input type="text" name="code" id="pincode-input" class="form-control">
                    </div>
                    <div class="form-group pull-right ">
                        <button type="submit" class="btn btn-sm  btn-primary btn-icon rounded-pill">
                            <?php echo app('translator')->get('Verify Code'); ?>
                        </button>
                    </div>
                    <div class="form-group">
                      <?php echo app('translator')->get('Please check including your Junk/Spam Folder. if not found, you can '); ?> <a href="<?php echo e(route('user.password.request')); ?>"><?php echo app('translator')->get('Try to send again'); ?></a>
                    </div>

                </form>
            </div>
            <div class="col-lg-2 col-md-2"> </div>
        </div>
    </div>

</section>


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
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/auth/passwords/code_verify.blade.php ENDPATH**/ ?>