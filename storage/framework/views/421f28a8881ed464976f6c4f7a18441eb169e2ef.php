<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
    <?php echo $__env->yieldContent('header'); ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">
                <?php if(Auth::user()): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(url('/myspace')); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/logout')); ?>">Logout</a>
                </li>
                <?php else: ?>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/home')); ?>">Login</a>
                    <a class="nav-link disabled" href="#"></a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/register')); ?>">Register</a>
                </li>
            </ul>
            </div>
        </nav>  
    <?php echo $__env->yieldContent('content'); ?>
   </body>
</html>
