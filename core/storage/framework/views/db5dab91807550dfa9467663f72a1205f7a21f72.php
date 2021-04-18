<?php $__env->startSection('panel'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="<?php echo e(route('admin.frontend.update', $blog->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">

                        <div class="form-row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" placeholder="Heading" name="title" value="<?php echo e(@$blog->value->title); ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Sub Heading</label>
                                    <input type="text" class="form-control" placeholder="Sub Heading" name="short_details" value="<?php echo e(@$blog->value->short_details); ?>" required/>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                                <button type="submit" class="btn btn-block btn-primary ">Update</button>


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
                            <th scope="col">Posted</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $__empty_1 = true; $__currentLoopData = $blog_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td scope="row">
                                <div class="media align-items-center">
                                    <a href="<?php echo e(route('admin.frontend.blog.edit', [$post->id, slug($post->value->title)])); ?>" class="avatar avatar-sm rounded-circle mr-3">
                                        <img src="<?php echo e(get_image(config('constants.frontend.blog.post.path') .'/thumb_'. $post->value->image)); ?>" alt="image">
                                    </a>
                                    <div class="media-body">
                                        <a href="<?php echo e(route('admin.frontend.blog.edit', [$post->id, slug($post->value->title)])); ?>"><span class="name mb-0"><?php echo e($post->value->title); ?></span></a>
                                    </div>

                                </div>
                            </td>
                            <td><?php echo e(\Carbon\Carbon::parse($post->created_at)->diffForHumans()); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.frontend.blog.edit', [$post->id, slug($post->value->title)])); ?>" class="btn btn-rounded btn-primary text-white"><i class="fa fa-fw fa-pencil"></i></a>
                                <button class="btn btn-danger removeBtn" data-id="<?php echo e($post->id); ?>"><i class="fa fa-trash"></i></button>
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
                    <?php echo e($blog_posts->links()); ?>

                </nav>
            </div>
            
        </div>
    </div>
</div>


<div id="removeModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Blog Post Removal Confirmation</h5>
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
<a href="<?php echo e(route('admin.frontend.blog.new')); ?>" class="btn btn-success"><i class="fa fa-fw fa-plus"></i>Add New</a>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

<script>
    $('.removeBtn').on('click', function() {
        var modal = $('#removeModal');
        modal.find('input[name=id]').val($(this).data('id'))
        modal.modal('show');
    });
</script>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maxitproject\core\resources\views/admin/frontend/blog/index.blade.php ENDPATH**/ ?>