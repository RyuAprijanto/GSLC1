<?php $__env->startSection('Title', 'Main'); ?>

<?php $__env->startSection('calcu'); ?>
    <?php for($x = 0;  $x <= 100 ; $x+= 10): ?>
    The number is: <?php echo e($x); ?> <br>
    <?php if($x == 100): ?>
        <br>This is the final number <br>
        <?php break; ?>
    <?php endif; ?>
    <?php endfor; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC1\resources\views/calc.blade.php ENDPATH**/ ?>