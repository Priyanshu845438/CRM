<div class="invoice-item-actions">

    <!--add blank line-->
    <button type="button" id="billing-item-actions-blank"
        class="btn btn-secondary btn-rounded btn-sm btn-rounded-icon"><i
            class="mdi mdi-plus-circle-outline text-themecontrast"></i>
        <span><?php echo e(cleanLang(__('lang.new_blank_line'))); ?></span></button>

    <!--add time line-->
    <button type="button" id="billing-time-actions-blank"
        class="btn btn-secondary btn-rounded btn-sm btn-rounded-icon"><i class="mdi mdi-clock text-themecontrast"></i>
        <span><?php echo e(cleanLang(__('lang.new_time_line'))); ?></span></button>

    <!--add dimensions-->
    <?php if(config('system.settings2_extras_dimensions_billing') == 'enabled'): ?>
    <button type="button" id="billing-dimensions-actions-blank"
        class="btn btn-secondary btn-rounded btn-sm btn-rounded-icon"><i
            class="mdi mdi-selection text-themecontrast"></i>
        <span><?php echo e(cleanLang(__('lang.dimensions'))); ?></span></button>
    <?php endif; ?>

    <!--add product item-->
    <button type="button"
        class="billing-mode-only-item btn btn-secondary btn-rounded btn-sm btn-rounded-icon actions-modal-button js-ajax-ux-request reset-target-modal-form"
        data-toggle="modal" data-target="#itemsModal" data-modal-title="<?php echo e(cleanLang(__('lang.product_item'))); ?>" id="add-item-button-products"
        data-reset-loading-target="true"
        data-url="<?php echo e(url('/items?action=search&itemresource_type=invoice&dom_reset=skip')); ?>"
        data-loading-target="items-table-wrapper"><i class="mdi mdi-cart-outline text-themecontrast"></i>
        <span><?php echo e(cleanLang(__('lang.product_item'))); ?></span></button>


    <!--add category items-->
    <button type="button"
        class="billing-mode-only-item btn btn-secondary btn-rounded btn-sm btn-rounded-icon actions-modal-button js-ajax-ux-request reset-target-modal"
        data-toggle="modal" data-target="#categoryItemsModal" data-modal-title="<?php echo e(cleanLang(__('lang.product_category'))); ?>" id="add-item-button-products-category"
        data-reset-loading-target="true"
        data-url="<?php echo e(url('/items/category?action=search&itemresource_type=invoice&dom_reset=skip')); ?>"
        data-loading-target="items-table-wrapper"><i class="mdi mdi-playlist-plus text-themecontrast"></i>
        <span><?php echo e(cleanLang(__('lang.product_category'))); ?></span></button>

    <!--[invoices] add expense-->
    <?php if($bill->bill_type == 'invoice'): ?>
    <button type="button"
        class="billing-mode-only-item btn btn-secondary btn-rounded btn-sm btn-rounded-icon actions-modal-button js-ajax-ux-request reset-target-modal-form"
        data-toggle="modal" data-target="#expensesModal" data-modal-title="<?php echo e(cleanLang(__('lang.expense'))); ?>"
        data-reset-loading-target="true"
        data-url="<?php echo e(url('/expenses?action=search&itemresource_type=invoice&expense_billable=billable&expense_billing_status=not_invoiced&dom_reset=skip&filter_expense_clientid='.$bill->bill_clientid.'&filter_expense_projectid='.$bill->bill_projectid)); ?>"
        data-loading-target="expenses-table-wrapper"><i class="mdi mdi-cash-usd text-themecontrast"></i>
        <span><?php echo e(cleanLang(__('lang.expense'))); ?></span></button>

    <!--[invoices] add time sheet-->
    <button type="button"
        class="billing-mode-only-item btn btn-secondary btn-rounded btn-sm btn-rounded-icon actions-modal-button js-ajax-ux-request reset-target-modal-form"
        data-toggle="modal" data-target="#timebillingModal"
        data-modal-title="<?php echo e(cleanLang(__('lang.change_category'))); ?>" data-reset-loading-target="true"
        data-url="<?php echo e(url('/invoices/timebilling/'.$bill->bill_projectid.'?grouping=tasks')); ?>"
        data-loading-target="timebilling-table-wrapper"><i class="mdi mdi-calendar-clock text-themecontrast"></i>
        <span><?php echo e(cleanLang(__('lang.hours_worked'))); ?></span></button>
    <?php endif; ?>

</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/misc/add-line-buttons.blade.php ENDPATH**/ ?>