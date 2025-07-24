
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form">
    <!--form checkbox item-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label"><?php echo e(cleanLang(__('lang.mark_estimates_as_billable_by_default'))); ?></label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_expenses_billable_by_default"
                name="settings_expenses_billable_by_default" class="filled-in chk-col-light-blue"
                <?php echo e(runtimePrechecked($settings['settings_expenses_billable_by_default'] ?? '')); ?>>
            <label for="settings_expenses_billable_by_default"></label>
        </div>
    </div>
    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton"
            class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request" data-url="/settings/expenses"
            data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable"><?php echo e(cleanLang(__('lang.save_changes'))); ?></button>
    </div>
</form>

<?php if(config('system.settings_type') == 'standalone'): ?>
<!--[standalone] - settings documentation help-->
<a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
        class="ti-info-alt"></i>
    <?php echo e(cleanLang(__('lang.help_documentation'))); ?>

</a>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/expenses/page.blade.php ENDPATH**/ ?>