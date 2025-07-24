
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form">

    <!--keyid-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.live_api_key'))); ?>*
            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.mollie_general_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_mollie_live_api_key"
                name="settings_mollie_live_api_key" value="<?php echo e($settings->settings_mollie_live_api_key ?? ''); ?>">
        </div>
    </div>

    <!--keyid-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.test_api_key'))); ?>*
            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.mollie_general_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_mollie_test_api_key"
                name="settings_mollie_test_api_key" value="<?php echo e($settings->settings_mollie_test_api_key ?? ''); ?>">
        </div>
    </div>

    <!--currency-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.currency'))); ?>*
            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.payment_gateway_currency_code_example'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_mollie_currency"
                name="settings_mollie_currency" value="<?php echo e($settings->settings_mollie_currency ?? ''); ?>">
        </div>
    </div>

    <!--display name-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.display_name'))); ?>*
            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.display_name_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_mollie_display_name"
                name="settings_mollie_display_name" value="<?php echo e($settings->settings_mollie_display_name ?? ''); ?>">
        </div>
    </div>


    <!--sandbox mode-->
    <div class="form-group form-group-checkbox row">
        <label class="col-3 col-form-label" title="Foo"><?php echo e(cleanLang(__('lang.sandbox_mode'))); ?>

            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.sandbox_mode_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-9 p-t-5">
            <input type="checkbox" id="settings_mollie_mode" name="settings_mollie_mode"
                class="filled-in chk-col-light-blue" <?php echo e(runtimePrechecked($settings->settings_mollie_mode)); ?>>
            <label for="settings_mollie_mode"></label>
        </div>
    </div>


    <!--Enabled-->
    <div class="form-group form-group-checkbox row">
        <label class="col-3 col-form-label" title="Foo"><?php echo e(cleanLang(__('lang.enable_payment_method'))); ?></label>
        <div class="col-9 p-t-5">
            <input type="checkbox" id="settings_mollie_status" name="settings_mollie_status"
                class="filled-in chk-col-light-blue" <?php echo e(runtimePrechecked($settings->settings_mollie_status)); ?>>
            <label for="settings_mollie_status"></label>
        </div>
    </div>


    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton"
            class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request" data-url="/settings/mollie"
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
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/mollie/page.blade.php ENDPATH**/ ?>