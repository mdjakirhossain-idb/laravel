<?php
use App\Classes\Hook;
use App\Classes\Output;
?>


<?php $__env->startSection( 'layout.dashboard.body' ); ?>
<div class="flex-auto flex flex-col">
    <?php echo $__env->make( Hook::filter( 'ns-dashboard-header-file', '../common/dashboard-header' ) , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="px-4 flex flex-col" id="dashboard-content">
        <?php echo $__env->make( 'common.dashboard.title' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div>
            <ns-settings
                url="<?php echo e($src ?? '#'); ?>"
                submit-url="<?php echo e($submitUrl); ?>">
            </ns-settings>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'layout.dashboard.footer' ); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('layout.dashboard.footer'); ?>
    <?php echo ( string ) Hook::filter( 'ns-profile-footer', new Output ); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layout.dashboard' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/pages/dashboard/users/profile.blade.php ENDPATH**/ ?>