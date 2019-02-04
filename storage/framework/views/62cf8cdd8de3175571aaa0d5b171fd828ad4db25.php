  <?php $__env->startSection('header'); ?>
    <?php echo $__env->make('include.link', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-12 mt-3  p-5 rounded mb-3">
        <h5 class="mb-3">List Of Users</h5>
        <?php if(isset($users) && !$users->isEmpty()): ?>
            <ul class="m-0 p-0">     
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-unstyled p-0">
                    <p>
                        <?php echo e($value->firstName.' '.$value->lastName); ?>

                        <a title="Send message" class="text-dark ml-4" href="<?php echo e(route('messageForm',['id'=>$value->id])); ?>">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php else: ?>
            <p>There are 0 users</p>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>