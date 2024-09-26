

<?php $__env->startSection( 'layout.dashboard.body' ); ?>
<div class="h-full flex flex-col flex-auto">
    <?php echo $__env->make( Hook::filter( 'ns-dashboard-header-file', '../common/dashboard-header' ) , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex-auto flex flex-col overflow-hidden" id="dashboard-content">
        <ns-media></ns-media>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layout.dashboard' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/pages/dashboard/medias/list.blade.php ENDPATH**/ ?>