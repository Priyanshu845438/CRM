<?php $__currentLoopData = $taxrates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="taxrate_<?php echo e($taxrate->taxrate_id); ?>">
    <td class="taxrates_col_name">
        <?php echo e($taxrate->taxrate_name); ?>


        <?php if($taxrate->taxrate_type == 'system'): ?>
        <span class="sl-icon-star text-warning p-l-5" data-toggle="tooltip"
            title="<?php echo e(cleanLang(__('lang.system_default'))); ?>"></span>
        <?php endif; ?>
    </td>
    <td class="taxrates_col_value">
        <?php echo e($taxrate->taxrate_value); ?>%
    </td>
    <td class="taxrates_col_created_by">
        <img src="<?php echo e(getUsersAvatar($taxrate->avatar_directory, $taxrate->avatar_filename, $taxrate->taxrate_creatorid)); ?>"
            alt="user" class="img-circle avatar-xsmall">
        <?php echo e(checkUsersName($taxrate->first_name, $taxrate->taxrate_creatorid)); ?>

    </td>
    <td class="taxrates_col_value">
        <?php if($taxrate->taxrate_status == 'enabled'): ?>
        <span class="label label-outline-info"><?php echo app('translator')->get('lang.enabled'); ?></span>
        <?php else: ?>
        <span class="label label-outline-default"><?php echo app('translator')->get('lang.disabled'); ?></span>
        <?php endif; ?>
    </td>
    <td class="taxrates_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(url('/settings/taxrates/'.$taxrate->taxrate_id.'/edit')); ?>"
                data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.tax_rates'))); ?>"
                data-action-url="<?php echo e(url('/settings/taxrates/'.$taxrate->taxrate_id)); ?>" data-action-method="PUT"
                data-action-ajax-class="js-ajax-ux-request" data-action-ajax-loading-target="taxrates-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <?php if($taxrate->taxrate_type == 'user'): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>"
                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                data-url="<?php echo e(url('/')); ?>/settings/taxrates/<?php echo e($taxrate->taxrate_id); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <?php else: ?>
            <!--optionally show disabled button?-->
            <span class="btn btn-outline-default btn-circle btn-sm disabled <?php echo e(runtimePlaceholdeActionsButtons()); ?>"
                data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.actions_not_available'))); ?>"><i
                    class="sl-icon-trash"></i></span>
            <?php endif; ?>
        </span>
        <!--action button-->
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/taxrates/table/ajax.blade.php ENDPATH**/ ?>