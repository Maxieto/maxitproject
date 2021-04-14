<?php echo $__env->make(activeTemplate().'layouts.new_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <section class="slice slice-lg">
        <div class="container">
                <div class="actions-toolbar py-2 mb-4">
                    <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                        <span style="padding: 15px;"><?php echo e(__($page_title)); ?> </span>
                    </h3>
                </div>
            <div class="row">
            <!-- Shopping cart table -->
                <div class="table-responsive">
                    <table class="table table-cards align-items-center">
                        <thead>
                        <tr>
                        <tr>
                            <th scope="col"><?php echo app('translator')->get('Transaction ID'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Gateway'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Time'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(count($withdraws) >0): ?>
                            <?php $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td data-label="#<?php echo app('translator')->get('Trx'); ?>"><?php echo e($data->trx); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Gateway'); ?>"><?php echo e($data->method->name); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Amount'); ?>">
                                        <strong><?php echo e(formatter_money($data->amount)); ?> <?php echo e($general->cur_text); ?></strong>
                                    </td>
                                    <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                        <?php if($data->status == 0): ?>
                                            <span class="badge badge-warning"><?php echo app('translator')->get('Pending'); ?></span>
                                        <?php elseif($data->status == 1): ?>
                                            <span class="badge badge-success"><?php echo app('translator')->get('Completed'); ?></span>
                                        <?php elseif($data->status == 2): ?>
                                            <span class="badge badge-danger"><?php echo app('translator')->get('Rejected'); ?></span>
                                        <?php endif; ?>

                                    </td>
                                    <td data-label="<?php echo app('translator')->get('Time'); ?>">
                                        <i class="fa fa-calendar"></i> <?php echo e(date('d M, Y ', strtotime($data->created_at))); ?>

                                        <span class="pl-1"></span> <?php echo e(date('h:i A', strtotime($data->created_at))); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4"> <?php echo app('translator')->get('No results found'); ?>!</td>
                            </tr>
                        <?php endif; ?>

                        </tbody>
                    </table>
            </div>

            <?php echo e($withdraws->links()); ?>

            <!-- Cart information -->
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

<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="<?php echo e(asset('assets_new/js/purpose.core.js')); ?>"></script>
<!-- Purpose JS -->
<script src="<?php echo e(asset('assets_new/js/purpose.js')); ?>"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="<?php echo e(asset('assets_new/js/demo.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/withdraw/log.blade.php ENDPATH**/ ?>