<?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="invoice_<?php echo e($invoice->bill_invoiceid); ?>">
    <?php if(config('visibility.invoices_col_checkboxes')): ?>
    <td class="invoices_col_checkbox checkitem" id="invoices_col_checkbox_<?php echo e($invoice->bill_invoiceid); ?>">
        <!--list checkbox-->
        <span class="list-checkboxes display-inline-block w-px-20">
            <input type="checkbox" id="listcheckbox-invoices-<?php echo e($invoice->bill_invoiceid); ?>"
                name="ids[<?php echo e($invoice->bill_invoiceid); ?>]"
                class="listcheckbox listcheckbox-invoices filled-in chk-col-light-blue"
                data-actions-container-class="invoices-checkbox-actions-container">
            <label for="listcheckbox-invoices-<?php echo e($invoice->bill_invoiceid); ?>"></label>
        </span>
    </td>
    <?php endif; ?>
    <td class="invoices_col_id" id="invoices_col_id_<?php echo e($invoice->bill_invoiceid); ?>">
        <a href="/invoices/<?php echo e($invoice->bill_invoiceid); ?>">
            <?php echo e($invoice->formatted_bill_invoiceid); ?> </a>
        <!--recurring-->
        <?php if(auth()->user()->is_team && $invoice->bill_recurring == 'yes'): ?>
        <span class="sl-icon-refresh text-danger p-l-5" data-toggle="tooltip"
            title="<?php echo app('translator')->get('lang.recurring_invoice'); ?>"></span>
        <?php endif; ?>
        <!--child invoice-->
        <?php if(auth()->user()->is_team && $invoice->bill_recurring_child == 'yes'): ?>
        <a href="<?php echo e(url('invoices/'.$invoice->bill_recurring_parent_id)); ?>">
            <i class="ti-back-right text-success p-l-5" data-toggle="tooltip" data-html="true"
                title="<?php echo e(cleanLang(__('lang.invoice_automatically_created_from_recurring'))); ?> <br>(#<?php echo e(runtimeInvoiceIdFormat($invoice->bill_recurring_parent_id)); ?>)"></i>
        </a>
        <?php endif; ?>
    </td>
    <td class="invoices_col_date" id="invoices_col_date_<?php echo e($invoice->bill_invoiceid); ?>">
        <?php echo e(runtimeDate($invoice->bill_date)); ?>

    </td>
    <?php if(config('visibility.invoices_col_client')): ?>
    <td class="invoices_col_company" id="invoices_col_company_<?php echo e($invoice->bill_invoiceid); ?>">
        <a href="/clients/<?php echo e($invoice->bill_clientid); ?>"><?php echo e(str_limit($invoice->client_company_name ?? '---', 12)); ?></a>
    </td>
    <?php endif; ?>
    <?php if(config('visibility.invoices_col_project')): ?>
    <td class="invoices_col_project" id="invoices_col_project_<?php echo e($invoice->bill_invoiceid); ?>">
        <a href="/projects/<?php echo e($invoice->bill_projectid); ?>"><?php echo e(str_limit($invoice->project_title ?? '---', 12)); ?></a>
    </td>
    <?php endif; ?>

    <td class="invoices_col_amount" id="invoices_col_amount_<?php echo e($invoice->bill_invoiceid); ?>">
        <?php echo e(runtimeMoneyFormat($invoice->bill_final_amount)); ?></td>
    <?php if(config('visibility.invoices_col_payments')): ?>
    <td class="invoices_col_payments" id="invoices_col_payments_<?php echo e($invoice->bill_invoiceid); ?>">
        <a
            href="<?php echo e(url('payments?filter_payment_invoiceid='.$invoice->bill_invoiceid)); ?>"><?php echo e(runtimeMoneyFormat($invoice->sum_payments)); ?></a>
    </td>
    <?php endif; ?>
    <td class="invoices_col_balance hidden" id="invoices_col_balance_<?php echo e($invoice->bill_invoiceid); ?>">
        <?php echo e(runtimeMoneyFormat($invoice->invoice_balance)); ?>

    </td>
    <td class="invoices_col_status" id="invoices_col_status_<?php echo e($invoice->bill_invoiceid); ?>">

        <span class="label <?php echo e(runtimeInvoiceStatusColors($invoice->bill_status, 'label')); ?>"><?php echo e(runtimeLang($invoice->bill_status)); ?></span>

        <!--estimate viewed-->
        <?php if($invoice->bill_publishing_type == 'scheduled' && $invoice->bill_publishing_scheduled_status == 'pending'): ?>
        <span class="label label-icons label-icons-warning" data-toggle="tooltip" data-placement="top"
            title="<?php echo app('translator')->get('lang.scheduled_publishing_info'); ?>: <?php echo e(runtimeDate($invoice->bill_publishing_scheduled_date)); ?>"><i class="sl-icon-clock"></i></span>
        <?php endif; ?>

        <?php if(config('system.settings_estimates_show_view_status') == 'yes' && auth()->user()->is_team &&
        $invoice->bill_status != 'draft' && $invoice->bill_status != 'paid'): ?>
        <!--estimate not viewed-->
        <?php if($invoice->bill_viewed_by_client == 'no'): ?>
        <span class="label label-icons label-icons-default" data-toggle="tooltip" data-placement="top"
            title="<?php echo app('translator')->get('lang.client_has_not_opened'); ?>"><i class="sl-icon-eye"></i></span>
        <?php endif; ?>
        <!--estimate viewed-->
        <?php if($invoice->bill_viewed_by_client == 'yes'): ?>
        <span class="label label-icons label-icons-info" data-toggle="tooltip" data-placement="top"
            title="<?php echo app('translator')->get('lang.client_has_opened'); ?>"><i class="sl-icon-eye"></i></span>
        <?php endif; ?>
        <?php endif; ?>

    </td>
    <td class="invoices_col_action actions_column" id="invoices_col_action_<?php echo e($invoice->bill_invoiceid); ?>">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">

            <!--client options-->
            <?php if(auth()->user()->is_client): ?>
            <a title="<?php echo e(cleanLang(__('lang.download'))); ?>" title="<?php echo e(cleanLang(__('lang.download'))); ?>"
                class="data-toggle-tooltip data-toggle-tooltip btn btn-outline-warning btn-circle btn-sm"
                href="<?php echo e(url('/invoices/'.$invoice->bill_invoiceid.'/pdf')); ?>" download>
                <i class="ti-import"></i></a>
            <?php endif; ?>
            <!--delete-->
            <?php if(config('visibility.action_buttons_delete')): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_invoice'))); ?>"
                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                data-url="<?php echo e(url('/')); ?>/invoices/<?php echo e($invoice->bill_invoiceid); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <?php endif; ?>
            <!--edit-->
            <?php if(config('visibility.action_buttons_edit')): ?>
            <a href="/invoices/<?php echo e($invoice->bill_invoiceid); ?>/edit-invoice" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-info btn-circle btn-sm">
                <i class="sl-icon-note"></i>
            </a>
            <?php endif; ?>
            <a href="/invoices/<?php echo e($invoice->bill_invoiceid); ?>" title="<?php echo e(cleanLang(__('lang.view'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-info btn-circle btn-sm">
                <i class="ti-new-window"></i>
            </a>

            <!--more button (team)-->
            <?php if(auth()->user()->is_team): ?>
            <span class="list-table-action dropdown font-size-inherit">
                <button type="button" id="listTableAction" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" title="<?php echo e(cleanLang(__('lang.more'))); ?>"
                    class="data-toggle-action-tooltip btn btn-outline-default-light btn-circle btn-sm">
                    <i class="ti-more"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="listTableAction">
                    <?php if(config('visibility.action_buttons_edit')): ?>
                    <!--quick edit-->
                    <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form edit-add-modal-button"
                        data-toggle="modal" data-target="#commonModal"
                        data-url="<?php echo e(urlResource('/invoices/'.$invoice->bill_invoiceid.'/edit')); ?>"
                        data-loading-target="commonModalBody"
                        data-modal-title="<?php echo e(cleanLang(__('lang.edit_invoice'))); ?>"
                        data-action-url="<?php echo e(urlResource('/invoices/'.$invoice->bill_invoiceid.'?ref=list')); ?>"
                        data-action-method="PUT" data-action-ajax-class=""
                        data-action-ajax-loading-target="invoices-td-container">
                        <?php echo e(cleanLang(__('lang.quick_edit'))); ?>

                    </a>
                    <!--email to client-->
                    <a class="dropdown-item confirm-action-info" href="javascript:void(0)"
                        data-confirm-title="<?php echo e(cleanLang(__('lang.email_to_client'))); ?>"
                        data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>"
                        data-url="<?php echo e(url('/invoices')); ?>/<?php echo e($invoice->bill_invoiceid); ?>/resend?ref=list">
                        <?php echo e(cleanLang(__('lang.email_to_client'))); ?></a>
                    <!--add payment-->
                    <?php if(auth()->user()->role->role_invoices > 1): ?>
                    <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form edit-add-modal-button"
                        href="javascript:void(0)" data-toggle="modal" data-target="#commonModal"
                        data-modal-title="<?php echo e(cleanLang(__('lang.add_new_payment'))); ?>"
                        data-url="<?php echo e(url('/payments/create?bill_invoiceid='.$invoice->bill_invoiceid)); ?>"
                        data-action-url="<?php echo e(urlResource('/payments?ref=invoice&source=list&bill_invoiceid='.$invoice->bill_invoiceid)); ?>"
                        data-loading-target="actionsModalBody" data-action-method="POST">
                        <?php echo e(cleanLang(__('lang.add_new_payment'))); ?></a>
                    <?php endif; ?>
                    <!--clone invoice-->
                    <?php if(auth()->user()->role->role_invoices > 1): ?>
                    <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form edit-add-modal-button"
                        href="javascript:void(0)" data-toggle="modal" data-target="#commonModal"
                        data-modal-title="<?php echo e(cleanLang(__('lang.clone_invoice'))); ?>"
                        data-url="<?php echo e(url('/invoices/'.$invoice->bill_invoiceid.'/clone')); ?>"
                        data-action-url="<?php echo e(url('/invoices/'.$invoice->bill_invoiceid.'/clone')); ?>"
                        data-loading-target="actionsModalBody" data-action-method="POST">
                        <?php echo e(cleanLang(__('lang.clone_invoice'))); ?></a>
                    <?php endif; ?>
                    <!--change category-->
                    <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form"
                        href="javascript:void(0)" data-toggle="modal" data-target="#actionsModal"
                        data-modal-title="<?php echo e(cleanLang(__('lang.change_category'))); ?>"
                        data-url="<?php echo e(url('/invoices/change-category')); ?>"
                        data-action-url="<?php echo e(urlResource('/invoices/change-category?id='.$invoice->bill_invoiceid)); ?>"
                        data-loading-target="actionsModalBody" data-action-method="POST">
                        <?php echo e(cleanLang(__('lang.change_category'))); ?></a>
                    <!--attach project -->
                    <?php if(!is_numeric($invoice->bill_projectid)): ?>
                    <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form"
                        href="javascript:void(0)" data-toggle="modal" data-target="#actionsModal"
                        data-modal-title=" <?php echo e(cleanLang(__('lang.attach_to_project'))); ?>"
                        data-url="<?php echo e(urlResource('/invoices/'.$invoice->bill_invoiceid.'/attach-project?client_id='.$invoice->bill_clientid)); ?>"
                        data-action-url="<?php echo e(urlResource('/invoices/'.$invoice->bill_invoiceid.'/attach-project')); ?>"
                        data-loading-target="actionsModalBody" data-action-method="POST">
                        <?php echo e(cleanLang(__('lang.attach_to_project'))); ?></a>
                    <?php endif; ?>
                    <!--dettach project -->
                    <?php if(is_numeric($invoice->bill_projectid)): ?>
                    <a class="dropdown-item confirm-action-danger" href="javascript:void(0)"
                        data-confirm-title="<?php echo e(cleanLang(__('lang.detach_from_project'))); ?>"
                        data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>"
                        data-url="<?php echo e(urlResource('/invoices/'.$invoice->bill_invoiceid.'/detach-project')); ?>">
                        <?php echo e(cleanLang(__('lang.detach_from_project'))); ?></a>
                    <?php endif; ?>
                    <!--recurring settings-->
                    <a class="dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                        href="javascript:void(0)" data-toggle="modal" data-target="#commonModal"
                        data-url="<?php echo e(urlResource('/invoices/'.$invoice->bill_invoiceid.'/recurring-settings?source=page')); ?>"
                        data-loading-target="commonModalBody"
                        data-modal-title="<?php echo e(cleanLang(__('lang.recurring_settings'))); ?>"
                        data-action-url="<?php echo e(urlResource('/invoices/'.$invoice->bill_invoiceid.'/recurring-settings?source=page')); ?>"
                        data-action-method="POST"
                        data-action-ajax-loading-target="invoices-td-container"><?php echo e(cleanLang(__('lang.recurring_settings'))); ?></a>
                    <!--stop recurring -->
                    <?php if($invoice->bill_recurring == 'yes'): ?>
                    <a class="dropdown-item confirm-action-info" href="javascript:void(0)"
                        data-confirm-title="<?php echo e(cleanLang(__('lang.stop_recurring'))); ?>"
                        data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>"
                        data-url="<?php echo e(urlResource('/invoices/'.$invoice->bill_invoiceid.'/stop-recurring')); ?>">
                        <?php echo e(cleanLang(__('lang.stop_recurring'))); ?></a>
                    <?php endif; ?>
                    <?php endif; ?>
                    <a class="dropdown-item"
                        href="<?php echo e(url('payments?filter_payment_invoiceid='.$invoice->bill_invoiceid)); ?>">
                        <?php echo e(cleanLang(__('lang.view_payments'))); ?></a>
                    <a class="dropdown-item" href="<?php echo e(url('/invoices/'.$invoice->bill_invoiceid.'/pdf')); ?>" download>
                        <?php echo e(cleanLang(__('lang.download'))); ?></a>
                </div>
            </span>
            <?php endif; ?>
            <!--more button-->
        </span>
        <!--action button-->

    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/invoices/components/table/ajax.blade.php ENDPATH**/ ?>