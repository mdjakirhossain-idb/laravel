<?php

use App\Classes\Hook;
use App\Classes\Output;
?>
<?php
    $output     =   new Output;
    Hook::action( 'ns-dashboard-before-title', $output, $identifier ?? null );
    echo ( string ) $output;
?>

<div class="page-inner-header mb-4">
    <h3 class="text-3xl text-primary font-bold"><?php echo $title ?? __( 'Unnamed Page' ); ?></h3>
    <p class="text-secondary"><?php echo e($description ?? __( 'No description' )); ?></p>
</div>
<?php echo $__env->make( 'components.session-message' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php
    $output     =   new Output;
    Hook::action( 'ns-dashboard-after-title', $output, $identifier ?? null );
    echo ( string ) $output;
?>
<?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/common/dashboard/title.blade.php ENDPATH**/ ?>