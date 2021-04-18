<?php $__env->startSection('panel'); ?>
<div class="row">
  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="ff793f" data-before="cd6133" style="background: #ff793f; --before-bg-color:#cd6133;">
      <div class="details">
        <h2 class="amount mb-2 font-weight-bold"><?php echo e(collect($widget['total_users'])->count()); ?></h2>
        <h6 class="mb-3">Total Users</h6>
        <a href="<?php echo e(route('admin.users.all')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-group"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="33d9b2" data-before="218c74" style="background: #33d9b2; --before-bg-color:#218c74;">
      <div class="details">
        <h2 class="amount mb-2 font-weight-bold"><?php echo e(collect($widget['total_users'])->where('status', 1)->count()); ?></h2>
        <h6 class="mb-3">Active Users</h6>
        <a href="<?php echo e(route('admin.users.active')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-user-circle"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="ff5252" data-before="b33939" style="background: #ff5252; --before-bg-color:#b33939;">
      <div class="details">
        <h2 class="amount mb-2 font-weight-bold"><?php echo e(collect($widget['total_users'])->where('status', 0)->count()); ?></h2>
        <h6 class="mb-3">Banned Users</h6>
        <a href="<?php echo e(route('admin.users.banned')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-user-times"></i>
      </div>
    </div>
  </div>


    <?php $__currentLoopData = $widget['users_wallets']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="B33771" data-before="6D214F" style="background: #B33771; --before-bg-color:#6D214F;">
      <div class="details">
        <h3 class="amount mb-2 font-weight-bold"><?php echo e($general->cur_sym); ?>  <?php echo e(formatter_money($data->amo)); ?></h3>
        <h6 class="mb-3"><?php echo e(strtoupper(str_replace('_',' ',$data->type))); ?></h6>
        <a href="<?php echo e(route('admin.users.all')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="40407a" data-before="2c2c54" style="background: #40407a; --before-bg-color:#2c2c54;">
      <div class="details">
        <h2 class="amount mb-2 font-weight-bold"><?php echo e(collect($widget['total_users'])->where('ev', 0)->count()); ?></h2>
        <h6 class="mb-3">Email Unerified Users</h6>
        <a href="<?php echo e(route('admin.users.emailUnverified')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-envelope"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="34ace0" data-before="227093" style="background: #34ace0; --before-bg-color:#227093;">
      <div class="details">
        <h2 class="amount mb-2 font-weight-bold"><?php echo e(collect($widget['total_users'])->where('sv', 0)->count()); ?></h2>
        <h6 class="mb-3">SMS Unverified Users</h6>
        <a href="<?php echo e(route('admin.users.smsUnverified')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-comments-o"></i>
      </div>
    </div>
  </div>
  
  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="ff793f" data-before="cd6133" style="background: #ff793f; --before-bg-color:#cd6133;">
      <div class="details">
        <h2 class="amount mb-2 font-weight-bold"><?php echo e(formatter_money($widget['deposits']->total)); ?></h2>
        <h6 class="mb-3">Total Deposits</h6>
        <a href="<?php echo e(route('admin.deposit.list')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="33d9b2" data-before="218c74" style="background: #33d9b2; --before-bg-color:#218c74;">
      <div class="details">
        <h3 class="amount mb-2 font-weight-bold"><?php echo e($general->cur_sym); ?><?php echo e(formatter_money($widget['deposits']->total_charge)); ?></h3>
        <h6 class="mb-3">Total Deposit Charge</h6>
        <a href="<?php echo e(route('admin.deposit.list')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="ff5252" data-before="b33939" style="background: #ff5252; --before-bg-color:#b33939;">
      <div class="details">
        <h3 class="amount mb-2 font-weight-bold"><?php echo e($general->cur_sym); ?><?php echo e(formatter_money($widget['deposits']->total_amount)); ?></h3>
        <h6 class="mb-3">Total Deposit Amount</h6>
        <a href="<?php echo e(route('admin.deposit.list')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>
  
  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="B33771" data-before="6D214F" style="background: #B33771; --before-bg-color:#6D214F;">
      <div class="details">
        <h2 class="amount mb-2 font-weight-bold"><?php echo e(formatter_money($widget['withdrawals']->total)); ?></h2>
        <h6 class="mb-3">Total Withdrawals</h6>
        <a href="<?php echo e(route('admin.withdraw.log')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="40407a" data-before="2c2c54" style="background: #40407a; --before-bg-color:#2c2c54;">
      <div class="details">
        <h3 class="amount mb-2 font-weight-bold"><?php echo e($general->cur_sym); ?><?php echo e(formatter_money($widget['withdrawals']->total_charge)); ?></h3>
        <h6 class="mb-3">Total Withdrawal Charge</h6>
        <a href="<?php echo e(route('admin.withdraw.log')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="dashboard-w2 slice border-radius-5" data-bg="34ace0" data-before="227093" style="background: #34ace0; --before-bg-color:#227093;">
      <div class="details">
        <h3 class="amount mb-2 font-weight-bold"><?php echo e($general->cur_sym); ?><?php echo e(formatter_money($widget['withdrawals']->total_amount)); ?></h3>
        <h6 class="mb-3">Total Withdrawal Amount</h6>
        <a href="<?php echo e(route('admin.withdraw.log')); ?>" class="btn btn-sm btn-neutral">View all</a>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
    </div>
  </div>




</div>
<div class="row">

  <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
        <h4 class="font-weight-normal">Users By OS</h4>
      </div>
      <div class="card-body">
        <canvas id="userOsChart"></canvas>
      </div>
    </div>
  </div><!--card end-->

  <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
        <h4 class="font-weight-normal">Users By Browser</h4>
      </div>
      <div class="card-body">
        <canvas id="userBrowserChart"></canvas>
      </div>
    </div>
  </div><!--card end-->

  <div class="col-xl-4 col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
        <h4 class="font-weight-normal">Users By Country</h4>
      </div>
      <div class="card-body">
        <canvas id="userCountryChart"></canvas>
      </div>
    </div>
  </div><!--card end-->

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style-lib'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/chart.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-lib'); ?>
<script src="<?php echo e(asset('assets/admin/js/chart-all.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<script>
var ctx = document.getElementById('userBrowserChart').getContext('2d');
  ctx.canvas.height = 260;
  var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: <?php echo json_encode($chart['user_browser_counter']->keys(), 15, 512) ?>,
          datasets: [{
              data: <?php echo e($chart['user_browser_counter']->flatten()); ?>,
              backgroundColor: [
                '#e74c3c',
                '#9b59b6',
                '#34495e',
                '#e67e22',
                '#f1c40f',
                '#7f8c8d',
                '#3498db',
                '#1abc9c',
              ],
              borderColor: [
                  'rgba(231, 80, 90, 0.75)'
              ],
              borderWidth: 1,
              
          }]
      },
      options: {
          elements: {
              line: {
                  tension: 1 // disables bezier curves
              }
          },
          
      }
  });


var ctx = document.getElementById('userOsChart').getContext('2d');
ctx.canvas.height = 260;
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: <?php echo json_encode($chart['user_os_counter']->keys(), 15, 512) ?>,
        datasets: [{
            data: <?php echo e($chart['user_os_counter']->flatten()); ?>,
            backgroundColor: [
              '#e74c3c',
              '#9b59b6',
              '#34495e',
              '#e67e22',
              '#f1c40f',
              '#7f8c8d',
              '#3498db',
              '#1abc9c',
            ],
            borderColor: [
                'rgba(231, 80, 90, 0.75)'
            ],
            borderWidth: 1,
            
        }]
    },
    options: {
        elements: {
            line: {
                tension: 1 // disables bezier curves
            }
        },
        
    }
});
var ctx = document.getElementById('userCountryChart').getContext('2d');
ctx.canvas.height = 260;
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: <?php echo json_encode($chart['user_country_counter']->keys(), 15, 512) ?>,
        datasets: [{
            data: <?php echo e($chart['user_country_counter']->flatten()); ?>,
            backgroundColor: [
              '#e74c3c',
              '#9b59b6',
              '#34495e',
              '#e67e22',
              '#f1c40f',
              '#7f8c8d',
              '#3498db',
              '#1abc9c',
            ],
            borderColor: [
                'rgba(231, 80, 90, 0.75)'
            ],
            borderWidth: 1,
            
        }]
    },
    options: {
        elements: {
            line: {
                tension: 1 // disables bezier curves
            }
        },
        
    }
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maxitproject\core\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>