<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($general->sitename($page_title)); ?></title>
    <link rel="icon" href="<?php echo e(get_image(config('constants.logoIcon.path') .'/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" type="image/png"
          href="<?php echo e(get_image(config('constants.logoIcon.path') .'/favicon.png')); ?>"/>

    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/bootstrap.min.css')); ?>">
    <?php echo $__env->yieldContent('import-css'); ?>
    <?php echo $__env->yieldPushContent('style-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/odometer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/owl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/magnific-popup.css')); ?>">

    <?php echo $__env->make('partials.notify-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/odometer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/main.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/style.php')); ?>?color=<?php echo e($general->bclr); ?>&secondColor=<?php echo e($general->sclr); ?>">

    <?php if(Request::routeIs('user*')): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/templates/minimul/css/user.css')); ?>">
    <?php endif; ?>

    <?php echo $__env->yieldContent('style'); ?>
</head>
<body>
<div class="main-section">
    <?php echo $__env->make(activeTemplate().'partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make(activeTemplate().'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>


<?php echo $__env->yieldPushContent('renderModal'); ?>



<script src="<?php echo e(asset('assets/templates/minimul/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/modernizr-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/owl.min.js')); ?>"></script>
<?php echo $__env->yieldContent('load-js'); ?>
<script src="<?php echo e(asset('assets/templates/minimul/js/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/odometer.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/viewport.jquery.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/nice-select.js')); ?>"></script>
<?php echo $__env->make('partials.notify-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('assets/templates/minimul/js/paroller.js')); ?>"></script>
<script src="<?php echo e(asset('assets/templates/minimul/js/main.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldPushContent('js'); ?>

<?php
    if($plugins[0]->status == 1){
        $appKeyCode = $plugins[0]->shortcode->app_key->value;
        $twakTo = str_replace("{{app_key}}",$appKeyCode,$plugins[0]->script);
        echo $twakTo;
    }
?>


</body>
</html>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/layouts/user.blade.php ENDPATH**/ ?>