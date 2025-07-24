<?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr class="settings-each-email" id="email_<?php echo e($email->emailqueue_id); ?>">
    <td class="emails_col_emailqueue_created">
        <?php echo e(runtimeDate($email->emailqueue_created)); ?>

    </td>
    <td class="emails_col_emailqueue_to">
        <?php echo e($email->emailqueue_to); ?>

    </td>
    <td class="emails_col_emailqueue_subject">
        <?php echo e($email->emailqueue_subject); ?>

    </td>
    <td class="emails_col_emailqueue_status">
        <?php echo e(runtimeLang($email->emailqueue_status)); ?>

    </td>
    <td class="emails_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>"
                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                data-url="<?php echo e(url('settings/email/queue/'.$email->emailqueue_id)); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <!--view email-->
            <button type="button"
                class="btn btn-outline-success btn-circle btn-sm data-toggle-action-tooltip edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                title="<?php echo e(cleanLang(__('lang.view'))); ?>"
                data-toggle="modal" data-target="#commonModal"
                data-loading-target="commonModalBody" data-modal-title="<?php echo app('translator')->get('lang.to'); ?>: <?php echo e($email->emailqueue_to ?? '---'); ?>"
                data-action-type="" data-action-form-id=""
                data-footer-visibility="hidden"
                data-url="<?php echo e(url('settings/email/queue/'.$email->emailqueue_id)); ?>">
                <i class="ti-book"></i>
            </button>
        </span>
        <!--action button-->
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/email/queue/ajax.blade.php ENDPATH**/ ?>