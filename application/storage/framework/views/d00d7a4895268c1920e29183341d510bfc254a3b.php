<?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="payment_<?php echo e($payment->payment_id); ?>">
    <?php if(config('visibility.payments_col_checkboxes')): ?>
    <td class="payments_col_checkbox checkitem" id="payments_col_checkbox_<?php echo e($payment->payment_id); ?>">
        <!--list checkbox-->
        <span class="list-checkboxes display-inline-block w-px-20">
            <input type="checkbox" id="listcheckbox-payments-<?php echo e($payment->payment_id); ?>"
                name="ids[<?php echo e($payment->payment_id); ?>]"
                class="listcheckbox listcheckbox-payments filled-in chk-col-light-blue"
                data-actions-container-class="payments-checkbox-actions-container">
            <label for="listcheckbox-payments-<?php echo e($payment->payment_id); ?>"></label>
        </span>
    </td>
    <?php endif; ?>
    <?php if(config('visibility.payments_col_id')): ?>
    <td class="payments_col_id" id="payments_col_id_<?php echo e($payment->payment_id); ?>"><a href="javascript:void(0)"
            class="show-modal-button js-ajax-ux-request" data-toggle="modal"
            data-url="<?php echo e(url( '/')); ?>/payments/<?php echo e($payment->payment_id); ?> " data-target="#plainModal"
            data-loading-target="plainModalBody" data-modal-title="">#<?php echo e($payment->payment_id); ?></a></td>
    <?php endif; ?>
    <td class="payments_col_date" id="payments_col_date_<?php echo e($payment->payment_id); ?>">
        <?php echo e(runtimeDate($payment->payment_date)); ?>

    </td>
    <?php if(config('visibility.payments_col_invoiceid')): ?>
    <td class="payments_col_bill_invoiceid" id="payments_col_bill_invoiceid_<?php echo e($payment->payment_id); ?>">
        <a href="/invoices/<?php echo e($payment->payment_invoiceid); ?>"><?php echo e(runtimeInvoiceIdFormat($payment->bill_invoiceid)); ?></a>
    </td>
    <?php endif; ?>
    <td class="payments_col_amount" id="payments_col_amount_<?php echo e($payment->payment_id); ?>">
        <?php echo e(runtimeMoneyFormat($payment->payment_amount)); ?></td>
    <?php if(config('visibility.payments_col_client')): ?>
    <td class="payments_col_client" id="payments_col_client_<?php echo e($payment->payment_id); ?>">
        <a
            href="/clients/<?php echo e($payment->payment_clientid); ?>"><?php echo e(str_limit($payment->client_company_name ?? '---', 20)); ?></a>
    </td>
    <?php endif; ?>
    <?php if(config('visibility.payments_col_project')): ?>
    <td class="payments_col_project" id="payments_col_project_<?php echo e($payment->payment_id); ?>">
        <a href="/projects/<?php echo e($payment->payment_projectid); ?>"><?php echo e(str_limit($payment->project_title ?? '---', 25)); ?></a>
    </td>
    <?php endif; ?>
    <td class="payments_col_transaction hidden" id="payments_col_transaction_<?php echo e($payment->payment_id); ?>">
        <?php echo e(str_limit($payment->payment_transaction_id ?? '---', 20)); ?></td>
    <?php if(config('visibility.payments_col_method')): ?>
    <td class="payments_col_method text-ucf" id="payments_col_method_<?php echo e($payment->payment_id); ?>">
        <?php echo e($payment->payment_gateway); ?>

    </td>
    <?php endif; ?>
    <?php if(config('visibility.payments_col_action')): ?>
    <td class="payments_col_action actions_column" id="payments_col_action_<?php echo e($payment->payment_id); ?>">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--edit-->
            <?php if(config('visibility.action_buttons_edit')): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(urlResource('/payments/'.$payment->payment_id.'/edit')); ?>"
                data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.edit_payment'))); ?>"
                data-action-url="<?php echo e(urlResource('/payments/'.$payment->payment_id.'?ref=list')); ?>"
                data-action-method="PUT" data-action-ajax-class=""
                data-action-ajax-loading-target="payments-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <?php endif; ?>
            <!--delete-->
            <?php if(config('visibility.action_buttons_delete')): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_payment'))); ?>"
                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                data-url="<?php echo e(url('/')); ?>/payments/<?php echo e($payment->payment_id); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <?php endif; ?>
            <a href="javascript:void(0)" title="<?php echo e(cleanLang(__('lang.view'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-info btn-circle btn-sm show-modal-button js-ajax-ux-request"
                data-toggle="modal" data-url="<?php echo e(url( '/')); ?>/payments/<?php echo e($payment->payment_id); ?> "
                data-target="#plainModal" data-loading-target="plainModalBody" data-modal-title="">
                <i class="ti-new-window"></i>
            </a>
        </span>
        <!--action button-->
    </td>
    <?php endif; ?>
</tr>
<!--each row-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/payments/components/table/ajax.blade.php ENDPATH**/ ?>