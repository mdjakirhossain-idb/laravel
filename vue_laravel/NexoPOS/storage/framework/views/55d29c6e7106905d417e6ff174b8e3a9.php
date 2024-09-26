

<?php $__env->startSection( 'layout.base.body' ); ?>
    <div id="page-container" class="h-full w-full flex">
        <div class="container flex-auto flex-col items-center justify-center flex m-4 sm:mx-auto">
            <div class="flex justify-center items-center py-6">
                <img class="w-32" src="<?php echo e(asset( 'svg/nexopos-variant-1.svg' )); ?>" alt="NexoPOS">
            </div>
            <div class="ns-box rounded shadow w-full md:w-1/2 lg:w-1/3 overflow-hidden">
                <div id="section-header" class="ns-box-header p-4">
                    <p class="text-center b-8 text-sm"><?php echo e(__( "If you see this page, this means NexoPOS is correctly installed on your system. As this page is meant to be the frontend, NexoPOS doesn't have a frontend for the meantime. This page shows useful links that will take you to the important resources." )); ?></p>
                </div>
                <div class="ns-box-footer flex shadow border-t">
                    <div class="flex w-1/3"><a class="link text-sm w-full py-2 text-center" href="<?php echo e(ns()->route( 'ns.dashboard.home' )); ?>"><?php echo e(__( 'Dashboard' )); ?></a></div>
                    <div class="flex w-1/3"><a class="link text-sm w-full py-2 text-center" href="<?php echo e(ns()->route( 'ns.login' )); ?>"><?php echo e(__( 'Sign In' )); ?></a></div>
                    <div class="flex w-1/3"><a class="link text-sm w-full py-2 text-center" href="<?php echo e(ns()->route( 'ns.register' )); ?>"><?php echo e(__( 'Sign Up' )); ?></a></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layout.base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/welcome.blade.php ENDPATH**/ ?>