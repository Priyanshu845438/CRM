<!--taxes - popover -->
<div id="invoice-tax-popover-content">
    <div class="p-t-10">
        <!--select type-->
        <!--[notes]: will be used with inline feature-->
        <div class="form-group m-t-10 hidden">
            <select class="custom-select col-12 form-control form-control-sm" id="billing-tax-type">
                <option value="none" <?php echo e(runtimePreselected('none', $bill['bill_tax_type'] ?? '')); ?>><?php echo e(cleanLang(__('lang.no_tax'))); ?></option>
                <option value="inline" <?php echo e(runtimePreselected('inline', $bill['bill_tax_type'] ?? '')); ?>><?php echo e(cleanLang(__('lang.inline_tax'))); ?></option>
                <option value="summary" <?php echo e(runtimePreselected('summary', $bill['bill_tax_type'] ?? '')); ?>><?php echo e(cleanLang(__('lang.summary_tax'))); ?></option>
            </select>
        </div>
        <div class="form-group m-t-10 hidden" id="billing-tax-popover-inline-info">
            <?php echo e(cleanLang(__('lang.you_can_set_tax_on_each_line'))); ?>

        </div>
        <!--tax rates for 'summary' typs-->
        <div class="hidden" id="billing-tax-popover-summary-info">
            <?php if(count($taxrates ?? []) > 0): ?>
            <?php $__currentLoopData = $taxrates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group m-b-0 m-t-0">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input js_summary_tax_rate"
                           data-tax-unique-id="<?php echo e($taxrate->taxrate_uniqueid); ?>"
                           id="tax-<?php echo e($taxrate->taxrate_uniqueid); ?>" 
                           value="<?php echo e($taxrate->taxrate_value); ?>">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?php echo e($taxrate->taxrate_name); ?>

                        (<?php echo e($taxrate->taxrate_value); ?>%)</span>
                    </label>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="text-center">
                <h5><?php echo e(cleanLang(__('lang.no_tax_rates_available'))); ?></h5>
            </div>
            <?php endif; ?>
        </div>
        <!--update-->
        <div class="form-group text-right">
            <button type="button" class="btn btn-info btn-sm" id="billing-tax-popover-update">
                <?php echo e(cleanLang(__('lang.update'))); ?>

            </button>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/taxpopover.blade.php ENDPATH**/ ?>