<?php
use App\Classes\Hook;
?>
<div>
    <?php echo $__env->make( Hook::filter( 'ns-dashboard-header-file', '../common/dashboard-header' ) , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="dashboard-content" class="px-4">
        <?php echo $__env->make( 'common.dashboard.title' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent( 'layout.dashboard.body.with-title' ); ?>
        <?php echo $__env->yieldContent( 'layout.dashboard.with-title' ); ?>
    </div>
</div><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/common/dashboard/with-title.blade.php ENDPATH**/ ?>