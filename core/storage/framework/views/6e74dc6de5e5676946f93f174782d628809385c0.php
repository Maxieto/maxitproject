<?php $__env->startSection('panel'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="<?php echo e(route('admin.frontend.update', $blog->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">

                        <div class="form-row">

                            <div class="col-md-4">

                                <input type="hidden" name="has_image" value="1">
                                <div class="form-group">
                                    <div class="image-upload">
                                        <div class="thumb">
                                            <div class="avatar-preview">
                                                <div class="profilePicPreview" style="background-image: url(<?php echo e(get_image(config('constants.frontend.feature.path') .'/'. @$blog->value->image)); ?>)">
                                                    <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="avatar-edit">
                                                <input type="file" class="profilePicUpload" name="image_input" id="profilePicUpload1" accept=".png, .jpg, .jpeg">
                                                <label for="profilePicUpload1" class="bg-primary"> image</label>
                                                <small class="mt-2 text-facebook">Supported files: <b>jpeg, jpg</b>.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo e(@$blog->value->title); ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Short Details</label>
                                    <input type="text" class="form-control" placeholder="Short Details" name="short_details" value="<?php echo e(@$blog->value->short_details); ?>" required/>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-block btn-primary mr-2">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="table-responsive table-responsive-xl">
                    <table class="table align-items-center table-light">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Details</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        <?php $__empty_1 = true; $__currentLoopData = $howItWorks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>

                                <td><?php echo  @$testi->value->icon; ?></td>
                                <td><?php echo e($testi->value->title); ?></td>
                                <td><?php echo e(@$testi->value->short_details); ?></td>
                                <td>
                                    <button class="btn btn-primary updateBtn"  data-route="<?php echo e(route('admin.frontend.update', $testi->id)); ?>"  data-id="<?php echo e($testi->id); ?>" data-title="<?php echo e($testi->value->title); ?>" data-short_details="<?php echo e($testi->value->short_details); ?>" data-icon="<?php echo e(@$testi->value->icon); ?>"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger removeBtn" data-id="<?php echo e($testi->id); ?>"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td class="text-muted text-center" colspan="100%"><?php echo e($empty_message); ?></td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <?php echo e($howItWorks->links()); ?>

                    </nav>
                </div>

            </div>
        </div>
    </div>



    
    <div id="addModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.frontend.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="key" value="feature">
                        <div class="form-group">
                            <label> Title</label>
                            <input type="text" class="form-control form-control-lg" name="title" value="<?php echo e(old('title')); ?>" required placeholder="Title">
                        </div>


                        <div class="form-group">
                            <label> Short Details </label>
                            <input type="text" class="form-control form-control-lg" name="short_details" value="<?php echo e(old('short_details')); ?>" required placeholder="Short Details">
                        </div>

                        <div class="form-group">
                            <label>Icon</label>
                            <div class="input-group has_append">
                                <input type="text" class="form-control" name="icon" required>

                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary iconPicker" data-icon="fas fa-home" role="iconpicker"></button>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div id="updateBtn" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Update </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" class="edit-route" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="modal-body">


                        <div class="form-group">
                            <label> Title</label>
                            <input type="text" class="form-control form-control-lg" name="title" value="<?php echo e(old('title')); ?>" required placeholder="Title">
                        </div>

                        <div class="form-group">
                            <label> Short Details </label>
                            <input type="text" class="form-control form-control-lg" name="short_details" value="<?php echo e(old('short_details')); ?>" required placeholder="Short Details">
                        </div>

                        <div class="form-group">
                            <label>Icon</label>
                            <div class="input-group has_append">
                                <input type="text" class="form-control" name="icon" required>

                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary iconPicker" data-icon="fas fa-home" role="iconpicker"></button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    
    <div id="removeModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Removal Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.frontend.remove')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p>Are you sure to remove this post?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Remove</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="javascript:void(0)" class="btn btn-success addBtn"><i class="fa fa-fw fa-plus"></i>Add New</a>
<?php $__env->stopPush(); ?>




<?php $__env->startPush('style-lib'); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/bootstrap-iconpicker.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script-lib'); ?>
    <script src="<?php echo e(asset('assets/admin/js/bootstrap-iconpicker.bundle.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>

    <script>
        $('.removeBtn').on('click', function() {
            var modal = $('#removeModal');
            modal.find('input[name=id]').val($(this).data('id'))
            modal.modal('show');
        });

        $('.addBtn').on('click', function() {
            var modal = $('#addModal');
            modal.find('input[name=id]').val($(this).data('id'));
            modal.find('input[name=icon]').val($(this).data('icon'));
            modal.find('input[name=short_details]').val($(this).data('short_details'));
            modal.modal('show');
        });


        $('.updateBtn').on('click', function() {
            var modal = $('#updateBtn');
            modal.find('.edit-route').attr('action',$(this).data('route'));

            modal.find('input[name=id]').val($(this).data('id'));
            modal.find('input[name=title]').val($(this).data('title'));
            modal.find('input[name=short_details]').val($(this).data('short_details'));

            modal.find('input[name=icon]').val($(this).data('icon'));
            modal.modal('show');
        });

    $('#updateBtn').on('shown.bs.modal', function (e) { $(document).off('focusin.modal'); });
    $('#addModal').on('shown.bs.modal', function (e) { $(document).off('focusin.modal'); });
    
        $('.iconPicker').iconpicker({
            align: 'center', // Only in div tag
            arrowClass: 'btn-danger',
            arrowPrevIconClass: 'fas fa-angle-left',
            arrowNextIconClass: 'fas fa-angle-right',
            cols: 10,
            footer: true,
            header: true,
            icon: 'fas fa-bomb',
            iconset: 'fontawesome5',
            labelHeader: '{0} of {1} pages',
            labelFooter: '{0} - {1} of {2} icons',
            placement: 'bottom', // Only in button tag
            rows: 5,
            search: false,
            searchText: 'Search icon',
            selectedClass: 'btn-success',
            unselectedClass: ''
        }).on('change', function(e){
            $(this).parent().siblings('input[name=icon]').val(`<i class="${e.icon}"></i>`);
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maxitproject\core\resources\views/admin/frontend/feature/index.blade.php ENDPATH**/ ?>