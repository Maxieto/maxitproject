<?php echo $__env->make(activeTemplate().'layouts.new_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="slice">
      <div class="container">

      <div class="actions-toolbar py-2 mb-4">
                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white "><?php echo e(__($page_title)); ?> </h3>
                <a href="<?php echo e(route('user.ticket')); ?>" class="btn btn-custom float-right" data-toggle="tooltip" data-placement="top" title="<?php echo app('translator')->get('My Support Ticket'); ?>">
                      <i class="fa fa-eye"></i> <?php echo app('translator')->get('See All'); ?>
                </a>
     </div>

        <div class="row row-grid">
          <div class="col-lg-12 ">

          <form  action="<?php echo e(route('user.ticket.store')); ?>" role="form" method="post" enctype="multipart/form-data" id="recaptchaForm">
                    <?php echo csrf_field(); ?>
              <!-- Password -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label"><?php echo app('translator')->get('Name'); ?></label>
                    <input type="text"  name="name" value="<?php echo e($user->firstname . ' '.$user->lastname); ?>" class="form-control" placeholder="<?php echo app('translator')->get('Enter Name'); ?>" required readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label"><?php echo app('translator')->get('Email address'); ?> </label>
                    <input type="email"  name="email" value="<?php echo e($user->email); ?>" class="form-control" placeholder="<?php echo app('translator')->get('Enter your Email'); ?>" required readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div  class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label"><?php echo app('translator')->get('Subject'); ?> </label>
                    <input type="text" name="subject" value="<?php echo e(old('subject')); ?>" class="form-control" placeholder="<?php echo app('translator')->get('Subject'); ?>" >
                  </div>
                </div>

              </div>



                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="department"><?php echo app('translator')->get('Department'); ?></label>
                        <select class="form-control required" name="department" required>
                            <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($topic->id); ?>"><?php echo e($topic->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="priority"><?php echo app('translator')->get('Priority'); ?></label>
                        <select class="form-control  required" name="priority" required>
                            <option value="medium"><?php echo app('translator')->get('Medium'); ?></option>
                            <option value="high"><?php echo app('translator')->get('High'); ?></option>
                            <option value="low"><?php echo app('translator')->get('Low'); ?></option>
                        </select>
                    </div>
                </div>

              <div class="row">
                    <div class="col-12 form-group">
                        <label class="form-control-label"><?php echo app('translator')->get('Message'); ?></label>
                        <textarea name="message" id="inputMessage" rows="12" class="form-control"><?php echo e(old('message')); ?></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-12">
                        <label for="inputAttachments"><?php echo app('translator')->get('Attachments'); ?></label>
                    </div>
                    <div class="col-sm-9 file-upload">
                        <input type="file" name="attachments[]" id="inputAttachments" class="form-control" />
                        <div id="fileUploadsContainer"></div>
                    </div>

                    <div class="col-sm-3">
                        <button type="button" class="btn btn-custom" onclick="extraTicketAttachment()">
                            <i class="fa fa-plus"></i> <?php echo app('translator')->get('Add More'); ?>
                        </button>
                    </div>
                    <div class="col-sm-12 ticket-attachments-message text-muted">
                        <?php echo app('translator')->get("Allowed File Extensions: .jpg, .jpeg, .png, .pdf, .doc, .docx"); ?>
                    </div>
                </div>

                <div class="row form-group justify-content-center">
                    <div class="col-md-6">
                        <button  class="btn  btn-primary mt-3"  type="submit" id="recaptcha" ><i class="fa fa-paper-plane"></i>&nbsp;<?php echo app('translator')->get('Submit Now'); ?></button>
                    </div>

                    <div class="col-md-6">
                        <button class=" btn btn-danger mt-3" type="button" onclick="formReset()">&nbsp;<?php echo app('translator')->get('Cancel'); ?></button>
                    </div>
                  </div>


              <!-- <div class="mt-4">

                <button type="submit" class="btn btn-sm btn-primary"><?php echo app('translator')->get('Change Password'); ?></button>
              </div> -->
            </form>
            <!-- Username -->

            <!-- Delete -->
        </div>
      </div>
      </div>
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


</html>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/support/sendSupportTicket.blade.php ENDPATH**/ ?>