  <?php $__env->startSection('header'); ?>
    <?php echo $__env->make('include.link', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-sm-6 mt-5">
        <h4 class="mb-3">My personnal Information</h4>
        <form class="p-0 mt-2 mb-5" method="post" action="<?php echo e(route('updatePersonnalInformation')); ?>">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo e($result->firstName); ?>">
        </div>
        <div class="form-group">
            <label>Last Name</label>    
            <input type="text" name="lastname" class="form-control" value="<?php echo e($result->lastName); ?>"> 
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" name="birthdate" class="form-control" value="<?php echo e($result->birthdate); ?>">
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="address"><?php echo e($result->address); ?></textarea>
        </div>
        <input type="submit" name="" value="Save" class="btn btn-dark">
        <?php echo e(csrf_field()); ?>   
        </form>   
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>