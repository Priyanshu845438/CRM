<?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="expense_<?php echo e($expense->expense_id); ?>">
    <?php if(config('visibility.expenses_col_checkboxes')): ?>
    <td class="expenses_col_checkbox checkitem" id="expenses_col_checkbox_<?php echo e($expense->expense_id); ?>">
        <!--list checkbox-->
        <span class="list-checkboxes display-inline-block w-px-20">
            <input type="checkbox" id="listcheckbox-expenses-<?php echo e($expense->expense_id); ?>"
                name="ids[<?php echo e($expense->expense_id); ?>]"
                class="listcheckbox listcheckbox-expenses filled-in chk-col-light-blue expenses-checkbox"
                data-actions-container-class="expenses-checkbox-actions-container"
                data-expense-id="<?php echo e($expense->expense_id); ?>" data-unit="<?php echo e(cleanLang(__('lang.item'))); ?>" data-quantity="1"
                data-description="<?php echo e($expense->expense_description); ?>" data-rate="<?php echo e($expense->expense_amount); ?>">
            <label for="listcheckbox-expenses-<?php echo e($expense->expense_id); ?>"></label>
        </span>
    </td>
    <?php endif; ?>
    <?php if(config('visibility.expenses_col_date')): ?>
    <td class="expenses_col_date">
        <?php echo e(runtimeDate($expense->expense_date)); ?>

    </td>
    <?php endif; ?>
    <?php if(config('visibility.expenses_col_description')): ?>
    <td class="expenses_col_description">
        <?php if(config('settings.trimmed_title')): ?>
        <span
            title="<?php echo e($expense->expense_description); ?>"><?php echo e(str_limit($expense->expense_description ?? '---', 15)); ?></span>
        <?php else: ?>
        <span
            title="<?php echo e($expense->expense_description); ?>"><?php echo e(str_limit($expense->expense_description ?? '---', 35)); ?></span>
        <?php endif; ?>
    </td>
    <?php endif; ?>
    <!--column visibility-->
    <?php if(config('visibility.expenses_col_user')): ?>
    <td class="expenses_col_user">
        <img src="<?php echo e(getUsersAvatar($expense->avatar_directory, $expense->avatar_filename)); ?>" alt="user"
            class="img-circle avatar-xsmall"> <?php echo e(str_limit($expense->first_name ?? runtimeUnkownUser(), 8)); ?>

    </td>
    <?php endif; ?>
    <!--column visibility-->
    <?php if(config('visibility.expenses_col_client')): ?>
    <td class="expenses_col_client">
        <a
            href="/clients/<?php echo e($expense->expense_clientid); ?>"><?php echo e(str_limit($expense->client_company_name ?? '---', 12)); ?></a>
    </td>
    <?php endif; ?>
    <!--column visibility-->
    <?php if(config('visibility.expenses_col_project')): ?>
    <td class="expenses_col_project">
        <a href="/projects/<?php echo e($expense->expense_projectid); ?>"><?php echo e(str_limit($expense->project_title ?? '---', 12)); ?></a>
    </td>
    <?php endif; ?>
    <?php if(config('visibility.expenses_col_amount')): ?>
    <td class="expenses_col_amount">
        <?php echo e(runtimeMoneyFormat($expense->expense_amount)); ?>

    </td>
    <?php endif; ?>
    <?php if(config('visibility.expenses_col_status')): ?>
    <td class="expenses_col_status">

        <?php if($expense->expense_billable == 'billable'): ?>
        <?php if($expense->expense_billing_status == 'invoiced'): ?>
        <span class="table-icons">
            <a href="<?php echo e(url('/invoices/'.$expense->expense_billable_invoiceid)); ?>">
                <i class="mdi mdi-credit-card-plus text-danger" data-toggle="tooltip"
                    title="<?php echo e(cleanLang(__('lang.invoiced'))); ?> : <?php echo e(runtimeInvoiceIdFormat($expense->expense_billable_invoiceid)); ?>"></i>
            </a>
        </span>
        <?php else: ?>
        <span class="table-icons">
            <i class="mdi mdi-credit-card-plus text-success" data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.billable'))); ?> - <?php echo e(cleanLang(__('lang.not_invoiced'))); ?>"></i>
        </span>
        <?php endif; ?>
        <?php else: ?>
        <span class="table-icons">
            <i class="mdi mdi-credit-card-off text-disabled" data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.not_billable'))); ?>"></i>
        </span>
        <?php endif; ?>
    </td>
    <?php endif; ?>
    <?php if(config('visibility.expenses_col_action')): ?>
    <td class="expenses_col_action actions_column" id="expenses_col_action_<?php echo e($expense->expense_id); ?>">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--delete-->
            <?php if(config('visibility.action_buttons_delete')): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>" data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>"
                data-ajax-type="DELETE" data-url="<?php echo e(url('/')); ?>/expenses/<?php echo e($expense->expense_id); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <?php endif; ?>
            <!--edit-->
            <?php if(config('visibility.action_buttons_edit')): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(urlResource('/expenses/'.$expense->expense_id.'/edit')); ?>"
                data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.edit_expense'))); ?>"
                data-action-url="<?php echo e(urlResource('/expenses/'.$expense->expense_id.'?ref=list')); ?>"
                data-action-method="PUT" data-action-ajax-class=""
                data-action-ajax-loading-target="expenses-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <?php endif; ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.view'))); ?>"
                class="data-toggle-tooltip show-modal-button btn btn-outline-info btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#plainModal" data-loading-target="plainModalBody"
                data-modal-title="<?php echo e(cleanLang(__('lang.expense_records'))); ?>" data-url="<?php echo e(url('/expenses/'.$expense->expense_id)); ?>">
                <i class="ti-new-window"></i>
            </button>

            <!--more button (team)-->
            <?php if(config('visibility.action_buttons_edit') == 'show'): ?>
            <span class="list-table-action dropdown font-size-inherit">
                <button type="button" id="listTableAction" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" title="<?php echo e(cleanLang(__('lang.more'))); ?>" class="data-toggle-action-tooltip btn btn-outline-default-light btn-circle btn-sm">
                    <i class="ti-more"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="listTableAction">
                    <?php if($expense->expense_billing_status == 'not_invoiced'): ?>
                    <!--actions button - attach project -->
                    <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form"
                        href="javascript:void(0)" data-toggle="modal" data-target="#actionsModal"
                        data-modal-title=" <?php echo e(cleanLang(__('lang.attach_to_project'))); ?>"
                        data-url="<?php echo e(url('/expenses/' . $expense->expense_id .'/attach-dettach')); ?>"
                        data-action-url="<?php echo e(urlResource('/expenses/' . $expense->expense_id .'/attach-dettach')); ?>"
                        data-loading-target="actionsModalBody" data-action-method="POST">
                        <?php echo e(cleanLang(__('lang.attach_dettach'))); ?></a>
                    <?php endif; ?>
                    <!--actions button - change category-->
                    <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form"
                        href="javascript:void(0)" data-toggle="modal" data-target="#actionsModal"
                        data-modal-title="<?php echo e(cleanLang(__('lang.change_category'))); ?>"
                        data-url="<?php echo e(url('/expenses/change-category')); ?>"
                        data-action-url="<?php echo e(urlResource('/expenses/change-category?id='.$expense->expense_id)); ?>"
                        data-loading-target="actionsModalBody" data-action-method="POST">
                        <?php echo e(cleanLang(__('lang.change_category'))); ?></a>
                </div>
            </span>
            <?php endif; ?>
            <!--more button-->
        </span>
        <!--action button-->

    </td>
    <?php endif; ?>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/expenses/components/table/ajax.blade.php ENDPATH**/ ?>