<html>
    <head></head>
    <body>
        <div>
        <a href="/">Home</a>
        <a href="/welcome">Welcome</a>
        <a href="<?php echo e(route('student.list')); ?>">List</a>

        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\AWT\Lab_Manual_01\resources\views/homePage.blade.php ENDPATH**/ ?>