
<?php for($x = 0;  $x <= 100 ; $x+= 2): ?>
  The number is: <?php echo e($x); ?> <br>
<?php if($x == 100): ?>
    This is the final number <br>
    <?php break; ?>
<?php endif; ?>
<?php endfor; ?>
<?php /**PATH C:\xampp\htdocs\GSLC1\resources\views/button.blade.php ENDPATH**/ ?>