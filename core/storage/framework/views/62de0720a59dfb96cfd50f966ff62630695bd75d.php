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
            <div class="col-md-12">
                    <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div><?php echo e($error); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

            <div class="row">
               <?php $__currentLoopData = $withdrawMethod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                           <h5 class="card-header card-header-bg text-center" style="background-color: #a700ff;color: white;font-weight: bold;" ><?php echo e(__($data->name)); ?></h5>
                            <div class="px-4 py-5">
                            <div class="card-body card-body-deposit">
                            <img  src="<?php echo e(get_image(config('constants.withdraw.method.path').'/'. $data->image)); ?>"   class="card-img-top" alt="<?php echo e($data->name); ?>" style="width: 70%">
                            </div>
                                <desc><?php echo app('translator')->get('Limit'); ?> : <?php echo e(formatter_money($data->min_limit)); ?> - <?php echo e(formatter_money($data->max_limit)); ?> <?php echo e(__($data->currency)); ?></desc>
                                <desc><?php echo app('translator')->get('Charge'); ?> - <?php echo e(formatter_money($data->fixed_charge)); ?> <?php echo e(__($data->currency)); ?>  + <?php echo e(formatter_money($data->percent_charge)); ?>% </desc>
                                <defs></defs>
                                <desc style="margin-bottom:5px ;margin-top:5px"><?php echo app('translator')->get('Processing Time'); ?>- <?php echo e($data->delay); ?></desc>
                                <defs></defs>

                            <a  href="javascript:void(0)" style="background-color: #a700ff;color: white;font-weight: bold; margin-top:10px"  data-id="<?php echo e($data->id); ?>" data-resource="<?php echo e($data); ?>"  data-min_amount="<?php echo e(formatter_money($data->min_limit)); ?>"   data-max_amount="<?php echo e(formatter_money($data->max_limit)); ?>" data-fix_charge="<?php echo e(formatter_money($data->fixed_charge)); ?>"   data-percent_charge="<?php echo e(formatter_money($data->percent_charge)); ?>" data-base_symbol="<?php echo e($data->currency); ?>" class="btn  btn-custom2 btn-block deposit" data-toggle="modal"  data-target="#exampleModal">  <?php echo app('translator')->get('Withdraw Now'); ?></a>

                        </div>
                    </div>
                 </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title method-name" id="exampleModalLabel">Modal title</strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="<?php echo e(route('user.withdraw.moneyReq')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <p class="text-danger depositLimit"></p>
                        <p class="text-danger depositCharge"></p>

                        <div class="form-group">
                            <input type="hidden" name="currency" class="edit-currency form-control" value="">
                            <input type="hidden" name="method_code" class="edit-method-code  form-control" value="">
                        </div>


                        <div class="form-group">
                            <label><?php echo app('translator')->get('Enter Amount'); ?>:</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg"
                                       onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" name="amount"
                                       placeholder="0.00" required="" value="<?php echo e(old('amount')); ?>">

                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text addon-bg currency-addon"><?php echo e(__($general->cur_text)); ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('Confirm'); ?></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

$(document).ready(function () {
    $('.deposit').on('click', function () {
        var id = $(this).data('id');
        var result = $(this).data('resource');
        var minAmount = $(this).data('min_amount');
        var maxAmount = $(this).data('max_amount');
        var baseSymbol = $(this).data('base_symbol');
        var fixCharge = $(this).data('fix_charge');
        var percentCharge = $(this).data('percent_charge');

        var selectedCurr = $("#currency_id").find(':selected').data('select_currency');
        $('.currency-addon').text(`${baseSymbol}`);


        var depositLimit = `<?php echo app('translator')->get('Withdraw Limit:'); ?> ${minAmount} - ${maxAmount}  ${baseSymbol}`;
        $('.depositLimit').text(depositLimit);
        var depositCharge = `<?php echo app('translator')->get('Charge:'); ?> ${fixCharge} ${baseSymbol} + ${percentCharge} %`
        $('.depositCharge').text(depositCharge);
        $('.method-name').text(`<?php echo app('translator')->get('Payment By '); ?> ${result.name}`);


        $('.edit-currency').val(result.currency);
        $('.edit-method-code').val(result.id);
    });
});
</script>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="<?php echo e(asset('assets_new/js/purpose.core.js')); ?>"></script>
<!-- Purpose JS -->
<script src="<?php echo e(asset('assets_new/js/purpose.js')); ?>"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="<?php echo e(asset('assets_new/js/demo.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/withdraw/money.blade.php ENDPATH**/ ?>