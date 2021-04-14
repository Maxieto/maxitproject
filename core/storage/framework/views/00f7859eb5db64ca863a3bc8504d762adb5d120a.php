<?php echo $__env->make(activeTemplate() .'layouts.new_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ========User-Panel-Section Starte Here ========-->
    <section class="slice slice-lg">
        <div class="container">
            <div class="actions-toolbar py-2 mb-4">
                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                    <span style="padding: 15px;"><?php echo e(__($page_title)); ?> </span>
                </h3>
            </div>
    <section class="user-panel-section padding-bottom padding-top">
        <div class="container user-panel-container">
            <div class=" user-panel-tab">
                <div class="row">
                    <div class="col-lg-9" id="myvideo">
                        <div class="tab-area fullscreen-width">
                            <div class="tab-item active">
                                <div class="row mb-60-80 justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="<?php echo e(route('user.manualDeposit.update')); ?>" method="POST" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                        <?php
                                                            $extra = $data->gateway->extra;
                                                        ?>

                                                        <div class="col-md-12">
                                                            <p class="text-center mt-2"><?php echo app('translator')->get('You have requested '); ?> <b class="text-success"><?php echo e(formatter_money($data['amount'])); ?> <?php echo e($data['method_currency']); ?></b> <?php echo app('translator')->get(', Please pay '); ?> <b class="text-success"><?php echo e($data['final_amo'] .' '.$data['method_currency']); ?></b> <?php echo app('translator')->get(' for successful payment'); ?></p>
                                                            <h4 class="text-center mb-4"><?php echo app('translator')->get('Please follow the instruction bellow'); ?></h4>

                                                            <p class="my-4"  style="background-color:#6E00FF;font-weight:bold; color:white;"><?php echo  $data->gateway->description ?></p>
                                                            <p class="text-center mt-3 font-weight-bold"  style="background-color:#6E00FF;font-weight:bold; color:white;"><?php echo app('translator')->get('Delay:'); ?> <?php echo  $extra->delay ?></p>

                                                        </div>



                                                        <div class="col-md-12">
                                                            <div class="form-group mt-4">
                                                                <label for="a-trans"  style="background-color:#6E00FF;font-weight:bold; color:white;"  class="font-weight-bold"> <?php echo e(__($extra->verify_image)); ?></label>
                                                                <input type="file" class="form-control form-control-lg" name="verify_image">
                                                            </div>
                                                        </div>

                                                        <?php $__currentLoopData = json_decode($method->parameter); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="a-trans"  style="background-color:#6E00FF;font-weight:bold; color:white;"  class="font-weight-bold"><?php echo e(__($input)); ?></label>
                                                                    <input type="text"   style="background-color:#6E00FF;font-weight:bold; color:white;" class="form-control form-control-lg" name="ud[<?php echo e(str_slug($input)); ?>]" placeholder="<?php echo e($input); ?>">
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-custom2    btn-block mt-2 text-center" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;" ><?php echo app('translator')->get('Pay Now'); ?></button>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                <a class="nav-link" href="" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
     </div>
  </footer>
    <!-- ========User-Panel-Section Ends Here ========-->

    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="<?php echo e(asset('assets_new/js/purpose.core.js')); ?>"></script>
<!-- Purpose JS -->
<script src="<?php echo e(asset('assets_new/js/purpose.js')); ?>"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="<?php echo e(asset('assets_new/js/demo.js')); ?>"></script>
    <!-- ========User-Panel-Section Ends Here ========-->

<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/manual_payment/manual_confirm.blade.php ENDPATH**/ ?>