<?php
use App\Classes\Hook;
use App\Classes\Output;
?>


<?php $__env->startSection( 'layout.dashboard.body' ); ?>
<div>
    <?php echo $__env->make( Hook::filter( 'ns-dashboard-header-file', '../common/dashboard-header' ) , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="dashboard-content" class="px-4">
        <?php echo $__env->make( 'common.dashboard.title' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <ns-crud 
            src="<?php echo e($src); ?>" 
            :query-params='<?php echo json_encode( $queryParams ?? [] , 15, 512) ?>'
            create-url="<?php echo e($createUrl ?? '#'); ?>">
            <template v-slot:bulk-label><?php echo e($bulkLabel ?? __( 'Bulk Actions' )); ?></template>
        </ns-crud>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'layout.dashboard.footer' ); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('layout.dashboard.footer'); ?>
<?php
$identifier    =   collect( explode( '/', $src ) )
    ->filter( fn( $segment ) => ! empty( $segment ) )
    ->last();

$output     =   new Output;
Hook::action( 'ns-crud-footer', $output, $identifier );
Hook::action( $instance::method( 'getTableFooter' ), $instance->getTableFooter( $output ), $instance );
?>
<?php echo ( string ) $output; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layout.dashboard' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/pages/dashboard/crud/table.blade.php ENDPATH**/ ?>