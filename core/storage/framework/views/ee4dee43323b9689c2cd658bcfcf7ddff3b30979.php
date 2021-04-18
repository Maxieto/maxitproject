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
                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white ; text-align: center;margin: 0px;  padding: 8px; "><?php echo e(__($page_title)); ?> </h3>
     </div>

    

     <?php if($document->id_verification_doc == '0' ||  $document->id_verification_address == '0' ): ?>
          <div class="row row-grid">
            <div class="col-lg-7 offset-md-3   col-md-7 offset-lg-3  ">
                <h4 class="text-center py-5" style="color:red"> <?php echo app('translator')->get('Identity information submitted successfully and is under review, you’ll receive an email as soon as verification is complete!'); ?></h4>
            </div>

       <?php elseif(is_null($document->id_verification_doc) ||  is_null($document->id_verification_address) ): ?>

        <div class="row row-grid">
            <div class="col-lg-6  col-md-6 ">
                <form method="POST" action="<?php echo e(route('user.document_store')); ?>"  enctype="multipart/form-data" >
                    <?php echo csrf_field(); ?>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">First Name </label>
                        <input type="text" name="first_name_doc"  value="<?php echo e(old('first_name_doc')); ?>"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Middle Name </label>
                        <input type="text" name="middle_name_doc"  value="<?php echo e(old('middle_name_doc')); ?>"  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Last Name </label>
                        <input type="text" name="last_name_doc"  value="<?php echo e(old('last_name_doc')); ?>"  class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"> Date of Birth</label>
                        <input type="date" name="date_of_birth_doc"  value="<?php echo e(old('date_of_birth_doc')); ?>"  class="form-control"  >
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"> Address</label>
                        <input type="text" name="address_doc"  value="<?php echo e(old('address_doc')); ?>"  class="form-control"  >
                    </div>

                 </div>

                 <div class="col-lg-6  col-md-6 ">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"> city</label>
                        <input type="text" name="city_doc"  value="<?php echo e(old('address_doc')); ?>"  class="form-control"  >
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"> Country</label>
                        <input type="text" name="country_doc"  value="<?php echo e(old('country_doc')); ?>"  class="form-control"  >
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"><?php echo app('translator')->get('Your identity verifcation  front image '); ?></label>
                        <input type="file" name="verification_doc" class="form-control " readonly value="">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"><?php echo app('translator')->get('Your identity verifcation back image '); ?>(Optional)</label>
                        <input type="file" name="verification_doc_back" class="form-control " readonly value="">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label"><?php echo app('translator')->get('Your address document  '); ?></label>
                        <input type="file" name="verification_address_doc" class="form-control " readonly value="">
                    </div>
                    <div class="form-group ">
                        <button  class="btn  btn-primary mt-3"  type="submit" id="recaptcha" ><i class="fa fa-paper-plane"></i>&nbsp;<?php echo app('translator')->get('Submit Now'); ?></button>
                    </div>

                </form>

            </div>

        </section>


</div>
<?php endif; ?>


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
<?php /**PATH C:\xampp\htdocs\maxitproject\core\resources\views/templates/minimal/user/auth/authorize_document.blade.php ENDPATH**/ ?>