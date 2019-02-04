  <?php $__env->startSection('header'); ?>
    <?php echo $__env->make('include.link', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-sm-6 mt-5">
        <h4 class="mb-3">My personnal Information</h4>
        <hr>
            <?php if(session('success')): ?>
                <div class="bg-dark h6  p-2 rounded text-light">
                    <span><?php echo e(session('success')); ?></span>
                </div>
            <?php endif; ?>
        <p><strong>Full Name:</strong> <?php echo e($result->firstName.' '.$result->lastName); ?></p>
        <p><strong>Birdhdate:</strong> <?php echo e($result->birthdate); ?><p>
        <p><strong>Adresse:</strong> <?php echo e($result->address); ?></p>
        <a href="<?php echo e(route('showPersonnalInformationForm')); ?>" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Update</a>    
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>