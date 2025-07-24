<div class="bill-taxes-discounts-container col-12 text-right p-t-20 p-b-20">
    <!--adjustment-->
    <a class="btn btn-rounded btn-outline-secondary btn-xs p-l-12 p-r-12 m-l-5 js-elements-popover-button" tabindex="0"
        id="billing-adjustment-popover-button" data-placement="top" data-title="<?php echo e(cleanLang(__('lang.adjustments'))); ?>"
        href="javascript:void(0);" data-popover-content="<?php echo e($elements['adjustments_popover']); ?>">
        <?php echo e(cleanLang(__('lang.adjustments'))); ?>

    </a>
    <!--tax rates-->
    <?php if($bill->bill_tax_type == 'summary'): ?>
    <a class="btn btn-rounded btn-outline-secondary btn-xs p-l-12 p-r-12 m-l-5 js-elements-popover-button" tabindex="0"
        id="billing-tax-popover-button" data-placement="top" data-popover-content="<?php echo e($elements['tax_popover']); ?>"
        data-title="<?php echo e(cleanLang(__('lang.tax_rates'))); ?>" href="javascript:void(0);">
        <?php echo e(cleanLang(__('lang.tax_rates'))); ?>

    </a>
    <?php endif; ?>
    <!--discounts-->
    <a class="btn btn-rounded btn-outline-secondary btn-xs p-l-12 p-r-12 m-l-5 js-elements-popover-button" tabindex="0"
        id="billing-discounts-popover-button" data-placement="top" data-title="<?php echo e(cleanLang(__('lang.discount'))); ?>"
        data-popover-content="<?php echo e($elements['discount_popover']); ?>" href="javascript:void(0);">
        <?php echo e(cleanLang(__('lang.discounts'))); ?>

    </a>

    <!--tax type (summary or inline)-->
    <?php if(config('visibility.tax_type_selector')): ?>
    <a class="btn btn-rounded btn-outline-secondary btn-xs p-l-12 p-r-12 m-l-5 js-elements-popover-button" tabindex="0"
        id="billing-discounts-popover-button" data-placement="top" data-title="<?php echo app('translator')->get('lang.change_tax_type'); ?>"
        data-popover-content="<?php echo e($elements['taxtype_popover']); ?>" href="javascript:void(0);">
        <?php echo e(cleanLang(__('lang.tax_type'))); ?>: <strong><?php echo e(runtimeLang($bill->bill_tax_type)); ?></strong>
    </a>
    <?php endif; ?>

</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/taxes-discounts.blade.php ENDPATH**/ ?>