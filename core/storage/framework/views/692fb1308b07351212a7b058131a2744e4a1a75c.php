<div class="col-lg-3">
    <div class="user-area">
        <div class="remove-user d-lg-none">
            <i class="fas fa-times"></i>
        </div>
        <div class="user-item">
            <div class="user-thumb">
                <a href="#0">
                    <img src="<?php echo e(get_image(config('constants.user.profile.path') .'/'. Auth::user()->image)); ?>" alt="user">
                </a>
            </div>
            <div class="user-content">
                <h6 class="title"><?php echo app('translator')->get('Hello,'); ?> I am <?php echo e(Auth::user()->username); ?></h6>
                <p>Reg: <?php echo e(date('M-d-Y',strtotime(Auth::user()->created_at))); ?></p>
            </div>
        </div>
        <ul class="tab-menu">
            <li <?php if(Request::routeIs('user.home')): ?> class="active" <?php endif; ?>>
                <a href="<?php echo e(route('user.home')); ?>"><i class="fa fa-home"></i> <?php echo app('translator')->get('Dashboard'); ?></a>
            </li>

            <li <?php if(Request::routeIs('home.plan')): ?> class="active" <?php endif; ?>>
                <a href="<?php echo e(route('home.plan')); ?>"><i class="fas fa-cubes"></i> <?php echo app('translator')->get('Investment Plans'); ?></a></li>

            <li <?php if(Request::routeIs('user.interest.log')): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.interest.log')); ?>"><i class="fas fa-hand-holding-usd"></i> <?php echo app('translator')->get('Return Interest Log'); ?></a>
            </li>

            <li <?php if(Request::routeIs('user.deposit') || Request::routeIs('user.manualDeposit.preview') ||  Request::routeIs('user.manualDeposit.confirm') || Request::routeIs('user.deposit.preview')  ): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.deposit')); ?>"><i class="far fa-credit-card"></i> <?php echo app('translator')->get('Deposit Now'); ?></a>
            </li>

            <li <?php if(Request::routeIs('user.deposit.history')): ?> class="active" <?php endif; ?>>
                <a href="<?php echo e(route('user.deposit.history')); ?>"> <i class="fas fa-file-alt"></i> <?php echo app('translator')->get('Deposit History'); ?></a>
            </li>


            <li <?php if(Request::routeIs('user.withdraw.money')): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.withdraw.money')); ?>"><i class="fas fa-university"></i> <?php echo app('translator')->get('Withdraw Now'); ?></a>
            </li>

            <li <?php if(Request::routeIs('user.withdrawLog')): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.withdrawLog')); ?>"> <i class="fas fa-file-alt"></i>  <?php echo app('translator')->get('Withdraw History'); ?></a>
            </li>

            <li <?php if(Request::routeIs('user.transactions')): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.transactions')); ?>"><i class="fas fa-exchange-alt"></i> <?php echo app('translator')->get('Transaction History'); ?></a>
            </li>

            <li <?php if(Request::routeIs('user.referral')): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.referral')); ?>"><i class="fas fa-hands-helping"></i> <?php echo app('translator')->get('Referral Statistic'); ?></a>
            </li>

            <li <?php if(Request::routeIs('user.edit-profile')): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.edit-profile')); ?>"><i class="fas fa-address-card"></i> <?php echo app('translator')->get('Profile'); ?></a>
            </li>

            <li <?php if(Request::routeIs('user.change-password')): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.change-password')); ?>"><i class="fas fa-key"></i> <?php echo app('translator')->get('Change Password'); ?></a>
            </li>

            <li <?php if(Request::routeIs('user.ticket')): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.ticket')); ?>"><i class="fas fa-ticket-alt"></i> <?php echo app('translator')->get('Support Ticket'); ?></a>
            </li>
            

            <li <?php if(Request::routeIs('user.twoFA')): ?> class="active" <?php endif; ?>>
                <a  href="<?php echo e(route('user.twoFA')); ?>"><i class="fas fa-shield-alt"></i>  <?php echo app('translator')->get('2FA Security'); ?></a>
            </li>

            <li>
                <a  href="<?php echo e(route('user.logout')); ?>"> <i class="fa fa-sign-out-alt"></i>  <?php echo app('translator')->get('Logout'); ?></a>
            </li>



        </ul>
    </div>
</div>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/partials/sidebar.blade.php ENDPATH**/ ?>