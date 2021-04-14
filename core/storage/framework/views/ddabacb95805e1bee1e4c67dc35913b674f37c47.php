<!-- ========Footer-Section Starts Here ========-->
<footer class="footer-top padding-top">
    <div class="footer-shape"></div>
    <div class="tree1">
        <img src="<?php echo e(asset('assets/images/frontend/footer/tree1.png')); ?>" alt="footer">
    </div>
    <div class="tree2 wow slideInUp">
        <img src="<?php echo e(asset('assets/images/frontend/footer/tree2.png')); ?>" alt="footer">
    </div>
    <div class="futa">
        <img src="<?php echo e(asset('assets/images/frontend/footer/futa.png')); ?>" alt="footer">
    </div>
    <div class="futa two">
        <img src="<?php echo e(asset('assets/images/frontend/footer/futa.png')); ?>" alt="footer">
    </div>
    <div class="coin-3">
        <img src="<?php echo e(asset('assets/images/frontend/footer/coin1.png')); ?>" alt="footer">
    </div>
    <div class="coin-3 two">
        <img src="<?php echo e(asset('assets/images/frontend/footer/coin1.png')); ?>" alt="footer">
    </div>
    <div class="coin-3 three">
        <img src="<?php echo e(asset('assets/images/frontend/footer/coin1.png')); ?>" alt="footer">
    </div>
    <div class="coin-4">
        <img src="<?php echo e(asset('assets/images/frontend/footer/coin1.png')); ?>" alt="footer">
    </div>
    <div class="coin-4 two">
        <img src="<?php echo e(asset('assets/images/frontend/footer/coin1.png')); ?>" alt="footer">
    </div>
    <div class="coin-4 three">
        <img src="<?php echo e(asset('assets/images/frontend/footer/coin1.png')); ?>" alt="footer">
    </div>
    <div class="coin-4 four">
        <img src="<?php echo e(asset('assets/images/frontend/footer/coin1.png')); ?>" alt="footer">
    </div>
    <div class="star-2 two">
        <img src="<?php echo e(asset('assets/images/frontend/animation/04.png')); ?>" alt="shape">
    </div>
    <div class="star-2 three">
        <img src="<?php echo e(asset('assets/images/frontend/animation/04.png')); ?>" alt="shape">
    </div>
    <div class="container">
        <div class="footer-area">
            <div class="footer-widget widget-about">
                <h5 class="title">


                    <a href="<?php echo e(url('/')); ?>" class="text-center">
                        <img src="<?php echo e(get_image(config('constants.logoIcon.path') .'/logo.png')); ?>" class="logo-max" alt="logo">
                    </a>
                </h5>
                <div class="content">

                    <p><?php echo  $contact->value->website_footer ?></p>
                    <ul class="social-icons">
                        <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e($data->value->url); ?>" target="_blank"
                                   title="<?php echo e($data->value->title); ?>"><?php echo $data->value->icon  ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="footer-widget widget-links">
                <h5 class="title">
                    <?php echo app('translator')->get('Company'); ?>
                </h5>
                <div class="content">
                    <ul>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('home.pages',[$data->slug])); ?>"><?php echo e(__($data->name)); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('home.blog')); ?>"><?php echo app('translator')->get('Blog'); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-widget widget-links">
                <h5 class="title">
                    <?php echo app('translator')->get('Useful Link'); ?>
                </h5>
                <div class="content">
                    <ul>
                        <?php $__currentLoopData = $company_policy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('home.policy',[$policy, str_slug($policy->value->title)])); ?>">
                                    <?php echo e(__($policy->value->title)); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('home.rules')); ?>"><?php echo app('translator')->get('Rules'); ?></a></li>

                            <li><a href="<?php echo e(route('home.contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-widget widget-about">
                <h5 class="title">
                    <?php echo e(__(@$contact->data_values->title)); ?>

                </h5>
                <div class="content">
                    <ul class="addr">
                        <li><?php echo e($contact->data_values->contact_details); ?></li>
                        <li>
                            <a href="javascript:void(0)">Call Us Now  <?php echo e($contact->data_values->contact_number); ?></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"> <?php echo e($contact->data_values->email_address); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom padding-top light-color text-center pb-70">
            <p>&copy; <?php echo e(date('Y')); ?> <a href="<?php echo e(url('/')); ?>"><?php echo e($general->sitename); ?></a>. <?php echo app('translator')->get('All rights reserved'); ?></p>
        </div>
    </div>
</footer>
<!-- ========Footer-Section Ends Here ========-->

<?php
    if($plugins[1]->status == 1){
        $appKeyCode = $plugins[1]->shortcode->app_key->value;
        $twakTo = str_replace("{{app_key}}",$appKeyCode,$plugins[1]->script);
        echo $twakTo;
    }
?>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/partials/footer.blade.php ENDPATH**/ ?>