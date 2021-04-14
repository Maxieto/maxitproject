<?php echo $__env->make(activeTemplate().'layouts.new_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.notify-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ========User-Panel-Section Starte Here ========-->
    <section class="user-panel-section padding-bottom padding-top">
        <div class="container user-panel-container">
            <div class=" user-panel-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user-panel-header mb-60-80">
                            <div class="left d-sm-block d-none">
                                <h6 class="title"><?php echo e(__($page_title)); ?></h6>
                            </div>
                            <ul class="right">
                                <li>
                                    <a href="#0" class="log-out d-lg-none">

                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                                aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>

                                            <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-area fullscreen-width">
                            <div class="tab-item active">
                                <div class="post-item post-details">
                                    <div class="post-content post-referal">
                                        <div class="row mb-4 justify-content-end">
                                            <div class="col-lg-6">
                                                <div class="banner-form-group">
                                                    <div class="input-group">
                                                        <input type="text" name="text" class="form-control"
                                                               id="referralURL"
                                                               value="<?php echo e(route('refer.register',[Auth::user()->username])); ?>"
                                                               readonly>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text copytext" id="copyBoard"
                                                                  onclick="myFunction()"> <i
                                                                    class="fa fa-copy"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <div class="part-text pranto-ul">
                                                <ul style="width: 100%">
                                                    <li class="container"><p><strong><?php echo e(Auth::user()->username); ?></strong>
                                                        </p>
                                                        <ul>
                                                            <?php   echo  showBelowUser(Auth::id()) ?>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>

                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="table-responsive table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                                            <table class="table table-striped">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col"><?php echo app('translator')->get('Date'); ?></th>
                                                    <th scope="col"><?php echo app('translator')->get('Commission Via'); ?></th>
                                                    <th scope="col"><?php echo app('translator')->get('Description'); ?></th>

                                                    <th scope="col"><?php echo app('translator')->get('Level Commission'); ?></th>
                                                    <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                                                    <th scope="col"><?php echo app('translator')->get('After Balance'); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(count($trans)==0): ?>
                                                    <tr>
                                                        <td colspan="5"
                                                            class="text-center"><?php echo app('translator')->get('No Data Available'); ?></td>
                                                    </tr>
                                                <?php endif; ?>

                                                <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr <?php if($data->amount < 0): ?> style="background-color: #e4afaf" <?php endif; ?>>
                                                        <td data-label="<?php echo app('translator')->get('Date'); ?>"><?php echo e(date('d M, Y h:i:s A', strtotime($data->created_at))); ?></td>
                                                        <td data-label="<?php echo app('translator')->get('Commission Via'); ?>">
                                                            <strong><?php echo e($data->bywho->username); ?></strong></td>
                                                        <td data-label="<?php echo app('translator')->get('Description'); ?>"><?php echo e(__($data->title)); ?></td>
                                                        <td data-label="<?php echo app('translator')->get('Level Commission'); ?>"><?php echo e(__($data->level)); ?></td>
                                                        <td data-label="<?php echo app('translator')->get('Amount'); ?>"><?php echo e(__($general->cur_sym)); ?> <?php echo e(formatter_money($data->amount)); ?></td>
                                                        <td data-label="<?php echo app('translator')->get('After Balance'); ?>"><?php echo e(__($general->cur_sym)); ?> <?php echo e(formatter_money($data->main_amo)); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php echo e($trans->links()); ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========User-Panel-Section Ends Here ========-->


    <script src="<?php echo e(asset('assets_new/js/purpose.core.js')); ?>"></script>
    <!-- Page JS -->
    <script src="<?php echo e(asset('assets_new/libs/swiper/dist/js/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_new/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_new/libs/typed.js/lib/typed.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_new/libs/isotope-layout/dist/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_new/libs/jquery-countdown/dist/jquery.countdown.min.js')); ?>"></script>
    <script>
        function myFunction() {
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            var alertStatus = "<?php echo e($general->alert); ?>";
            if (alertStatus == '1') {
                iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
            } else if (alertStatus == '2') {
                toastr.success("Copied: " + copyText.value);
            }
        }
    </script>


<?php $__env->startSection('load-js'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/templates/minimal/user/my_referral.blade.php ENDPATH**/ ?>