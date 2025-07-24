
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form" id="settingsFormStripe">


    <!--live - publid key-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.publishable_key'))); ?>*
            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.stripe_general_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_stripe_public_key"
                name="settings_stripe_public_key" value="<?php echo e($settings->settings_stripe_public_key ?? ''); ?>">
        </div>
    </div>

    <!--live - secret key-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.secret_key'))); ?>*
            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.stripe_general_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_stripe_secret_key"
                name="settings_stripe_secret_key" value="<?php echo e($settings->settings_stripe_secret_key ?? ''); ?>">
        </div>
    </div>

    <!--webhooks secret key-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.webhooks_signing_key'))); ?>*
            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.stripe_general_info'))); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_stripe_webhooks_key"
                name="settings_stripe_webhooks_key" value="<?php echo e($settings->settings_stripe_webhooks_key ?? ''); ?>">
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
            <input type="text" class="form-control form-control-sm" id="settings_stripe_currency"
                name="settings_stripe_currency" value="<?php echo e($settings->settings_stripe_currency ?? ''); ?>">
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
            <input type="text" class="form-control form-control-sm" id="settings_stripe_display_name"
                name="settings_stripe_display_name" value="<?php echo e($settings->settings_stripe_display_name ?? ''); ?>">
        </div>
    </div>


    <!--webhooks url-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.webhooks_url'))); ?>*
            <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.add_this_inside_your_dashboard'))); ?> (Stripe)" data-placement="top"><i
                    class="ti-info-alt"></i></span>
        </label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_stripe_ipn_url"
                name="settings_stripe_ipn_url" value="<?php echo e(url('/api/stripe/webhooks')); ?>" disabled>
        </div>
    </div>

    <div class="line"></div>

    <!--Enabled-->
    <div class="form-group form-group-checkbox row">
        <label class="col-3 col-form-label" title="Foo"><?php echo e(cleanLang(__('lang.enable_payment_method'))); ?></label>
        <div class="col-9 p-t-5">
            <input type="checkbox" id="settings_stripe_status" name="settings_stripe_status"
                class="filled-in chk-col-light-blue" <?php echo e(runtimePrechecked($settings->settings_stripe_status)); ?>>
            <label for="settings_stripe_status"></label>
        </div>
    </div>

    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton" class="btn btn-rounded-x btn-danger waves-effect text-left"
            data-url="/settings/stripe" data-loading-target="" data-ajax-type="PUT" data-type="form"
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
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/stripe/page.blade.php ENDPATH**/ ?>