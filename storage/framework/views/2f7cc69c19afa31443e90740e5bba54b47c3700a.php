<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="col-sm-6">
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
                <input type="Email" name="email" class="form-control" placeholder=""> 
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" placeholder="">
            </div>
            <input type="submit" name="" class="btn btn-dark">
            <?php echo e(csrf_field()); ?>   
        </form>
    </div>
</div>
