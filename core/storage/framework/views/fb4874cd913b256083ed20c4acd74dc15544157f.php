<?php if($general->alert == 1): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/iziToast.min.css')); ?>">
<?php elseif($general->alert == 2): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/toastr.min.css')); ?>">
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\maxitproject\core\resources\views/partials/notify-css.blade.php ENDPATH**/ ?>