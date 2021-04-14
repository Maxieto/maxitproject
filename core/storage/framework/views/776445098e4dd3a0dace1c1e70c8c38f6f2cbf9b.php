<?php $__env->startSection('panel'); ?>
<div class="row">
    <div class="col-md-12">
        <?php if(count($errors) > 0): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</strong>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CURRENT SETTING</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">

                                <thead>
                                <tr>

                                    <th>Level</th>
                                    <th>Commision</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>LEVEL# <?php echo e($p->level); ?></td>
                                        <td><?php echo e($p->percent); ?> %</td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <form action="<?php echo e(route('admin.setting.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                                <div class="form-row">

                                    <div class="form-group col">
                                        <p class="text-muted">Deposit Commission</p>
                                        <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="deposit_commission" <?php if($general->deposit_commission): ?> checked <?php endif; ?>>
                                    </div>
                                    <div class="form-group col">
                                        <p class="text-muted">Invest Commission</p>
                                        <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="invest_commission" <?php if($general->invest_commission): ?> checked <?php endif; ?>>
                                    </div>
                                    <div class="form-group col">
                                        <p class="text-muted">Interest return commission</p>
                                        <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="invest_return_commission" <?php if($general->invest_return_commission): ?> checked <?php endif; ?>>
                                    </div>

                                </div>
                            <div class="form-group row">
                                <div class="form-group col">
                                    <button type="submit" class="btn btn-block btn-primary mr-2">Submit</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CHANGE SETTING</h4>
                    </div>

                   <div class="card-body">
                       <div class="row">
                           <div class="col-md-6">
                               <input type="number" name="level" id="levelGenerate" placeholder="HOW MANY LEVEL" class="form-control input-lg">
                           </div>
                           <div class="col-md-6">

                               <button type="button" id="generate" class="btn btn-success btn-block btn-md">GENERATE</button>
                           </div>
                       </div>

                       <br>

                       <form action="<?php echo e(route('admin.store.refer')); ?>" id="prantoForm" style="display: none" method="post">
                           <?php echo e(csrf_field()); ?>

                           <div class="form-group">
                               <label class="text-success"> Level & Commission : <small>(Old Levels will Remove After Generate)</small> </label>
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="description" style="width: 100%;border: 1px solid #ddd;padding: 10px;border-radius: 5px" >
                                           <div class="row">
                                               <div class="col-md-12" id="planDescriptionContainer">

                                               </div>
                                           </div>


                                       </div>
                                   </div>
                               </div>
                           </div>
                           <hr>
                           <button type="submit" class="btn btn-primary btn-block">Submit</button>
                       </form>

                   </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        var max = 1;
        $(document).ready(function () {
            $("#generate").on('click', function () {

                var da = $('#levelGenerate').val();
                var a = 0;
                var val = 1;
                var guu = '';
                if (da !== '' && da >0)
                {
                    $('#prantoForm').css('display','block');

                    for (a; a < parseInt(da);a++){

                        console.log()

                        guu += '<div class="input-group" style="margin-top: 5px">\n' +
                            '<input name="level[]" class="form-control margin-top-10" type="number" readonly value="'+val+++'" required placeholder="Level">\n' +
                            '<input name="percent[]" class="form-control margin-top-10" type="text" required placeholder="Commission Percentage %">\n' +
                            '<span class="input-group-btn">\n' +
                            '<button class="btn btn-danger margin-top-10 delete_desc" type="button"><i class=\'fa fa-times\'></i></button></span>\n' +
                            '</div>'
                    }
                    $('#planDescriptionContainer').html(guu);

                }else {
                    alert('Level Field Is Required')
                }

            });

            $(document).on('click', '.delete_desc', function () {
                $(this).closest('.input-group').remove();
            });
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/refer.blade.php ENDPATH**/ ?>