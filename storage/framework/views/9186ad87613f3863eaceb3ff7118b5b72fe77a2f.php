<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('Title'); ?></title>
</head>
<body>
    <div>
       <center>
            <?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       </center>
    </div>
    <div>
        <center>
        <?php echo $__env->yieldContent('calcu'); ?>
        </center>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\GSLC1\resources\views/main.blade.php ENDPATH**/ ?>