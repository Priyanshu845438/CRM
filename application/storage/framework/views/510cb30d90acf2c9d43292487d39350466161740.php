<?php $__currentLoopData = $milestones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $milestone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="milestone_<?php echo e($milestone->milestonecategory_id); ?>">
    <td class="milestones_col_name">
        <span class="mdi mdi-drag-vertical cursor-pointer"></span>
        <?php echo e(runtimeLang($milestone->milestonecategory_title)); ?>

        <!--sorting data-->
        <input type="hidden" name="sort-milestones[<?php echo e($milestone->milestonecategory_id); ?>]"
            value="<?php echo e($milestone->milestonecategory_id); ?>">
    </td>
    <td class="milestones_col_date">
        <?php echo e(runtimeDate($milestone->milestonecategory_created)); ?>

    </td>
    <td class="milestone_col_created_by">
        <img src="<?php echo e(getUsersAvatar($milestone->avatar_directory, $milestone->avatar_filename, $milestone->milestonecategory_creatorid)); ?>" alt="user"
            class="img-circle avatar-xsmall">
            <?php echo e(checkUsersName($milestone->first_name, $milestone->milestonecategory_creatorid)); ?>

    </td>
    <td class="milestone_col_color"><span class="bg-<?php echo e($milestone->milestonecategory_color); ?> fx-settimgs-milestones-color">&nbsp;</span>
    <td class="milestone_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-tooltip  btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(url('/settings/milestones/'.$milestone->milestonecategory_id.'/edit')); ?>"
                data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.edit_milestone'))); ?>"
                data-action-url="<?php echo e(url('/settings/milestones/'.$milestone->milestonecategory_id)); ?>"
                data-action-method="PUT" data-action-ajax-class=""
                data-action-ajax-loading-target="milestone-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_milestone'))); ?>" data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>"
                data-ajax-type="DELETE"
                data-url="<?php echo e(url('/')); ?>/settings/milestones/<?php echo e($milestone->milestonecategory_id); ?>">
                <i class="sl-icon-trash"></i>
            </button>
        </span>
        <!--action button-->
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/milestones/table/ajax.blade.php ENDPATH**/ ?>