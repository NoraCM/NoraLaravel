  <?php $__env->startSection('header'); ?>
    <?php echo $__env->make('include.link', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-8 mt-3  p-5 rounded mb-3">
        <h5 class="mb-3">My Gallery</h5>
        <hr>
        <?php if( isset($result) && !$result->isEmpty()): ?>
            <ul class="row p-0 pt-2 pb-2">     
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="col-md-4 list-unstyled p-0">
                    <img src="./storage/<?php echo e($value->source); ?>" class="w-100">
                    <small><?php echo e($value->created_at); ?></small>
                    <a class="btn remove bg-dark text-light" href="<?php echo e(route('deletePicture',['id'=>$value->id])); ?>">
                        <i class="fas fa-times"></i>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php else: ?>
            <p>Your gallery is empty</p>
         <?php endif; ?>
        <form method="post" action="<?php echo e(route('handlePictures')); ?>" enctype="multipart/form-data">
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" required id="customFile" name="photo">
                <label class="custom-file-label" for="customFile" >Add a new picture</label>
            </div>
            <input class="btn btn-dark" type="submit" value="Add Picture" name="">
            <?php echo e(csrf_field()); ?>  
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>