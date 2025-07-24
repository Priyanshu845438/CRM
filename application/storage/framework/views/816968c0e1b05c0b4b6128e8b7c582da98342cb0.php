
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form" id="settingsFormStripe">


    <!--settings2_paystack_secret_key-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.secret_key'))); ?>* <span
                class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.paystack_general_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span></label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings2_paystack_secret_key"
                name="settings2_paystack_secret_key" value="<?php echo e($settings->settings2_paystack_secret_key ?? ''); ?>">
        </div>
    </div>


    <!--settings2_paystack_public_key-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.public_key'))); ?>* <span
                class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.paystack_general_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span></label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings2_paystack_public_key"
                name="settings2_paystack_public_key" value="<?php echo e($settings->settings2_paystack_public_key ?? ''); ?>">
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
                name="settings2_paystack_currency_code" value="<?php echo e($settings->settings2_paystack_currency_code ?? ''); ?>">
        </div>
    </div>


    <!--settings2_paystack_display_name-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.display_name'))); ?>* <span
                class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.display_name_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span></label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings2_paystack_display_name"
                name="settings2_paystack_display_name" value="<?php echo e($settings->settings2_paystack_display_name ?? ''); ?>">
        </div>
    </div>


    <!--webhooks url-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.webhooks_url'))); ?>*
            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.add_this_inside_your_dashboard'))); ?> (Paystack)" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_stripe_ipn_url"
                name="settings2_paystack_ipn_url" value="<?php echo e(url('/api/paystack/webhooks')); ?>" disabled>
        </div>
    </div>

    <div class="line"></div>

    <!--settings2_paystack_status-->
    <div class="form-group form-group-checkbox row">
        <label class="col-3 col-form-label" title="Foo"><?php echo e(cleanLang(__('lang.enable_payment_method'))); ?></label>
        <div class="col-9 p-t-5">
            <input type="checkbox" id="settings2_paystack_status" name="settings2_paystack_status"
                class="filled-in chk-col-light-blue" <?php echo e(runtimePrechecked($settings->settings2_paystack_status)); ?>>
            <label for="settings2_paystack_status"></label>
        </div>
    </div>

    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton"
            class="btn btn-rounded-x btn-danger waves-effect text-left ajax-request" data-url="/settings/paystack"
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
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/paystack/page.blade.php ENDPATH**/ ?>