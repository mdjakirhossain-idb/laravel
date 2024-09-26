<?php if( session()->has( 'message' ) ): ?>
    <?php if( is_array( session()->get( 'message' ) ) ): ?>
    <div class="flex border flex-col md:flex-row border-success-secondary bg-success-primary rounded-lg mb-3">
        <div class="flex flex-row flex-auto">
            <div class="p-3 flex items-center justify-center">
                <i class="lar la-check-circle text-2xl text-success-tertiary"></i>
            </div>
            <div class="flex-auto items-center flex p-3 pl-0">
                <p class="text-success-tertiary py-1"><?php echo session()->get( 'message' )[ 'message' ] ?? __( 'Invalid Error Message' ); ?></p>
            </div>
        </div>
        <div class="flex w-full md:w-28 justify-end md:justify-center md:items-center">
            <a class="p-3 text-info-tertiary hover:underline" href="<?php echo e(session()->get( 'message' )[ 'link' ]); ?>"><?php echo e(__( 'Learn More' )); ?></a>
        </div>
    </div>
    <?php else: ?>
    <div class="flex border border-success-secondary bg-success-primary rounded-lg mb-3">
        <div class="p-3">
            <i class="lar la-check-circle text-2xl text-success-tertiary"></i>
        </div>
        <div class="flex-auto items-center flex">
            <p class="text-success-tertiary py-1"><?php echo session()->get( 'message' ); ?></p>
        </div>
    </div>
    <?php endif; ?>
<?php endif; ?>
<?php if( session()->has( 'errorMessage' ) ): ?>
    <?php if( is_array( session()->get( 'errorMessage' ) ) ): ?>
    <div class="flex border flex-col md:flex-row border-error-secondary bg-error-primary rounded-lg mb-3">
        <div class="flex flex-row flex-auto">
            <div class="p-3 flex items-center justify-center">
                <i class="las la-exclamation-circle text-2xl text-error-tertiary"></i>
            </div>
            <div class="flex-auto items-center flex p-3 pl-0">
                <p class="text-error-tertiary py-1"><?php echo session()->get( 'errorMessage' )[ 'message' ] ?? __( 'Invalid Error Message' ); ?></p>
            </div>
        </div>
        <div class="flex w-full md:w-28 justify-end md:justify-center md:items-center">
            <a class="p-3 text-info-tertiary hover:underline" href="<?php echo e(session()->get( 'errorMessage' )[ 'link' ]); ?>"><?php echo e(__( 'Learn More' )); ?></a>
        </div>
    </div>
    <?php else: ?>
    <div class="flex border border-error-secondary bg-error-primary rounded-lg mb-3">
        <div class="p-3">
            <i class="las la-exclamation-circle text-2xl text-error-tertiary"></i>
        </div>
        <div class="flex-auto items-center flex">
            <p class="text-error-tertiary py-1"><?php echo session()->get( 'errorMessage' ); ?></p>
        </div>
    </div>
    <?php endif; ?>
<?php endif; ?>
<?php if( session()->has( 'infoMessage' ) ): ?>
    <?php if( is_array( session()->get( 'infoMessage' ) ) ): ?>
    <div class="flex border flex-col md:flex-row border-info-secondary bg-blue-100 rounded-lg mb-3">
        <div class="flex flex-row flex-auto">
            <div class="p-3 flex items-center justify-center">
                <i class="las la-exclamation-circle text-2xl text-info-tertiary"></i>
            </div>
            <div class="flex-auto items-center flex p-3 pl-0">
                <p class="text-info-tertiary py-1"><?php echo session()->get( 'infoMessage' )[ 'message' ] ?? __( 'Invalid Error Message' ); ?></p>
            </div>
        </div>
        <div class="flex w-full md:w-28 justify-end md:justify-center md:items-center">
            <a class="p-3 text-info-secondary hover:underline" href="<?php echo e(session()->get( 'infoMessage' )[ 'link' ]); ?>"><?php echo e(__( 'Learn More' )); ?></a>
        </div>
    </div>
    <?php else: ?>
    <div class="flex border border-info-secondary bg-blue-100 rounded-lg mb-3">
        <div class="p-3">
            <i class="las la-exclamation-circle text-2xl text-info-tertiary"></i>
        </div>
        <div class="flex-auto items-center flex">
            <p class="text-info-tertiary py-1"><?php echo session()->get( 'infoMessage' ); ?></p>
        </div>
    </div>
    <?php endif; ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/components/session-message.blade.php ENDPATH**/ ?>