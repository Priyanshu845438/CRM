
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form">
    <!--allow registration-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label"><?php echo e(cleanLang(__('lang.allow_customers_to_signup'))); ?></label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_clients_registration" name="settings_clients_registration"
                class="filled-in chk-col-light-blue"
                <?php echo e(runtimePrechecked($settings['settings_clients_registration'] ?? '')); ?>>
            <label for="settings_clients_registration"></label>
        </div>
    </div>

    <!--allow clients to login-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label"><?php echo e(cleanLang(__('lang.allow_clients_to_login'))); ?></label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_clients_app_login" name="settings_clients_app_login"
                class="filled-in chk-col-light-blue"
                <?php echo e(runtimePrechecked($settings['settings_clients_app_login'] ?? '')); ?>>
            <label for="settings_clients_app_login"></label>
        </div>
    </div>


    <!--enable shipping address-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label"><?php echo e(cleanLang(__('lang.enable_shipping_address'))); ?></label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_clients_shipping_address" name="settings_clients_shipping_address"
                class="filled-in chk-col-light-blue"
                <?php echo e(runtimePrechecked($settings['settings_clients_shipping_address'] ?? '')); ?>>
            <label for="settings_clients_shipping_address"></label>
        </div>
    </div>

    <!--disable emails-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label"><?php echo e(cleanLang(__('lang.disable_all_client_emails'))); ?></label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_clients_disable_email_delivery"
                name="settings_clients_disable_email_delivery" class="filled-in chk-col-light-blue"
                <?php echo e(runtimePrechecked($settings['settings_clients_disable_email_delivery'] ?? '')); ?>>
            <label for="settings_clients_disable_email_delivery"></label>
        </div>
    </div>

    <?php if(config('system.settings_type') == 'standalone'): ?>
    <!--[standalone] - settings documentation help-->
    <div>
        <a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
                class="ti-info-alt"></i>
            <?php echo e(cleanLang(__('lang.help_documentation'))); ?></a>
    </div>
    <?php endif; ?>
    
    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton"
            class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request" data-url="/settings/clients"
            data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable"><?php echo e(cleanLang(__('lang.save_changes'))); ?></button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/clients/page.blade.php ENDPATH**/ ?>