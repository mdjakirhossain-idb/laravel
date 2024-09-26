<?php

use App\Classes\Hook;
use App\Classes\Output;

$beforeForm     =   new Output;
$afterForm      =   new Output;

Hook::action( 'ns.before-login-fields', $beforeForm );
Hook::action( 'ns.after-login-fields', $afterForm );
?>


<?php $__env->startSection( 'layout.base.body' ); ?>
    <div id="page-container" class="h-full w-full flex items-center overflow-y-auto pb-10">
        <div class="container mx-auto p-4 md:p-0 flex-auto items-center justify-center flex">
            <div id="sign-in-box" class="w-full md:w-3/5 lg:w-2/5 xl:w-84">
                <div class="flex justify-center items-center py-6">
                    <?php if( ! ns()->option->get( 'ns_store_square_logo', false ) ): ?>
                    <img class="w-32" src="<?php echo e(asset( 'svg/nexopos-variant-1.svg' )); ?>" alt="NexoPOS">
                    <?php else: ?>
                    <img src="<?php echo e(ns()->option->get( 'ns_store_square_logo' )); ?>" alt="NexoPOS">
                    <?php endif; ?>
                </div>
                <?php if (isset($component)) { $__componentOriginala0e57685145cd3f8dede0ca77793a25b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0e57685145cd3f8dede0ca77793a25b = $attributes; } ?>
<?php $component = App\View\Components\SessionMessage::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('session-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SessionMessage::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0e57685145cd3f8dede0ca77793a25b)): ?>
<?php $attributes = $__attributesOriginala0e57685145cd3f8dede0ca77793a25b; ?>
<?php unset($__attributesOriginala0e57685145cd3f8dede0ca77793a25b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0e57685145cd3f8dede0ca77793a25b)): ?>
<?php $component = $__componentOriginala0e57685145cd3f8dede0ca77793a25b; ?>
<?php unset($__componentOriginala0e57685145cd3f8dede0ca77793a25b); ?>
<?php endif; ?>
                <?php echo $beforeForm; ?>

                <?php echo $__env->make( '/common/auth/sign-in-form' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $afterForm; ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'layout.base.footer' ); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('layout.base.footer'); ?>
    <?php echo Hook::filter( 'ns-login-footer', new Output ); ?>

    <?php echo app('Illuminate\Foundation\Vite')([ 'resources/ts/auth.ts' ]); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layout.base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/pages/auth/sign-in.blade.php ENDPATH**/ ?>