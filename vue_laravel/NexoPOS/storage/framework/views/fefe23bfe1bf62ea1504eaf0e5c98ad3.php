<?php

use App\Classes\Hook;
use App\Classes\Output;
use App\Services\DateService;
use App\Services\Helper;
use App\Services\MenuService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

/**
 * @var MenuService $menus
 */
$menus  =   app()->make( MenuService::class );

/**
 * @var MenuService $menus
 */
$dateService  =   app()->make( DateService::class );

if ( Auth::check() ) {
    $theme  =   Auth::user()->attribute->theme ?: ns()->option->get( 'ns_default_theme', 'light' );
} else {
    $theme  =   ns()->option->get( 'ns_default_theme', 'light' );
}
?>
<!DOCTYPE html>
<html lang="en" class="<?php echo e($theme); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo Helper::pageTitle( $title ?? __( 'Unamed Page' ) ); ?></title>
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
    <?php echo $__env->yieldContent( 'layout.dashboard.header' ); ?>
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
        window.ns   =   { nsExtraComponents };

        /**
         * store the server date
         * @param {string}
         */
        window.ns.date  =   {
            current : '<?php echo e(app()->make( DateService::class )->toDateTimeString()); ?>',
            serverDate : '<?php echo e(app()->make( DateService::class )->toDateTimeString()); ?>',
            timeZone: '<?php echo e(ns()->option->get( "ns_datetime_timezone", "Europe/London" )); ?>',
            format: `<?php echo e($dateService->convertFormatToMomment( ns()->option->get( 'ns_datetime_format', 'Y-m-d H:i:s' ) )); ?>`
        }

        /**
         * Let's define the actul theme used
         */
        window.ns.theme     =   `<?php echo e($theme); ?>`;

        /**
         * define the current language selected by the user or
         * the language that applies to the system by default.
         */
        window.ns.language      =   '<?php echo e(app()->getLocale()); ?>';
        window.ns.langFiles     =   <?php echo json_encode( Hook::filter( 'ns.langFiles', [
            'NexoPOS'   =>  asset( "/lang/" . app()->getLocale() . ".json" ),
        ]));?>

        /**
         * We display only fillable values for the
         * logged user. The password might be displayed on an encrypted form.
         */
        window.ns.user              =   <?php echo json_encode( ns()->getUserDetails() );?>;
        window.ns.user.attributes   =   <?php echo json_encode( Auth::user()->attribute->first() );?>;
        window.ns.cssFiles          =   <?php echo json_encode( ns()->simplifyManifest() );?>;

        /**
         * We'll store here the file mime types
         * that are supported by the media manager.
         */
        window.ns.medias            =   {
            mimes:  <?php echo json_encode( ns()->mediaService->getMimes() )?>,
            imageMimes: <?php echo json_encode( ns()->mediaService->getImageMimes() );?>
        }
    </script>
    <?php echo app('Illuminate\Foundation\Vite')([ 'resources/ts/lang-loader.ts' ]); ?>
</head>
<body <?php echo in_array( app()->getLocale(), config( 'nexopos.rtl-languages' ) ) ? 'dir="rtl"' : "";?>>
    <div class="h-full w-full flex flex-col">
        <div class="overflow-hidden flex flex-auto">
            <div id="dashboard-aside">
                <div v-if="sidebar === 'visible'" v-cloak  class="w-64 z-50 absolute md:static flex-shrink-0 h-full flex-col overflow-hidden">
                    <div class="ns-scrollbar overflow-y-auto h-full text-sm">
                        <div class="logo py-4 flex justify-center items-center">
                            <?php if( ns()->option->get( 'ns_store_rectangle_logo' ) ): ?>
                            <img src="<?php echo e(ns()->option->get( 'ns_store_rectangle_logo' )); ?>" class="w-11/12" alt="logo"/>
                            <?php else: ?>
                            <h1 class="font-black text-transparent bg-clip-text bg-gradient-to-b from-blue-200 to-indigo-400 text-3xl">NexoPOS</h1>
                            <?php endif; ?>
                        </div>
                        <ul>
                            <?php $__currentLoopData = $menus->getMenus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $identifier => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( isset( $menu[ 'permissions' ] ) && Gate::allows( $menu[ 'permissions' ], 'some' ) || ! isset( $menu[ 'permissions' ] ) ): ?>
                                <ns-menu identifier="<?php echo e($identifier); ?>" toggled="<?php echo e($menu[ 'toggled' ] ?? ''); ?>" label="<?php echo e(@$menu[ 'label' ]); ?>" icon="<?php echo e(@$menu[ 'icon' ]); ?>" href="<?php echo e(@$menu[ 'href' ]); ?>" notification="<?php echo e(isset( $menu[ 'notification' ] ) ? $menu[ 'notification' ] : 0); ?>" id="menu-<?php echo e($identifier); ?>">
                                    <?php if( isset( $menu[ 'childrens' ] ) ): ?>
                                        <?php $__currentLoopData = $menu[ 'childrens' ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $identifier => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if( isset( $menu[ 'permissions' ] ) && Gate::allows( $menu[ 'permissions' ], 'some' ) || ! isset( $menu[ 'permissions' ] ) ): ?>
                                        <ns-submenu :active="<?php echo e(( isset( $menu[ 'active' ] ) ? ( $menu[ 'active' ] ? 'true' : 'false' ) : 'false' )); ?>" href="<?php echo e($menu[ 'href' ]); ?>" id="submenu-<?php echo e($identifier); ?>"><?php echo e($menu[ 'label' ]); ?></ns-submenu>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
                                    <?php endif; ?>
                                </ns-menu>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="dashboard-overlay">
                <div v-if="sidebar === 'visible'" @click="closeMenu()" class="z-40 w-full h-full md:hidden absolute" style="background: rgb(51 51 51 / 25%)"></div>
            </div>
            <div id="dashboard-body" class="flex flex-auto flex-col overflow-hidden">
                <div class="overflow-y-auto flex-auto">
                    <?php if (! empty(trim($__env->yieldContent( 'layout.dashboard.body' )))): ?>
                        <?php echo $__env->yieldContent( 'layout.dashboard.body' ); ?>
                    <?php endif; ?>

                    <?php if (! empty(trim($__env->yieldContent( 'layout.dashboard.body.with-header' )))): ?>
                        <?php echo $__env->make( 'common.dashboard.with-header' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>

                    <?php if (! empty(trim($__env->yieldContent( 'layout.dashboard.with-header' )))): ?>
                        <?php echo $__env->make( 'common.dashboard.with-header' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>

                    <?php if (! empty(trim($__env->yieldContent( 'layout.dashboard.body.with-title' )))): ?>
                        <?php echo $__env->make( 'common.dashboard.with-title' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>

                    <?php if (! empty(trim($__env->yieldContent( 'layout.dashboard.with-title' )))): ?>
                        <?php echo $__env->make( 'common.dashboard.with-title' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                </div>
                <div class="p-2 text-xs flex justify-end text-gray-500">
                    <?php echo Hook::filter( 'ns-footer-signature', sprintf( __( 'You\'re using <a tager="_blank" href="%s" class="hover:text-blue-400 mx-1 inline-block">NexoPOS %s</a>' ), 'https://my.nexopos.com/en', config( 'nexopos.version' ) ) ); ?>

                </div>
            </div>
        </div>
    </div>
    <?php $__env->startSection( 'layout.dashboard.footer' ); ?>
        <?php echo $__env->make( 'common.popups' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make( 'common.dashboard-footer' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo app('Illuminate\Foundation\Vite')([ 'resources/ts/app.ts' ]); ?>
    <?php echo $__env->yieldSection(); ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/layout/dashboard.blade.php ENDPATH**/ ?>