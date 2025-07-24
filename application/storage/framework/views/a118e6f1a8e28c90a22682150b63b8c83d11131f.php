<div id="invoice-tax-type-content">
    <div class="p-t-10">
        <!--select type-->
        <div class="form-group row m-b-0">
            <div class="col-12">
                <select class="custom-select form-control form-control-sm" name="bill_tax_type">
                    <option value="inline" <?php echo e(runtimePreselected('inline', $bill['bill_discount_type'] ?? '')); ?>>
                        <?php echo app('translator')->get('lang.inline_tax'); ?>
                    </option>
                    <option value="summary" <?php echo e(runtimePreselected('summary', $bill['bill_discount_type'] ?? '')); ?>>
                        <?php echo app('translator')->get('lang.summary_tax'); ?>
                    </option>
                </select>
            </div>
            <div class="form-group row m-t-30 m-b-5">
                <div class="col-12">
                    <div class="alert alert-danger m-l-15 m-r-15 -m-t-30">
                        <h5 class="text-danger"><i class="ti-alert"></i> <?php echo app('translator')->get('lang.warning'); ?></h5>
                        <?php echo app('translator')->get('lang.this_change_will_refresh_page'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--update tax tax type-->
        <div class="form-group text-right">
            <button type="button" class="btn btn-info btn-sm ajax-request" data-type="form"
                data-form-id="invoice-tax-type-content" data-ajax-type="post"
                data-confirm-title="<?php echo app('translator')->get('lang.change_tax_type'); ?>"
                data-confirm-text="<?php echo app('translator')->get('lang.this_change_will_refresh_page'); ?>"
                data-url="<?php echo e(runtimeBillTaxTypeURL($bill)); ?>">
                <?php echo app('translator')->get('lang.update'); ?>
            </button>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/taxtype.blade.php ENDPATH**/ ?>