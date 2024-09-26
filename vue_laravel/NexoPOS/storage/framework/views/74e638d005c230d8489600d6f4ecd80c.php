<ns-login
        :show-recovery-link="<?php echo e(ns()->option->get( 'ns_recovery_enabled' ) === 'yes' ? 'true' : 'false'); ?>"
        :show-register-button="<?php echo e(ns()->option->get( 'ns_registration_enabled' ) === 'no' ? 'false' : 'true'); ?>"
>
    <div class="w-full flex items-center justify-center">
        <h3 class="font-hairline text-sm ns-normal-text"><?php echo e(__( 'Loading...' )); ?></h3>
    </div>
</ns-login>
<?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views//common/auth/sign-in-form.blade.php ENDPATH**/ ?>