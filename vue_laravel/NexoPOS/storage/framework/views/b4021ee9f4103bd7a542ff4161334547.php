<?php

use App\Classes\Hook;
use App\Classes\Output;
use App\Models\UserAttribute;
use App\Services\DateService;
use App\Services\Helper;
use Illuminate\Support\Facades\Auth;

if ( Auth::check() && Auth::user()->attribute instanceof UserAttribute ) {
    $theme  =   Auth::user()->attribute->theme ?: ns()->option->get( 'ns_default_theme', 'light' );
} else {
    $theme  =   ns()->option->get( 'ns_default_theme', 'light' );
}
?>

<?php $dateService = app('App\Services\DateService'); ?>
<!DOCTYPE html>
<html lang="en" class="<?php echo e($theme); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? __( 'Unamed Page' ); ?></title>
    <?php 
        $output     =   new Output;
        Hook::action( "ns-dashboard-header", $output );
        echo ( string ) $output;
    ?>
    <?php echo app('Illuminate\Foundation\Vite')([
        'resources/scss/line-awesome/1.3.0/scss/line-awesome.scss',
        'resources/scss/grid.scss',
        'resources/scss/fonts.scss',
        'resources/scss/animations.scss',
        'resources/scss/typography.scss',
        'resources/scss/app.scss',
        'resources/scss/' . $theme . '.scss'
    ]); ?>
    <?php echo $__env->yieldContent( 'layout.base.header' ); ?>
    <script>
        /**
         * constant where is registered
         * global custom components
         * @param {Object}
         */
        window.nsExtraComponents     =   new Object;

        /**
         * describe a global NexoPOS object
         * @param {object} ns
         */
        window.ns =   { nsExtraComponents };

        /**
         * store the server date
         * @param {string}
         */
        window.ns.date                     =   {
            current : '<?php echo e(app()->make( DateService::class )->toDateTimeString()); ?>',
            serverDate : '<?php echo e(app()->make( DateService::class )->toDateTimeString()); ?>',
            timeZone: '<?php echo e(ns()->option->get( "ns_datetime_timezone", "Europe/London" )); ?>',
            format: `<?php echo e($dateService->convertFormatToMomment( ns()->option->get( 'ns_datetime_format', 'Y-m-d H:i:s' ) )); ?>`
        }

        /**
         * define the current language selected by the user or
         * the language that applies to the system by default.
         */
        window.ns.language      =   '<?php echo e(app()->getLocale()); ?>';
        window.ns.langFiles     =   <?php echo json_encode( Hook::filter( 'ns.langFiles', [
            'NexoPOS'   =>  asset( "/lang/" . app()->getLocale() . ".json" ),
        ]));?>
    </script>
    <?php echo app('Illuminate\Foundation\Vite')([ 'resources/ts/lang-loader.ts' ]); ?>
</head>
<body>
    <?php echo $__env->yieldContent( 'layout.base.body' ); ?>
    <?php $__env->startSection( 'layout.base.footer' ); ?>
        <?php echo $__env->make( 'common.footer' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/layout/base.blade.php ENDPATH**/ ?>