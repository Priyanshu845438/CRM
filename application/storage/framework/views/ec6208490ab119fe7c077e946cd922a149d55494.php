
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form" id="settingsFormGeneral">

    <!--[reports] - truncate long title-->
    <div class="form-group form-group-checkbox row">
        <label class="col-10 col-form-label text-left"><?php echo app('translator')->get('lang.reports'); ?> - <?php echo app('translator')->get('lang.truncate_long_text'); ?></label>
        <div class="col-2 text-right p-t-5">
            <input type="checkbox" id="settings2_tweak_reports_truncate_long_text" name="settings2_tweak_reports_truncate_long_text" class="filled-in chk-col-light-blue" <?php echo e(runtimePrechecked($settings->settings2_tweak_reports_truncate_long_text ?? '')); ?>>
            <label class="p-l-30" for="settings2_tweak_reports_truncate_long_text"></label>
        </div>
    </div>
    

    
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton" class="btn btn-rounded-x btn-danger waves-effect text-left"
            data-url="/settings/tweak" data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable"><?php echo e(cleanLang(__('lang.save_changes'))); ?></button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/tweak/tweak.blade.php ENDPATH**/ ?>