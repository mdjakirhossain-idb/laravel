<div id="dashboard-popups">
    <div 
        :key="popup.hash" 
        v-for="(popup,key) of popups" 
        @click="closePopup( popup, $event )" 
        :id="popup.hash"
        :focused="key === popups.length - 1"
        :class="defaultClass">
        <div class="zoom-out-entrance popup-body" @click="preventPropagation( $event )">
        <!-- @refresh="handleClose( popup, $event)"  -->
            <component @saved="handleSavedEvent( popup, $event )" :popup="popup" v-bind="popup.props || {}" :is="popup.component.value"></component>
        </div>    
    </div>
</div>
<!-- :data-index="key" -->
<?php echo app('Illuminate\Foundation\Vite')([ 'resources/ts/popups.ts' ]); ?><?php /**PATH D:\xampp\htdocs\vue\NexoPOS\resources\views/common/popups.blade.php ENDPATH**/ ?>