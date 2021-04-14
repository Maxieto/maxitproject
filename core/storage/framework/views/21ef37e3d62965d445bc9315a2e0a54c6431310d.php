<?php echo $__env->make(activeTemplate().'layouts.new_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <section class="slice slice-lg">
      <div class="container">

        <div class="actions-toolbar py-2 mb-4">
            <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                        <span style="padding: 15px;"><?php echo e(__($page_title)); ?> </span>
            </h3>
            <a href="<?php echo e(route('user.ticket.open')); ?>" class="btn btn-custom float-right" data-toggle="tooltip" data-placement="top" title="<?php echo app('translator')->get('Open New Support Ticket'); ?>">
                 <i class="fa fa-plus"></i> <?php echo app('translator')->get('Create'); ?>
           </a>
        </div>

       <div class="row">
        <!-- Shopping cart table -->
            <div class="table-responsive">
            <table class="table table-cards align-items-center">
                <thead>
                <tr>
                    <th scope="col"><?php echo app('translator')->get('SL'); ?></th>
                    <th scope="col"><?php echo app('translator')->get('Date'); ?></th>
                    <th scope="col"><?php echo app('translator')->get('Ticket Number'); ?></th>
                    <th scope="col"><?php echo app('translator')->get('Subject'); ?></th>
                    <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                    <th scope="col"><?php echo app('translator')->get('Action'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $supports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $support): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td data-label="<?php echo app('translator')->get('SL'); ?>"><?php echo e(++$key); ?></td>
                        <td data-label="<?php echo app('translator')->get('Date'); ?>"><?php echo e($support->created_at->format('d M, Y h:i A')); ?></td>
                        <td data-label="<?php echo app('translator')->get('Ticket'); ?>">#<?php echo e($support->ticket); ?></td>
                        <td data-label="<?php echo app('translator')->get('Subject'); ?>"><?php echo e($support->subject); ?></td>
                        <td data-label="<?php echo app('translator')->get('Status'); ?>">
                            <?php if($support->status == 0): ?>
                                <span class="badge badge-primary"><?php echo app('translator')->get('Open'); ?></span>
                            <?php elseif($support->status == 1): ?>
                                <span class="badge badge-success "> <?php echo app('translator')->get('Answered'); ?></span>
                            <?php elseif($support->status == 2): ?>
                                <span class="badge badge-info"> <?php echo app('translator')->get('Customer Replied'); ?></span>
                            <?php elseif($support->status == 3): ?>
                                <span class="badge badge-danger "><?php echo app('translator')->get('Closed'); ?></span>
                            <?php endif; ?>
                        </td>

                        <td data-label="<?php echo app('translator')->get('Action'); ?>">
                            <a href="<?php echo e(route('user.message', $support->ticket)); ?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
            </div>
         <?php echo e($supports->links()); ?>

        </div>
        <!-- Cart information -->
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
                <?php $__currentLoopData = $company_policy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                        <a  class="nav-link"  href="<?php echo e(route('home.policy',[$policy, str_slug($policy->value->title)])); ?>">
                        <?php echo e(__($policy->value->title)); ?>

                    </a>
                  </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <li><a  class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact
                 </a>
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
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="<?php echo e(asset('assets_new/js/purpose.core.js')); ?>"></script>
<!-- Purpose JS -->
<script src="<?php echo e(asset('assets_new/js/purpose.js')); ?>"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="<?php echo e(asset('assets_new/js/demo.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/support/supportTicket.blade.php ENDPATH**/ ?>