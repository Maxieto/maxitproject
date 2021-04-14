<?php $__env->startSection('panel'); ?>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body text-center border-bottom">
                <img src="<?php echo e(get_image(config('constants.user.profile.path') .'/'. $user->image)); ?>" alt="profile-image" class="user-image">
                <h5 class="card-title mt-3"><?php echo e($user->name); ?></h5>
            </div>
            <div class="card-body">
                <p class="clearfix">
                    <span class="float-left">Username</span>
                    <span class="float-right font-weight-bold"><a href="<?php echo e(route('admin.users.detail', $user->id)); ?>"><?php echo e($user->username); ?></a></span>
                </p>
                <p class="clearfix">
                    <span class="float-left">E-mail</span>
                    <span class="float-right text-muted"><?php echo e($user->email); ?></span>
                </p>
                <p class="clearfix">
                    <span class="float-left">Phone</span>
                    <span class="float-right text-muted"><?php echo e($user->mobile ?: 'Not available'); ?></span>
                </p>


                <?php $__currentLoopData = $user->wallets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wallet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="clearfix">
                    <span class="float-left"><?php echo e(str_replace('_',' ',strtoupper($wallet->type))); ?></span>
                    <span class="float-right text-muted"><?php echo e($general->cur_sym); ?><?php echo e(formatter_money($wallet->balance)); ?></span>
                </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <p class="clearfix">
                    <span class="float-left">Status</span>
                    <span class="float-right text-muted">
                        <?php switch($user->status):
                            case (1): ?>
                                <span class="badge badge-pill badge-success">Active</span>
                                <?php break; ?>
                            <?php case (2): ?>
                                <span class="badge badge-pill badge-danger">Banned</span>
                                <?php break; ?>
                        <?php endswitch; ?>
                    </span>
                </p>
            </div>

              <h6 style="text-align:center">
                <?php switch($user->id_verification_doc):
                    case (1): ?>
                        <span class="badge badge-pill badge-success">Verified</span>
                        <?php break; ?>
                    <?php case (0): ?>
                        <span class="badge badge-pill badge-danger">Unverified</span>
                        <?php break; ?>
                <?php endswitch; ?>
            </h6>


            <h6 style="text-align:center">Identity Document Font Image
                <div class="card-body text-center border-bottom">
                    <img src="<?php echo e(url('assets/images/doc') .'/'. $user->verification_doc); ?>" alt="profile-image" >
                    <h5 class="card-title mt-3"><?php echo e($user->name); ?></h5>
                </div>
            </h6>


                <h6 style="text-align:center">Identity Document Back Image
                    <div class="card-body text-center border-bottom">
                        <img src="<?php echo e(url('assets/images/doc') .'/'. $user->verification_doc_back); ?>" alt="profile-image" >
                        <h5 class="card-title mt-3"><?php echo e($user->name); ?></h5>
                    </div>
                </h6>



                <h6 style="text-align:center">Address  Document
                    <?php switch($user->id_verification_doc):
                        case (1): ?>
                            <span class="badge badge-pill badge-success">Verified</span>
                            <?php break; ?>
                        <?php case (0): ?>
                            <span class="badge badge-pill badge-danger">Unverified</span>
                            <?php break; ?>
                    <?php endswitch; ?>
                </h6>
                <div class="card-body text-center border-bottom">
                    <img src="<?php echo e(url('assets/images/doc') .'/'. $user->verification_address_doc); ?>" alt="profile-image" >
                    <h5 class="card-title mt-3"><?php echo e($user->name); ?></h5>
                </div>

        </div>

    </div>
    <div class="col-lg-9">
        <div class="card">

            <div class="row p-4">
                <div class="col-lg-4">
                    <div class="card outline-success">
                        <div class="card-body">
                            <div class="media align-items-center">
                            <div class="media-body text-left">
                                <h4 class="mb-0 text-success"><?php echo e($general->cur_text); ?> <?php echo e(formatter_money($withdrawals->total)); ?></h4>
                                <span class="text-success">Total Withdrawals</span>
                            </div>
                            <div class="align-self-center icon-lg">
                                <i class="fa fa-money text-success"></i>
                            </div>
                            </div>
                        </div>
                        <a href="<?php echo e(route('admin.users.withdrawals', $user->id)); ?>" class="text-white text-center">
                            <div class="card-footer btn btn-block btn-success">View All</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card outline-dark">
                        <div class="card-body">
                            <div class="media align-items-center">
                            <div class="media-body text-left">
                                <h4 class="mb-0 text-dark"><?php echo e($general->cur_text); ?> <?php echo e(formatter_money($deposits->total)); ?></h4>
                                <span class="text-dark">Total Deposits</span>
                            </div>
                            <div class="align-self-center icon-lg">
                                <i class="fa fa-money text-dark"></i>
                            </div>
                            </div>
                        </div>
                        <a href="<?php echo e(route('admin.users.deposits', $user->id)); ?>" class="text-white text-center">
                            <div class="card-footer btn btn-block btn-dark">View All</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card outline-primary">
                        <div class="card-body">
                            <div class="media align-items-center">
                            <div class="media-body text-left">
                                <h4 class="mb-0 text-primary"><?php echo e($transactions); ?></h4>
                                <span class="text-primary">Total Transactions</span>
                            </div>
                            <div class="align-self-center icon-lg">
                                <i class="fa fa-exchange text-primary"></i>
                            </div>
                            </div>
                        </div>
                        <a href="<?php echo e(route('admin.users.transactions', $user->id)); ?>" class="text-white text-center">
                            <div class="card-footer btn-block btn btn-primary">View All</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a class="text-white text-center btn-block" data-toggle="modal" href="#addSubModal">
                        <div class="card outline-primary">
                            <div class="card-body bg-primary">Add/Subtract Balance</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo e(route('admin.users.login.history.single', $user->id)); ?>" class="text-white text-center btn-block">
                        <div class="card outline-success bg-success">
                            <div class="card-body">Login Logs</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo e(route('admin.users.email.single', $user->id)); ?>" class="text-white text-center btn-block">
                        <div class="card outline-orange bg-orange">
                            <div class="card-body">Send Email</div>
                        </div>
                    </a>
                </div>
            </div>

            <form action="<?php echo e(route('admin.users.update', $user->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="firstname" value="<?php echo e($user->firstname ??  ''); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="lastname" value="<?php echo e($user->lastname ?? ''); ?>" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="email" value="<?php echo e($user->email ?? ''); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone </label>
                                <input class="form-control" type="text" name="mobile" value="<?php echo e($user->mobile  ?? ''); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">

                        <label>Address</label>
                        <br>
                        <small>Street</small>
                        <input class="form-control" type="text" value="<?php echo e($user->address->address ?? ''); ?>" name="address" placeholder="Street">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-3">
                            <small>City</small>
                            <input class="form-control" type="text" value="<?php echo e($user->address->city ?? ''); ?>" name="city" placeholder="City">
                        </div>
                        <div class="form-group col-lg-3">
                            <small>State</small>
                            <input class="form-control" type="text" value="<?php echo e($user->address->state ?? ''); ?>" name="state" placeholder="State">
                        </div>
                        <div class="form-group col-lg-3">
                            <small>Zip/Postal</small>
                            <input class="form-control" type="text" value="<?php echo e($user->address->zip ?? ''); ?>" name="zip" placeholder="Zip/Postal">
                        </div>
                        <div class="form-group col-lg-3">
                            <small>Country</small>
                            <select name="country" class="form-control"> <?php echo $__env->make('partials.country', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <p class="text-muted">Status</p>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-onstyle="success"    data-offstyle="danger" data-on="Active" data-off="Banned"  data-width="100%" name="status" <?php if($user->status): ?> checked <?php endif; ?>>
                        </div>

                        <div class="form-group col-lg-4">
                            <p class="text-muted">Email Verification</p>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Verified" data-off="Unverified" name="ev" <?php if($user->ev): ?> checked <?php endif; ?>>
                        </div>

                        <div class="form-group col-lg-4">
                            <p class="text-muted">SMS Verification</p>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Verified" data-off="Unverified" name="sv" <?php if($user->sv): ?> checked <?php endif; ?>>
                        </div>

                        <div class="form-group col-lg-6">
                            <p class="text-muted">2FA Status</p>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="On" data-off="Off" name="ts" <?php if($user->ts): ?> checked <?php endif; ?>>
                        </div>

                        <div class="form-group col-lg-6">
                            <p class="text-muted">2FA Verification</p>
                            <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Verified" data-off="Unverified" name="tv" <?php if($user->tv): ?> checked <?php endif; ?>>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 style="text-align:center ; margin-bottom:10px">Address Verificarion Deatils</h4>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="first_name_doc" value="<?php echo e($user->first_name_doc ??  ''); ?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Middle Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="middle_name_doc" value="<?php echo e($user->middle_name_doc ?? ''); ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last name <span class="text-danger">*</span></label>
                                <input class="form-control" type="last_name_doc" name="last_name_doc" value="<?php echo e($user->last_name_doc ?? ''); ?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date Of the Birth </label>
                                <input class="form-control" type="date" name="date_of_birth_doc" value="<?php echo e($user->date_of_birth_doc  ?? ''); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">

                        <label>Address</label>
                        <br>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <small>City</small>
                            <input class="form-control" type="city_doc" value="<?php echo e($user->city_doc ?? ''); ?>" name="city_doc" placeholder="City">
                        </div>
                        <div class="form-group col-lg-4">
                            <small>street</small>
                            <input class="form-control" type="address_doc" value="<?php echo e($user->address_doc ?? ''); ?>" name="address_doc" placeholder="State">
                        </div>
                        <div class="form-group col-lg-4">
                            <small>country </small>
                            <input class="form-control" type="text" value="<?php echo e($user->country_doc ?? ''); ?>" name="country_doc" placeholder="Country ">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <h5 class="text-muted" style="text-align:center">Identity information </h5>
                            <div class="row"  style="margin-top:20px" >
                                <div class="col-6">
                                    <a href="<?php echo e(url('admin/users/identityverification/'.$user->id.'/1')); ?>"  class="btn btn-primary btn-block">Accept</a>
                                </div>

                                <div class="col-6">
                                    <a href="<?php echo e(url('admin/users/identityverification/'.$user->id.'/0')); ?>"  class="btn btn-danger btn-block">Rejected</a>
                                </div>

                            </div>
                        </div>

                </div>


                <div class="card-footer">
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <input type="submit" class="btn btn-block btn-primary mt-2" value="Save Changes">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="addSubModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add / Subtract Balance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.users.addSubBalance', $user->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="checkbox" data-width="100%" data-height="44px" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Add Balance" data-off="Subtract Balance" name="act" checked>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Select Wallet<span class="text-danger">*</span></label>
                            <select name="wallet_id" class="form-control" required>
                                <?php $__currentLoopData = $user->wallets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wallet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($wallet->id); ?>"><?php echo e(str_replace('_',' ',strtoupper($wallet->type ?? ''))); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>


                        </div>
                        <div class="form-group col-md-12">
                            <label>Amount<span class="text-danger">*</span></label>
                            <div class="input-group has_append">
                                <input type="text" name="amount" class="form-control" placeholder="Please provide positive amount">
                                <div class="input-group-append"><div class="input-group-text"><?php echo e($general->cur_sym ?? ''); ?></div></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="sendEmailModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.users.email.single', $user->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Subject<span class="text-danger">*</span></label>
                            <input type="text" name="subject" class="form-control" placeholder="Email Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Message<span class="text-danger">*</span></label>
                            <textarea rows="5" name="message" class="form-control nicEdit" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
<style>
    .user-image {
        width: 200px;
        height: 200px;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<script>
$("select[name=country]").val("<?php echo e($user->address->country ?? ''); ?>");
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/stevejenkins/public_html/invest/core/resources/views/admin/users/detail.blade.php ENDPATH**/ ?>