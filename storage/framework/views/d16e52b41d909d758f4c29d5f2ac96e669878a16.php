  <?php $__env->startSection('header'); ?>
    <?php echo $__env->make('include.link', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-8 mt-3  p-5 rounded mb-3">
        <a href="<?php echo e(url('/users')); ?>" class="float-right">List of users</a>
        <h5 class="mb-3">My Personnal Messages</h5>
        <hr>
        <?php if(isset($result) && !$result->isEmpty()): ?>
            <ul class="row p-0 pt-2 pb-2 m-0">     
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-unstyled p-0 col-md-12">
                    <h6><?php echo e($value->firstName.' '.$value->lastName); ?></h6>
                    <p><?php echo e($value->content); ?><small class="float-right"><?php echo e($value->created_at); ?></small></p>
                    <p>
                        <a class="btn bg-dark text-light float-right" href="<?php echo e(route('messageForm',['id'=>$value->sender_id])); ?>">
                        Reply
                        </a>
                    </p>
                    <br>
                    <hr class="d-block mt-4">
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php else: ?>
            <p>You have 0 new messages</p>
            <a href="">Show Old messages</a>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>