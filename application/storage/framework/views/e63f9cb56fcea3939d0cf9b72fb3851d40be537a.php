<?php $__currentLoopData = $folders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $folder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="folder_<?php echo e($folder->filefolder_id); ?>">

    <!--filefolder_name-->
    <td class="col_filefolder_name">
        <?php echo e($folder->filefolder_name); ?>

        <?php if($folder->filefolder_default == 'yes'): ?>
        <span class="sl-icon-star text-warning p-l-5" data-toggle="tooltip"
            title="<?php echo e(cleanLang(__('lang.system_default'))); ?>"></span>
        <?php endif; ?>
    </td>

    <!--filefolder_created-->
    <td class="col_filefolder_created">
        <?php echo e(runtimeDate($folder->filefolder_created)); ?>

    </td>

    <!--filefolder_creatorid-->
    <td class="col_filefolder_creatorid">
        <img src="<?php echo e(getUsersAvatar($folder->avatar_directory, $folder->avatar_filename, $folder->filefolder_creatorid)); ?>"
            alt="user" class="img-circle avatar-xsmall">
        <?php echo e(checkUsersName($folder->first_name, $folder->filefolder_creatorid)); ?>

    </td>

    <td class="folders_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(url('/settings/files/defaultfolders/'.$folder->filefolder_id.'/edit')); ?>"
                data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.edit_folder'))); ?>"
                data-action-url="<?php echo e(url('/settings/files/defaultfolders/'.$folder->filefolder_id)); ?>" data-action-method="PUT"
                data-action-ajax-class="js-ajax-ux-request" data-action-ajax-loading-target="folders-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <?php if($folder->filefolder_default == 'no'): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>"
                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                data-url="<?php echo e(url('/settings/files/defaultfolders/'.$folder->filefolder_id)); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <?php else: ?>
            <!--optionally show disabled button?-->
            <span class="btn btn-outline-default btn-circle btn-sm disabled <?php echo e(runtimePlaceholdeActionsButtons()); ?>" data-toggle="tooltip"
                title="<?php echo e(cleanLang(__('lang.actions_not_available'))); ?>"><i class="sl-icon-trash"></i></span>
            <?php endif; ?>
        </span>
        <!--action button-->
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/files/table/ajax.blade.php ENDPATH**/ ?>