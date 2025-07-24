<?php $__currentLoopData = $estimates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estimate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="estimate_<?php echo e($estimate->bill_estimateid); ?>">
    <?php if(config('visibility.estimates_col_checkboxes')): ?>
    <td class="estimates_col_checkbox checkitem" id="estimates_col_checkbox_<?php echo e($estimate->bill_estimateid); ?>">
        <!--list checkbox-->
        <span class="list-checkboxes display-inline-block w-px-20">
            <input type="checkbox" id="listcheckbox-estimates-<?php echo e($estimate->bill_estimateid); ?>"
                name="ids[<?php echo e($estimate->bill_estimateid); ?>]"
                class="listcheckbox listcheckbox-estimates filled-in chk-col-light-blue"
                data-actions-container-class="estimates-checkbox-actions-container">
            <label for="listcheckbox-estimates-<?php echo e($estimate->bill_estimateid); ?>"></label>
        </span>
    </td>
    <?php endif; ?>
    <td class="estimates_col_id" id="estimates_col_id_<?php echo e($estimate->bill_estimateid); ?>">
        <a href="/estimates/<?php echo e($estimate->bill_estimateid); ?>"><?php echo e($estimate->formatted_bill_estimateid); ?></a>
        <!--automation-->
        <?php if(auth()->user()->is_team && $estimate->estimate_automation_status == 'enabled'): ?>
        <span class="sl-icon-energy text-warning p-l-5" data-toggle="tooltip"
            title="<?php echo app('translator')->get('lang.estimate_automation'); ?>"></span>
        <?php endif; ?>
    </td>
    <td class="estimates_col_date" id="estimates_col_date_<?php echo e($estimate->bill_estimateid); ?>">
        <?php echo e(runtimeDate($estimate->bill_date)); ?>

    </td>
    <?php if(config('visibility.estimates_col_client')): ?>
    <td class="estimates_col_company" id="estimates_col_company_<?php echo e($estimate->bill_estimateid); ?>">
        <a href="/clients/<?php echo e($estimate->bill_clientid); ?>">
            <?php echo e(str_limit($estimate->client_company_name ?? '---', 30)); ?></a>
    </td>
    <?php endif; ?>
    <?php if(config('visibility.estimates_col_created_by')): ?>
    <td class="estimates_col_created_by" id="estimates_col_created_by_<?php echo e($estimate->bill_estimateid); ?>">
        <img src="<?php echo e(getUsersAvatar($estimate->avatar_directory, $estimate->avatar_filename)); ?>" alt="user"
            class="img-circle avatar-xsmall">
        <?php echo e($estimate->first_name ?? runtimeUnkownUser()); ?>

    </td>
    <?php endif; ?>
    <?php if(config('visibility.estimates_col_expires')): ?>
    <td class="estimates_col_expires" id="estimates_col_expires_<?php echo e($estimate->bill_estimateid); ?>">
        <?php echo e(runtimeDate($estimate->bill_expiry_date)); ?></td>
    <?php endif; ?>

    <?php if(config('visibility.estimates_col_tags')): ?>
    <td class="estimates_col_tags" id="estimates_col_tags_<?php echo e($estimate->bill_estimateid); ?>">
        <!--tag-->
        <?php if(count($estimate->tags ?? []) > 0): ?>
        <span class="label label-outline-default"><?php echo e(str_limit($estimate->tags->first()->tag_title, 15)); ?></span>
        <?php else: ?>
        <span>---</span>
        <?php endif; ?>
        <!--/#tag-->

        <!--more tags-->
        <?php if(count($estimate->tags ?? []) > 1): ?>
        <?php $tags = $estimate->tags; ?>
        <?php echo $__env->make('misc.more-tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <!--more tags-->
    </td>
    <?php endif; ?>
    <td class="estimates_col_amount" id="estimates_col_amount_<?php echo e($estimate->bill_estimateid); ?>">
        <?php echo e(runtimeMoneyFormat($estimate->bill_final_amount)); ?>

    </td>
    <td class="estimates_col_status" id="estimates_col_status_<?php echo e($estimate->bill_estimateid); ?>">
        <span class="label <?php echo e(runtimeEstimateStatusColors($estimate->bill_status, 'label')); ?>"><?php echo e(runtimeLang($estimate->bill_status)); ?></span>

        <!--estimate viewed-->
        <?php if($estimate->bill_publishing_type == 'scheduled' && $estimate->bill_publishing_scheduled_status == 'pending'): ?>
        <span class="label label-icons label-icons-warning" data-toggle="tooltip" data-placement="top"
            title="<?php echo app('translator')->get('lang.scheduled_publishing_info'); ?>: <?php echo e(runtimeDate($estimate->bill_publishing_scheduled_date)); ?>"><i
                class="sl-icon-clock"></i></span>
        <?php endif; ?>

        <?php if(config('system.settings_estimates_show_view_status') == 'yes' && auth()->user()->is_team &&
        ($estimate->bill_status == 'new' || $estimate->bill_status == 'revised')): ?>
        <!--estimate not viewed-->
        <?php if($estimate->bill_viewed_by_client == 'no'): ?>
        <span class="label label-icons label-icons-default" data-toggle="tooltip" data-placement="top"
            title="<?php echo app('translator')->get('lang.client_has_not_opened'); ?>"><i class="sl-icon-eye"></i></span>
        <?php endif; ?>
        <!--estimate viewed-->
        <?php if($estimate->bill_viewed_by_client == 'yes'): ?>
        <span class="label label-icons label-icons-info" data-toggle="tooltip" data-placement="top"
            title="<?php echo app('translator')->get('lang.client_has_opened'); ?>"><i class="sl-icon-eye"></i></span>
        <?php endif; ?>
        <?php endif; ?>
    </td>
    <?php if(config('visibility.estimates_col_action')): ?>
    <td class="estimates_col_action actions_column" id="estimates_col_action_<?php echo e($estimate->bill_estimateid); ?>">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--delete-->
            <?php if(config('visibility.action_buttons_delete')): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>"
                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                data-url="<?php echo e(url('/')); ?>/estimates/<?php echo e($estimate->bill_estimateid); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <?php endif; ?>
            <!--edit-->
            <?php if(config('visibility.action_buttons_edit')): ?>
            <a href="/estimates/<?php echo e($estimate->bill_estimateid); ?>/edit-estimate" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-info btn-circle btn-sm">
                <i class="sl-icon-note"></i>
            </a>
            <?php endif; ?>
            <a href="/estimates/<?php echo e($estimate->bill_estimateid); ?>" title="<?php echo e(cleanLang(__('lang.view'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-info btn-circle btn-sm">
                <i class="ti-new-window"></i>
            </a>
        </span>
        <!--action button-->

        <!--more button (team)-->
        <?php if(config('visibility.action_buttons_edit') == 'show'): ?>
        <span class="list-table-action dropdown  font-size-inherit">
            <button type="button" id="listTableAction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                title="<?php echo e(cleanLang(__('lang.more'))); ?>" title="<?php echo e(cleanLang(__('lang.more'))); ?>"
                class="data-toggle-tooltip data-toggle-tooltip btn btn-outline-default-light btn-circle btn-sm">
                <i class="ti-more"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="listTableAction">

                <!--estimate url-->
                <a class="dropdown-item" href="<?php echo e(url('/estimates/view/'.$estimate->bill_uniqueid.'?action=preview')); ?>"
                    target="_blank"><?php echo app('translator')->get('lang.estimate_url'); ?></a>

                <!--actions button - email client -->
                <a class="dropdown-item confirm-action-info" href="javascript:void(0)"
                    data-confirm-title="<?php echo e(cleanLang(__('lang.email_to_client'))); ?>"
                    data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>"
                    data-url="<?php echo e(url('/estimates')); ?>/<?php echo e($estimate->bill_estimateid); ?>/resend?ref=list">
                    <?php echo e(cleanLang(__('lang.email_to_client'))); ?></a>


                <!--actions button - change category-->
                <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form"
                    href="javascript:void(0)" data-toggle="modal" data-target="#actionsModal"
                    data-modal-title="<?php echo e(cleanLang(__('lang.change_status'))); ?>"
                    data-url="<?php echo e(urlResource('/estimates/'.$estimate->bill_estimateid.'/change-status')); ?>"
                    data-action-url="<?php echo e(urlResource('/estimates/'.$estimate->bill_estimateid.'/change-status')); ?>"
                    data-loading-target="actionsModalBody" data-action-method="POST">
                    <?php echo e(cleanLang(__('lang.change_status'))); ?></a>

                <!--actions button - change category-->
                <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form"
                    href="javascript:void(0)" data-toggle="modal" data-target="#actionsModal"
                    data-modal-title="<?php echo e(cleanLang(__('lang.change_category'))); ?>"
                    data-url="<?php echo e(url('/estimates/change-category')); ?>"
                    data-action-url="<?php echo e(urlResource('/estimates/change-category?id='.$estimate->bill_estimateid)); ?>"
                    data-loading-target="actionsModalBody" data-action-method="POST">
                    <?php echo e(cleanLang(__('lang.change_category'))); ?></a>


                <!--clone-->
                <a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form edit-add-modal-button"
                    href="javascript:void(0)" data-toggle="modal" data-target="#commonModal"
                    data-modal-title="<?php echo e(cleanLang(__('lang.clone_estimate'))); ?>"
                    data-url="<?php echo e(url('/estimates/'.$estimate->bill_estimateid.'/clone')); ?>"
                    data-action-url="<?php echo e(url('/estimates/'.$estimate->bill_estimateid.'/clone')); ?>"
                    data-loading-target="actionsModalBody" data-action-method="POST">
                    <?php echo app('translator')->get('lang.clone_estimate'); ?>
                </a>

                <!--convert to invoice-->
                <a class="dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                    href="javascript:void(0)" data-toggle="modal" data-target="#commonModal"
                    data-modal-title="<?php echo e(cleanLang(__('lang.convert_to_invoice'))); ?>"
                    data-url="<?php echo e(urlResource('/estimates/'.$estimate->bill_estimateid.'/convert-to-invoice')); ?>"
                    data-action-url="<?php echo e(urlResource('/estimates/'.$estimate->bill_estimateid.'/convert-to-invoice')); ?>"
                    data-loading-target="commonModalBody" data-action-method="POST">
                    <?php echo e(cleanLang(__('lang.convert_to_invoice'))); ?></a>

                <!--automation-->
                <a href="javascript:void(0)"
                    class="dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                    data-toggle="modal" data-target="#commonModal"
                    data-url="<?php echo e(urlResource('/estimates/'.$estimate->bill_estimateid.'/edit-automation?ref=list')); ?>"
                    data-loading-target="commonModalBody" data-modal-title="<?php echo app('translator')->get('lang.estimate_automation'); ?>"
                    data-action-url="<?php echo e(urlResource('/estimates/'.$estimate->bill_estimateid.'/edit-automation?ref=list')); ?>"
                    data-action-method="POST" data-action-ajax-loading-target="commonModalBody"><?php echo app('translator')->get('lang.automation'); ?>
                </a>
            </div>
        </span>
        <?php endif; ?>
        <!--more button-->

    </td>
    <?php endif; ?>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/estimates/components/table/ajax.blade.php ENDPATH**/ ?>