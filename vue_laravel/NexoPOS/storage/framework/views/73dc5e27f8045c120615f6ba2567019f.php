<?php $widgetService = app('App\Services\WidgetService'); ?>
<div id="dashboard-content" class="px-4">
    <ns-dashboard>
        <ns-dragzone 
            :raw-columns="<?php echo e($widgetService->getWidgetsArea( 'ns-dashboard-widgets' )->values()->toJson()); ?>" 
            :raw-widgets="<?php echo e($widgetService->getWidgets()->values()->toJson()); ?>">
        </ns-dragzone>
    </ns-dashboard>
</div><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/pages/dashboard/store-dashboard.blade.php ENDPATH**/ ?>