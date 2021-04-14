<body>
       <style>
           .menu-center{
             text-align: center;
           }
           .menu-text-center{
             margin-left: 120px;
           }
           .font-size-large{
            font-size:19px;
            font-weight:bold;
           }

     </style>

<?php echo $__env->make(activeTemplate().'layouts.new_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <section class="slice bg-section-secondary">
       <div class="container">
        <div class="md-5">
            <div class="row">
             <?php $__currentLoopData = $authWallets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($data->type == 'deposit_wallet'): ?>
                        <div class="col-lg-4">
                            <div class="card card-stats bg-gradient-info border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                                <div class="actions actions-dark">
                                <a href="#" class="action-item">
                                    <i class="fas fa-sync-alt"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                    </div>
                                </div>
                                </div>
                                <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                    <div class="icon text-white icon-sm">
                                    <i class="fas fa-coins text-white"></i>
                                    </div>
                                    </div>
                                    <div class="pl-4">
                                    <a href="<?php echo e(route('user.deposit.history')); ?>" class="privacy-btn">
                                    <span class="d-block h5 text-white mr-2 mb-1"><?php echo e($general->cur_sym); ?> <?php echo e(formatter_money($data->balance)); ?> </span>
                                    <span class="text-white"><?php echo e(__(str_replace('_',' ',strtoupper($data->type)))); ?> </span>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             <?php $__currentLoopData = $authWallets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($data->type == 'interest_wallet'): ?>
                    <div class="col-lg-4">
                        <div class="card card-stats bg-gradient-info border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                            <div class="actions actions-dark">
                            <a href="#" class="action-item">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                            <div class="dropdown">
                                <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Refresh</a>
                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="d-flex">
                                <div>
                                <div class="icon text-white icon-sm">
                                <i class="fas fa-archive text-white"></i>
                                </div>
                                </div>
                                <div class="pl-4">
                                <a href="<?php echo e(route('user.referral')); ?> " class="privacy-btn">
                                <span class="d-block h5 text-white mr-2 mb-1"><?php echo e($general->cur_sym); ?><?php echo e(formatter_money($data->balance)); ?> </span>
                                <span class="text-white"><?php echo e(__(str_replace('_',' ',strtoupper($data->type)))); ?> </span>
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="col-lg-4">
              <div class="card card-stats bg-gradient-primary border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                <div class="actions actions-dark">
                  <a href="#" class="action-item">
                    <i class="fas fa-sync-alt"></i>
                  </a>
                  <div class="dropdown">
                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Refresh</a>
                      <a href="#" class="dropdown-item">Manage Widgets</a>
                      <a href="#" class="dropdown-item">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <div class="icon text-white icon-sm">
                        <i class="fas fa-wallet"></i>
                      </div>
                    </div>
                    <div class="pl-4">
                      <a href="<?php echo e(route('user.interest.log')); ?>" class="privacy-btn">
                      <span class="d-block h5 text-white mr-2 mb-1"><?php echo e($general->cur_sym); ?><?php echo e(formatter_money($totalInvest)); ?></span>
                      <span class="text-white"><?php echo app('translator')->get('Total Invest'); ?>
                      </span>
                    </a>
                    </div>
                  </div>
                </div>

            </div>

           </div>
         </div>
        </div>
        <!-- Stats -->
        <div class="mb-5">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-stats bg-gradient-primary border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                <div class="actions actions-dark">
                  <a href="#" class="action-item">
                    <i class="fas fa-sync-alt"></i>
                  </a>
                  <div class="dropdown">
                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Refresh</a>
                      <a href="#" class="dropdown-item">Manage Widgets</a>
                      <a href="#" class="dropdown-item">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <div class="icon text-white icon-sm">
                        <i class="fas fa-money-bill-wave-alt"></i>
                      </div>
                    </div>
                    <div class="pl-4">
                      <a href="<?php echo e(route('user.withdrawLog')); ?>" class="privacy-btn">
                      <span class="d-block h5 text-white mr-2 mb-1">
                        <?php echo e($general->cur_sym); ?><?php echo e(formatter_money($totalWithdraw)); ?> </span>
                      <span class="text-white"><?php echo app('translator')->get("Total Withdraw"); ?></span>
                     </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-stats bg-gradient-info border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                <div class="actions actions-dark">
                  <a href="#" class="action-item">
                    <i class="fas fa-sync-alt"></i>
                  </a>
                  <div class="dropdown">
                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Refresh</a>
                      <a href="#" class="dropdown-item">Manage Widgets</a>
                      <a href="#" class="dropdown-item">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <div class="icon text-white icon-sm">
                        <i class="fas fa-money-check-alt"></i>
                        
                      </div>
                    </div>
                    <div class="pl-4">
                      <a href="<?php echo e(route('user.deposit.history')); ?>" class="privacy-btn">
                      <span class="d-block h5 text-white mr-2 mb-1"><?php echo e($general->cur_sym); ?><?php echo e(formatter_money($totalDeposit)); ?> </span>
                      <span class="text-white"><?php echo app('translator')->get('Total Deposit'); ?> </span>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-stats bg-gradient-dark border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                <div class="actions actions-dark">
                  <a href="#" class="action-item">
                    <i class="fas fa-sync-alt"></i>
                  </a>
                  <div class="dropdown">
                    <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Refresh</a>
                      <a href="#" class="dropdown-item">Manage Widgets</a>
                      <a href="#" class="dropdown-item">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <div class="icon text-white icon-sm">
                        <i class="fas fa-box-open"></i>
                      </div>
                    </div>
                    <div class="pl-4">
                      <a href="<?php echo e(route('user.ticket')); ?>" class="privacy-btn">
                      <span class="d-block h5 text-white mr-2 mb-1"><?php echo e($totalTicket); ?></span>
                      <span class="text-white"><?php echo app('translator')->get('Total Ticket'); ?></span>
                     </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project stats -->
        <div class="actions-toolbar py-2 mb-4">
          <h5 class="mb-1">Project stats</h5>
          <p class="text-sm text-muted mb-0">Manage pending orders and track invoices.</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card mb-0">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="mb-0">Project progress</h6>
                  </div>
                  <div class="text-right">
                    <div class="actions">
                      <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                      <div class="dropdown action-item" data-toggle="dropdown">
                        <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="#" class="dropdown-item">Refresh</a>
                          <a href="#" class="dropdown-item">Manage Widgets</a>
                          <a href="#" class="dropdown-item">Settings</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-1.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="flex-fill pl-3 text-limit">
                      <h6 class="progress-text mb-1 text-sm d-block text-limit">Purpose Design System</h6>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                        <div>
                          <span class="font-weight-bold text-warning">Pending</span>
                        </div>
                        <div>
                          20 Aug 2018
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-2.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="flex-fill pl-3 text-limit">
                      <h6 class="progress-text mb-1 text-sm d-block text-limit">Website redesign</h6>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                        <div>
                          <span class="font-weight-bold text-success">Completed</span>
                        </div>
                        <div>
                          20 Aug 2018
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-3.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="flex-fill pl-3 text-limit">
                      <h6 class="progress-text mb-1 text-sm d-block text-limit">Webpixels website launch</h6>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                        <div>
                          <span class="font-weight-bold text-danger">Delayed</span>
                        </div>
                        <div>
                          20 Aug 2018
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-4.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="flex-fill pl-3 text-limit">
                      <h6 class="progress-text mb-1 text-sm d-block text-limit">Purpose Website UI Kit</h6>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                        <div>
                          <span class="font-weight-bold text-info">On schedule</span>
                        </div>
                        <div>
                          20 Aug 2018
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-5.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="flex-fill pl-3 text-limit">
                      <h6 class="progress-text mb-1 text-sm d-block text-limit">Prototype Purpose Dashboard</h6>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                        <div>
                          <span class="font-weight-bold text-success">Completed</span>
                        </div>
                        <div>
                          20 Aug 2018
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card mb-0">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="mb-0">Project budgets</h6>
                  </div>
                  <div class="text-right">
                    <div class="actions">
                      <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                      <div class="dropdown action-item" data-toggle="dropdown">
                        <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="#" class="dropdown-item">Refresh</a>
                          <a href="#" class="dropdown-item">Manage Widgets</a>
                          <a href="#" class="dropdown-item">Settings</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media align-items-center">
                    <div class="mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-1.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="media-body">
                      <h6 class="text-sm d-block text-limit mb-0">Purpose Design System</h6>
                      <span class="d-block text-sm text-muted">Development</span>
                    </div>
                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $2500
                      </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media align-items-center">
                    <div class="mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-2.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="media-body">
                      <h6 class="text-sm d-block text-limit mb-0">Website redesign</h6>
                      <span class="d-block text-sm text-muted">Identity</span>
                    </div>
                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $1800
                      </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media align-items-center">
                    <div class="mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-3.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="media-body">
                      <h6 class="text-sm d-block text-limit mb-0">Webpixels website launch</h6>
                      <span class="d-block text-sm text-muted">Branding</span>
                    </div>
                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $3150
                      </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media align-items-center">
                    <div class="mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-4.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="media-body">
                      <h6 class="text-sm d-block text-limit mb-0">Purpose Website UI Kit</h6>
                      <span class="d-block text-sm text-muted">Marketing</span>
                    </div>
                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $4400
                      </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media align-items-center">
                    <div class="mr-3">
                      <img alt="Image placeholder" src="<?php echo e(asset('assets_new/img/theme/light/brand-avatar-5.png')); ?>" class="avatar  rounded-circle">
                    </div>
                    <div class="media-body">
                      <h6 class="text-sm d-block text-limit mb-0">Prototype Purpose Dashboard</h6>
                      <span class="d-block text-sm text-muted">Frameworks</span>
                    </div>
                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $2200
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
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
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/dashboard.blade.php ENDPATH**/ ?>