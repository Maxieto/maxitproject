<?php $__env->startSection('content'); ?>
    <?php echo $__env->make(activeTemplate().'partials.frontend-breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ========Faq-Section Starte Here ========-->
    <section class="faq-section padding-top padding-bottom">
        <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="section-header">
                            <h2 class="title"><?php echo e(__(@$ruleheads->data_values->title)); ?></h2>
                            <p><?php echo e(__(@$ruleheads->data_values->short_details)); ?></p>
                        </div>
                    </div>
                </div>



            <div class="row justify-content-center justify-content-lg-between">

                <div class="col-lg-12 col-xl-12">
                    <div class="faq-wrapper style-two">
                        <?php $__currentLoopData = $rules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="faq-item  open active">
                                <div class="faq-content">
                                    <p><?php echo $data->value->body ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========Faq-Section Ends Here ========-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('load-js'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make(activeTemplate() .'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/rules.blade.php ENDPATH**/ ?>