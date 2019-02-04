  <?php $__env->startSection('header'); ?>
    <?php echo $__env->make('include.link', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="col-sm-6 mt-5">
        <h4 class="mt-2">Login</h4>
        <hr>
        <form class="p-0 mt-2 mb-5" method="post" action="<?php echo e(route('handleLogin')); ?>">
            <?php if(session('error')): ?>
                <div class="bg-dark h6  p-2 rounded text-light">
                    <span><?php echo e(session('error')); ?></span>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label>Enter Email</label>
                <input type="Email" name="email" class="form-control" required> 
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <input type="submit" name="" class="btn btn-dark">
            <?php echo e(csrf_field()); ?>   
        </form>
    </div>
    <p>If you not a member yet please register from <a href="<?php echo e(url('register')); ?>">Here</a></p>
  </div>
  <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>