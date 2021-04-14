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
                <th scope="col"><?php echo app('translator')->get('Transaction ID'); ?></th>
                <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                <th scope="col"><?php echo app('translator')->get('Remaining Balance'); ?></th>
                <th scope="col"><?php echo app('translator')->get('Details'); ?></th>
                <th scope="col"><?php echo app('translator')->get('Date'); ?></th>
                </tr>
            </thead>
            <tbody>
               <?php if(count($logs) >0): ?>
                <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td data-label="#<?php echo app('translator')->get('Trx'); ?>"><?php echo e($data->trx); ?></td>
                        <td data-label="<?php echo app('translator')->get('Amount'); ?>">
                            <strong <?php if($data->type == '+'): ?> class="text-success" <?php else: ?> class="text-danger" <?php endif; ?>> <?php echo e(($data->type == '+') ? '+':'-'); ?> <?php echo e(formatter_money($data->amount)); ?> <?php echo e($general->cur_text); ?></strong>
                        </td>
                        <td data-label="<?php echo app('translator')->get('Remaining Balance'); ?>">
                            <strong class="text-info"><?php echo e(formatter_money($data->main_amo)); ?> <?php echo e($general->cur_text); ?></strong>
                        </td>
                        <td data-label="<?php echo app('translator')->get('Details'); ?>"><?php echo e($data->title); ?></td>
                        <td data-label="<?php echo app('translator')->get('Date'); ?>"><?php echo e(date('d M, Y', strtotime($data->created_at))); ?></td>
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

        <?php echo e($logs->links()); ?>

        <!-- Cart information -->

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
           <a class="nav-link" href="#" target="_blank">
             <i class="fab fa-dribbble"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#" target="_blank">
             <i class="fab fa-instagram"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#" target="_blank">
             <i class="fab fa-github"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#" target="_blank">
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
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/transactions.blade.php ENDPATH**/ ?>