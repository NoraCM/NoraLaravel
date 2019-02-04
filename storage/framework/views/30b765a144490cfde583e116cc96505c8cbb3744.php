  <?php $__env->startSection('header'); ?>
    <?php echo $__env->make('include.link', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="col-sm-4 mt-5">
        <div class="mt-5 mb-4">
            <a class="btn btn-dark w-100 text-left" href="<?php echo e(url('/personnal-information')); ?>"><i class="fas fa-user"></i> Manage Personnal Informations</a>
        </div>
        <div class="mb-4">
            <a class="btn btn-dark w-100 text-left" href="<?php echo e(url('/pictures')); ?>"><i class="fas fa-image"></i> Manage My Pictures</a>
        </div>
        <div>
            <a class="btn btn-dark w-100 text-left" href="<?php echo e(url('/personnal-messages')); ?>"><i class="fas fa-envelope-open"></i> Manage Personnal Messages</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>