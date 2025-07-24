<!--check list - select gateway-->
<div class="p-t-25 invoice-pay text-right hidden" id="invoice-pay-container">
    <div class="x-title" id="invoice-pay-title-select-method"><?php echo e(cleanLang(__('lang.select_payment_method'))); ?></div>
    <div class="x-options" id="invoice-pay-options-container">
        <!--stripe-->
        <?php if(config('system.settings_stripe_status') == 'enabled'): ?>
        <div class="x-checkbox">
            <label class="x-label"><?php echo e(config('system.settings_stripe_display_name')); ?></label>
            <input name="group5" type="radio" id="radio_payment_stripe" data-gateway-id="gateway-stripe"
                data-url="<?php echo e(url('invoices/'.$bill->bill_invoiceid.'/stripe-payment')); ?>"
                class="invoice-pay-gateway-selector with-gap radio-col-green">
            <label for="radio_payment_stripe">&nbsp;</label>
        </div>
        <?php endif; ?>
        <!--razorpay-->
        <?php if(config('system.settings_razorpay_status') == 'enabled'): ?>
        <div class="x-checkbox">
            <label class="x-label"><?php echo e(config('system.settings_razorpay_display_name')); ?></label>
            <input name="group5" type="radio" id="radio_payment_razorpay" data-gateway-id="gateway-razorpay"
                data-url="<?php echo e(url('invoices/'.$bill->bill_invoiceid.'/razorpay-payment')); ?>"
                class="invoice-pay-gateway-selector with-gap radio-col-green">
            <label for="radio_payment_razorpay">&nbsp;</label>
        </div>
        <?php endif; ?>
        <!--paypal-->
        <?php if(config('system.settings_paypal_status') == 'enabled'): ?>
        <div class="x-checkbox">
            <label class="x-label"><?php echo e(config('system.settings_paypal_display_name')); ?></label>
            <input name="group5" type="radio" id="radio_payment_paypal" data-gateway-id="gateway-paypal"
                data-url="<?php echo e(url('invoices/'.$bill->bill_invoiceid.'/paypal-payment')); ?>"
                class="invoice-pay-gateway-selector with-gap radio-col-green">
            <label for="radio_payment_paypal">&nbsp;</label>
        </div>
        <?php endif; ?>
        <!--mollie-->
        <?php if(config('system.settings_mollie_status') == 'enabled'): ?>
        <div class="x-checkbox">
            <label class="x-label"><?php echo e(config('system.settings_mollie_display_name')); ?></label>
            <input name="group5" type="radio" id="radio_payment_mollie" data-gateway-id="gateway-mollie"
                data-button-id="gateway-mollie"
                data-url="<?php echo e(url('invoices/'.$bill->bill_invoiceid.'/mollie-payment')); ?>"
                class="invoice-pay-gateway-selector with-gap radio-col-green">
            <label for="radio_payment_mollie">&nbsp;</label>
        </div>
        <?php endif; ?>
        <!--tap-->
        <?php if(config('system.settings2_tap_status') == 'enabled'): ?>
        <div class="x-checkbox">
            <label class="x-label"><?php echo e(config('system.settings2_tap_display_name')); ?></label>
            <input name="group5" type="radio" id="radio_payment_tap" data-gateway-id="gateway-tap"
                data-button-id="gateway-tap" data-url="<?php echo e(url('invoices/'.$bill->bill_invoiceid.'/tap-payment')); ?>"
                class="invoice-pay-gateway-selector with-gap radio-col-green">
            <label for="radio_payment_tap">&nbsp;</label>
        </div>
        <?php endif; ?>

        <!--paystack-->
        <?php if(config('system.settings2_paystack_status') == 'enabled'): ?>
        <div class="x-checkbox">
            <label class="x-label"><?php echo e(config('system.settings2_paystack_display_name')); ?></label>
            <input name="group5" type="radio" id="radio_payment_paystack" data-gateway-id="gateway-paystack"
                data-button-id="gateway-tap" data-url="<?php echo e(url('invoices/'.$bill->bill_invoiceid.'/paystack-payment')); ?>"
                class="invoice-pay-gateway-selector with-gap radio-col-green">
            <label for="radio_payment_paystack">&nbsp;</label>
        </div>
        <?php endif; ?>

        <!--bank-->
        <?php if(config('system.settings_bank_status') == 'enabled'): ?>
        <div class="x-checkbox">
            <label class="x-label"><?php echo e(config('system.settings_bank_display_name')); ?></label>
            <input name="group5" type="radio" id="radio_payment_bank" data-gateway-id="gateway-bank"
                class="invoice-pay-gateway-selector with-gap radio-col-green">
            <label for="radio_payment_bank">&nbsp;</label>
        </div>
        <?php endif; ?>
    </div>


    <!--PAYMENT BUTTONS-->
    <div id="invoice-paynow-buttons-wrapper">
        <div class="x-title hidden p-b-20" id="invoice-pay-title-complete-payment">
            <?php echo e(cleanLang(__('lang.complete_your_payment'))); ?>

        </div>
        <div id="invoice-paynow-buttons-container">
            <!--please wait-->
            <?php echo $__env->make('pages.pay.pleasewait', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--payment details - bank-->
            <?php if(config('system.settings_bank_status') == 'enabled'): ?>
            <?php echo $__env->make('pages.pay.bank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/pay/buttons.blade.php ENDPATH**/ ?>