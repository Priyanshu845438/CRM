<div id="invoice-adjustments-popover-content">
    <div class="p-t-10">

        <!--description-->
        <div class="form-group row">
            <label class="col-12 text-left control-label col-form-label"><?php echo app('translator')->get('lang.description'); ?></label>
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="js_bill_adjustment_description"
                    name="js_bill_adjustment_description" placeholder="">
            </div>
        </div>

        <!--amount-->
        <div class="form-group row">
            <label class="col-12 text-left control-label col-form-label"><?php echo app('translator')->get('lang.amount'); ?></label>
            <div class="col-12">
                <input type="number" class="form-control form-control-sm" id="js_bill_adjustment_amount"
                    name="js_bill_adjustment_amount" placeholder="">
            </div>
        </div>

        <div class="form-group text-right">
            <button type="button" class="btn btn-danger btn-sm" id="billing-adjustment-popover-remove">
                <?php echo e(cleanLang(__('lang.remove_adjustment'))); ?>

            </button>
            <button type="button" class="btn btn-info btn-sm" id="billing-adjustment-popover-update">
                <?php echo e(cleanLang(__('lang.update'))); ?>

            </button>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/adjustments.blade.php ENDPATH**/ ?>