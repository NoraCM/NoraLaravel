  <?php $__env->startSection('header'); ?>
    <?php echo $__env->make('include.link', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-8 mt-3 bg-light p-5 rounded mb-3">
        <h5 class="mb-3">New Message</h5>
        <form class="p-0 mt-2 mb-5" method="post" action="<?php echo e(route('sendMessage')); ?>">
        <div class="form-group">
            <label>Your Message</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <input type="hidden" name="recipient_id" value="<?php echo e($to); ?>">
        <input type="submit" name="" class="btn btn-dark">
        <?php echo e(csrf_field()); ?>   
    </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>