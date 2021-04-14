<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<a href="#0" class="scrollToTop">
    <i class="fas fa-angle-up"></i>
</a>
<div class="overlay"></div>
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <div class="left-side d-none d-sm-flex">
                    <ul class="social">
                        <li>
                            <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($data->value->url); ?>" target="_blank"
                                   title="<?php echo e($data->value->title); ?>"><?php echo   $data->value->icon  ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </li>
                    </ul>
                    <p class="mail">
                        <i class="far fa-envelope"></i><?php echo e(@$contact->data_values->email_address); ?>

                    </p>
                </div>
                <div class="right-side">
                    <div class="form-group">
                        <i class="fas fa-globe"></i>
                        <select class="select-bar langSel">
                           
                            <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->code); ?>" <?php if(session('lang') == $item->code): ?> selected <?php endif; ?>><i
                                        class="flag-icon flag-icon-es"></i><?php echo e(__($item->name)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php if(auth()->guard()->guest()): ?>
                    <div class="account">
                        <a href="<?php echo e(route('user.login')); ?>" class="text-white">
                            <i class="fas fa-user"></i><?php echo app('translator')->get('Login'); ?>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-area">
                <div class="logo">
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(get_image(config('constants.logoIcon.path') .'/logo.png')); ?>" alt="image">
                    </a>

                </div>
                <ul class="menu">

                    <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                    <li><a href="<?php echo e(route('home.plan')); ?>"><?php echo app('translator')->get('Plan'); ?></a></li>
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('home.pages',[$data->slug])); ?>"><?php echo e(__($data->name)); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('home.blog')); ?>"><?php echo app('translator')->get('Blog'); ?></a></li>
                    <li><a href="<?php echo e(route('home.contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>


                    <?php if(auth()->guard()->check()): ?>
                        <li>
                            <?php if(Request::routeIs('user*')): ?>
                                <a href="<?php echo e(route('user.logout')); ?>" class="header-button bg-3"><?php echo app('translator')->get('Logout'); ?></a>
                            <?php else: ?>
                            <a href="<?php echo e(route('user.home')); ?>" class="header-button bg-3"><?php echo app('translator')->get('Dashboard'); ?></a>
                            <?php endif; ?>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e(route('user.register')); ?>" class="header-button bg-3"><?php echo app('translator')->get('Join With Us'); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>

<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/partials/header.blade.php ENDPATH**/ ?>