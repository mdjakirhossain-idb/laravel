

<?php $__env->startSection( 'layout.base.body' ); ?>
<div id="nexopos-setup" class="justify-center h-full w-full items-center overflow-y-auto py-10 bg-gray-300">
    <div class="container mx-auto p-4 md:p-0 flex-auto items-center justify-center flex">
        <div id="setup" class="w-full md:w-4/5 lg:w-3/5 flex flex-col">
            <div class="flex flex-shrink-0 justify-center items-center py-6">
                <img class="w-32" src="<?php echo e(asset( 'svg/nexopos-variant-1.svg' )); ?>" alt="NexoPOS">
            </div>
            <router-view>
                
            </router-view>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'layout.base.footer' ); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('layout.base.footer'); ?>
    <script>
        const nsLanguages   =   <?php echo json_encode( $languages , 15, 512) ?>;
        const nsLang = '<?php echo e($lang); ?>';
    </script>
    <?php echo app('Illuminate\Foundation\Vite')([ 'resources/ts/setup.ts' ]); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layout.base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/pages/setup/welcome.blade.php ENDPATH**/ ?>