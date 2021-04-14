<?php $__env->startSection('panel'); ?>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header font-weight-bold">
                <h4 class="float-left">Subject : <?php echo e($ticket->subject); ?></h4>

                <div class="float-right">
                <?php if($ticket->status == 0): ?>
                        <span class="badge badge-primary">Open</span>
                <?php elseif($ticket->status == 1): ?>
                        <span class="badge badge-success">Answered</span>
                <?php elseif($ticket->status == 2): ?>
                        <span class="badge badge-info">Customer Replied</span>
                <?php elseif($ticket->status == 3): ?>
                        <span class="badge badge-danger">Closed</span>
                <?php endif; ?>
                </div>
            </div>

            <div class="card-body ">

                <div class="accordion" id="accordionExample">

                    <div class="card">
                        <div class="card-header bg-dark-blue " id="headingThree">
                            <h2 class="mb-0 ">
                                <a class="btn btn-link collapsed  text-white  float-left accor" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-pencil"></i> <?php echo app('translator')->get('Reply'); ?>
                                </a>


                                <a class="btn btn-link collapsed text-white  float-right accor" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-plus"></i>
                                </a>

                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

                            <div class="card-body">



                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" class="form-horizontal" action="<?php echo e(route('admin.ticket.send', $ticket->id)); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" id="inputMessage"
                                      placeholder="Your Message ..."></textarea>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-12">
                                                    <label for="inputAttachments"><?php echo app('translator')->get('Attachments'); ?></label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="file" name="attachments[]" id="inputAttachments" class="form-control" />
                                                    <div id="fileUploadsContainer"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="button" class="btn btn-primary btn-block" onclick="extraTicketAttachment()">
                                                        <i class="fa fa-plus"></i> <?php echo app('translator')->get('Add More'); ?>
                                                    </button>
                                                </div>
                                                <div class="col-xs-12 ticket-attachments-message text-muted">
                                                    Allowed File Extensions: .jpg, .jpeg, .png, .pdf,
                                                </div>
                                            </div>

                                            <div class="row justify-content-center mt-4">

                                                <div class="col-md-4">
                                                <?php if($ticket->status != 4): ?>
                                                        <button class="btn btn-primary  " type="submit"
                                                                name="replayTicket" value="1"><i
                                                                class="fa fa-fw fa-lg fa-check-circle"></i>Reply
                                                        </button>
                                                        <button class="btn btn-danger  " type="button"
                                                                data-toggle="modal" data-target="#DelModal"><i
                                                                class="fa fa-fw fa-lg fa-times-circle"></i>Close
                                                        </button>
                                                <?php else: ?>
                                                        <button class="btn btn-danger  " type="submit"
                                                                name="replayTicket" value="1"><i
                                                                class="fa fa-fw fa-lg fa-times-circle"></i>Closed
                                                        </button>
                                                <?php endif; ?>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





                <div class="messanger ">
                    <div class="messages ">
                        <ol class="commentlist noborder nomargin nopadding clearfix  ">
                            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($message->type == 1): ?>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <li class="comment even thread-even depth-1 " id="li-comment-1">
                                                <div id="comment-1" class="comment-wrap clearfix">
                                                    <div class="comment-meta">
                                                        <div class="comment-author vcard">
                                                                <span class="comment-avatar clearfix">
                                                                        <img alt=""
                                                                             src="<?php echo e(get_image(config('constants.user.profile.path') .'/'. $ticket->user->image)); ?>"
                                                                             class="avatar avatar-60 photo avatar-default"
                                                                             width="60" height="60">

                                                                </span>

                                                        </div>
                                                    </div>
                                                    <div class="comment-content clearfix">
                                                        <div class="comment-author"><a
                                                                href="<?php echo e(route('admin.users.detail', $ticket->user_id)); ?>"><?php echo e($ticket->user->username); ?></a>
                                                            <span><?php echo e($message->created_at->format('d F, Y - h:i A')); ?></span>
                                                        </div>
                                                        <p><?php echo e($message->message); ?></p>
                                                        <?php if($message->attachments()->count() > 0): ?>
                                                            <div class="mt-2">
                                                                <?php $__currentLoopData = $message->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <a href="<?php echo e(route('admin.ticket.download',Crypt::encrypt($image->id))); ?>" class="ml-4"><i class="fa fa-file"></i>  <?php echo e(++$k); ?> <?php echo app('translator')->get('File Download'); ?></a>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        <?php endif; ?>

                                                        <button data-id="<?php echo e($message->id); ?>" type="button"
                                                                data-toggle="modal" data-target="#DelMessage" class="btn btn-danger btn-sm float-right mt-2 delete-message"><i class="fa fa-trash"></i> Delete</button>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                <?php elseif($message->type == 2): ?>
                                    <div class="row">
                                        <div class="col-md-10 offset-md-2">

                                            <li class="comment even thread-even depth-1" id="li-comment-1">
                                                <div id="comment-1" class="comment-wrap clearfix">
                                                    <div class="comment-meta">
                                                        <div class="comment-author vcard">
                                                                <span class="comment-avatar clearfix">
                                                                    <img alt=""
                                                                         src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>"
                                                                         class="avatar avatar-60 photo avatar-default"
                                                                         width="60" height="60"></span>
                                                        </div>
                                                    </div>
                                                    <div class="comment-content clearfix">
                                                        <div class="comment-author">
                                                            Me<span><?php echo e($message->created_at->format('d F, Y - h:i A')); ?></span>
                                                        </div>
                                                        <p><?php echo e($message->message); ?></p>
                                                        <?php if($message->attachments()->count() > 0): ?>
                                                            <div class="mt-2">
                                                                <?php $__currentLoopData = $message->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <a href="<?php echo e(route('admin.ticket.download',encrypt($image->id))); ?>" class="ml-4"><i class="fa fa-file"></i> <?php echo e(++$k); ?> <?php echo app('translator')->get('File Download'); ?></a>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        <?php endif; ?>

                                                        <button data-id="<?php echo e($message->id); ?>" type="button"
                                                                data-toggle="modal" data-target="#DelMessage" class="btn btn-danger btn-sm float-right mt-2  delete-message"><i class="fa fa-trash"></i> Delete</button>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><i class='fa fa-exclamation-triangle'></i><strong>Confirmation!</strong>
                        </h4>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">X</button>
                    </div>
                    <div class="modal-body">
                        <strong>Are you  want to Close This Support Ticket?</strong>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="<?php echo e(route('admin.ticket.send', $ticket->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <button type="submit" class="btn btn-primary custom-btn-background" name="replayTicket"
                                    value="2"><i class="fa fa-check"></i> Yes I'm Sure.
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                                Close
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>



        <div class="modal fade" id="DelMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><i class='fa fa-exclamation-triangle'></i><strong>Confirmation!</strong>
                        </h4>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">X</button>
                    </div>
                    <div class="modal-body">
                        <strong>Are you sure to delete this?</strong>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="<?php echo e(route('admin.ticket.delete')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="message_id" class="message_id">
                            <button type="submit" class="btn btn-primary "><i class="fa fa-check"></i> Yes I'm Sure.
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                                Close
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/simplemde.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/ticket.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/admin/js/simplemde.min.js')); ?>"></script>

    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("inputMessage") });

        $(document).ready(function () {
            $('.card-body').scrollTop($('.card-body')[0].scrollHeight);


            $('.delete-message').on('click', function (e) {
                $('.message_id').val($(this).data('id'));
            })

        });

        function extraTicketAttachment() {
            $("#fileUploadsContainer").append('<input type="file" name="attachments[]" class="form-control mt-1" required />')
        }


    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/support/reply.blade.php ENDPATH**/ ?>