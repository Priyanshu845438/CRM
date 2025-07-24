
<?php $__env->startSection('settings-page'); ?>

<!--tabs menu-->
<?php echo $__env->make('pages.settings.sections.formbuilder.misc.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="webform-builder-wraper" class="p-t-40">

    <!-- FORM BUILDER JAVASCRIPT-->
    <script src="public/vendor/js/formbuilder/form-builder.min.js?v=<?php echo e(config('system.versioning')); ?>"></script>
    <script src="public/js/webforms/webforms.js?v=<?php echo e(config('system.versioning')); ?>"></script>

    <div class="webform-builder-container" id="webform-builder-container">


    </div>

    <!--save button-->
    <div class="text-right hidden p-t-30" id="webform-builder-buttons-container">
        <input type="hidden" name="webform-builder-payload" id="webform-builder-payload">
        <button type="submit" id="webform-builder-save-button"
            class="btn btn-rounded-x btn-danger waves-effect text-left"
            data-url="<?php echo e(url('settings/formbuilder/'.$webform->webform_id.'/build')); ?>"
            data-loading-target="webform-builder-buttons-container" data-ajax-type="POST" data-type="form"
            data-form-id="webform-builder-buttons-container" data-button-loading-annimation="yes"
            data-button-disable-on-click="yes" data-on-start-submit-button="disable"><?php echo app('translator')->get('lang.save_form'); ?></button>
    </div>


    <!--DYNAMIC JAVASCRIPT-->
    <script>

        /*------------------------------------------------------------------------------------------------------------------------
         * [fix: oct 2023]
         * clean up the special character `&#39;` that we added in the backend (Formbuilder) with actual `'` single quote
         * ----------------------------------------------------------------------------------------------------------------------*/
        function nxRevertSpecialCharacter(key, value) {
            if (typeof value === 'string') {
                return value.replace(/\&#39;/g, "'");
            }
            return value;
        }

        //builder
        var NXBUILDER = (typeof NXBUILDER == 'undefined') ? {} : NXBUILDER;

        //all custom fields
        NXBUILDER.custom_field = JSON.parse('<?php echo json_encode($custom_fields); ?>', nxRevertSpecialCharacter);

        //existing form fields
        NXBUILDER.current_field = JSON.parse('<?php echo json_encode($current_fields); ?>', nxRevertSpecialCharacter);
    </script>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/formbuilder/build/page.blade.php ENDPATH**/ ?>