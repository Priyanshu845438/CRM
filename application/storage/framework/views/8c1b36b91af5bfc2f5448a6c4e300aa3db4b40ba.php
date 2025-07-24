<?php $__currentLoopData = $webforms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="webform_<?php echo e($webform->webform_id); ?>">
    <td class="webform_col_date">
        <a
            href="<?php echo e(url('app/settings')); ?>/formbuilder/<?php echo e($webform->webform_id); ?>/build"><?php echo e($webform->webform_title); ?></a>
    </td>
    <td class="webform_col_name"><?php echo e(runtimeDate($webform->webform_created)); ?></td>
    <td class="webform_col_created_by">
        <img src="<?php echo e(getUsersAvatar($webform->avatar_directory, $webform->avatar_filename)); ?>" alt="user"
            class="img-circle avatar-xsmall">
        <?php echo e($webform->first_name); ?>

    </td>
    <td class="webforms_col_submitted">
        <?php echo e($webform->webform_submissions); ?>

    </td>
    <td class="webforms_col_assigned_users">
        <!--assigned users-->
        <?php if(count($webform->assigned ?? []) > 0): ?>
        <?php $__currentLoopData = $webform->assigned->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e($user->avatar); ?>" data-toggle="tooltip" title="<?php echo e($user->first_name); ?>" data-placement="top"
            alt="<?php echo e($user->first_name); ?>" class="img-circle avatar-xsmall">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <span>---</span>
        <?php endif; ?>
        <!--assigned users-->
        <!--more users-->
        <?php if(count($webform->assigned ?? []) > 3): ?>
        <?php $more_users_title = __('lang.assigned_users'); $users = $webform->assigned; ?>
        <?php echo $__env->make('misc.more-users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <!--more users-->
    </td>
    <td class="webform_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--edit-->
            <a title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm"
                href="<?php echo e(url('app/settings')); ?>/formbuilder/<?php echo e($webform->webform_id); ?>/build">
                <i class="sl-icon-note"></i>
            </a>
            <!--dynamic modal action-->
            <button type="button"
                class="data-toggle-action-tooltip actions-modal-button btn btn-outline-info btn-circle btn-sm ajax-request"
                title="<?php echo app('translator')->get('lang.assigned_users'); ?>" data-toggle="modal" data-target="#actionsModal"
                data-modal-title="<?php echo app('translator')->get('lang.assigned_users'); ?>"
                data-url="<?php echo e(url('settings/webforms/'.$webform->webform_id.'/assigned')); ?>"
                data-loading-target="actionsModalBody" data-action-method="POST">
                <i class="sl-icon-people"></i>
            </button>

            <!--delete-->
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>"
                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                data-url="<?php echo e(url('/settings')); ?>/webforms/<?php echo e($webform->webform_id); ?>">
                <i class="sl-icon-trash"></i>
            </button>
        </span>
        <!--action button-->
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/webforms/table/ajax.blade.php ENDPATH**/ ?>