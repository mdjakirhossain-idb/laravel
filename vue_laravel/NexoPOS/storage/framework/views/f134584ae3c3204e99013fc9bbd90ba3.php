

<?php $__env->startSection( 'layout.dashboard.body' ); ?>
<div class="flex-auto flex flex-col">
    <?php echo $__env->make( Hook::filter( 'ns-dashboard-header-file', '../common/dashboard-header' ) , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="px-4 flex flex-col flex-auto" id="dashboard-content">
        <?php echo $__env->make( 'common.dashboard.title' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="flex-auto flex h-full w-full">
            <ns-modules 
                upload="<?php echo e(url( 'dashboard/modules/upload' )); ?>"
                url="<?php echo e(url( 'api/modules' )); ?>"></ns-modules>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layout.dashboard' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/pages/dashboard/modules/list.blade.php ENDPATH**/ ?>