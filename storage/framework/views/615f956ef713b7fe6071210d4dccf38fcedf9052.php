  <?php $__env->startSection('header'); ?>
    <?php echo $__env->make('include.link', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-sm-6 mt-5">
        <h4 class="mt-2">Inscription</h4>
        <hr>
        <form class="p-0 mt-2 mb-5" method="post" action="<?php echo e(route('handleRegister')); ?>">
        <?php if(session('error')): ?>
            <div class="bg-dark h6  p-2 rounded text-light">
                <span><?php echo e(session('error')); ?></span>
            </div>
        <?php endif; ?>
        <div class="form-group">
            <label>Enter First Name</label>
            <input type="text" name="firstname" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Enter Last Name</label>    
            <input type="text" name="lastname" class="form-control" required> 
        </div>
        <div class="form-group">
            <label>Enter Birthday</label>
            <input type="date" name="birthdate" class="form-control" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="address" required>Your address</textarea>
        </div>
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
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>