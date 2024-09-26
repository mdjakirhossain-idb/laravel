<?php
use App\Classes\Hook;
use App\Classes\Output;
?>


<?php $__env->startSection( 'layout.dashboard.body' ); ?>
    <div>
        <?php echo $__env->make( Hook::filter( 'ns-dashboard-header-file', '../common/dashboard-header' ) , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make( 'pages.dashboard.store-dashboard' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'layout.dashboard.footer.inject' ); ?>
    <?php 
        $output     =   new Output;
        Hook::action( 'ns-dashboard-home-footer', $output );
        echo ( string ) $output;
    ?>
    <?php echo app('Illuminate\Foundation\Vite')([ 'resources/ts/widgets.ts' ]); ?>
    <?php echo app('Illuminate\Foundation\Vite')([ 'resources/ts/dashboard.ts' ]); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layout.dashboard' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/pages/dashboard/home.blade.php ENDPATH**/ ?>