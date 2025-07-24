<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="template_<?php echo e($template->contract_template_id); ?>">

    <!--title-->
    <td class="col_contract_template_title">
        <a href="javascript:void(0);" class="edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
            data-toggle="modal" data-target="#commonModal"
            data-url="<?php echo e(urlResource('/templates/contracts/'.$template->contract_template_id.'/edit')); ?>"
            data-loading-target="commonModalBody" data-modal-title="<?php echo app('translator')->get('lang.edit_item'); ?>"
            data-action-url="<?php echo e(urlResource('/templates/contracts/'.$template->contract_template_id)); ?>"
            data-action-method="PUT" data-action-ajax-class="js-ajax-ux-request" data-modal-size="modal-xxl"
            data-action-ajax-loading-target="contracts-td-container"><?php echo e(str_limit($template->contract_template_title ?? '---', 80)); ?></a>
    </td>

    <!--contract_template_created-->
    <td class="col_contract_template_created">
        <?php echo e(runtimeDate($template->contract_template_created)); ?>

    </td>

    <!--created by-->
    <td class="col_created_by">
        <img src="<?php echo e(getUsersAvatar($template->avatar_directory, $template->avatar_filename, $template->contract_template_creatorid)); ?>"
            alt="user" class="img-circle avatar-xsmall">
        <?php echo e(checkUsersName($template->first_name, $template->contract_template_creatorid)); ?>

    </td>


    <!--actions-->
    <td class="col_contracts_actions actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--delete-->
            <button type="button" title="<?php echo app('translator')->get('lang.delete'); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo app('translator')->get('lang.delete_item'); ?>" data-confirm-text="<?php echo app('translator')->get('lang.are_you_sure'); ?>"
                data-ajax-type="DELETE" data-url="<?php echo e(url('/templates/contracts/'.$template->contract_template_id)); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <!--edit-->
            <button type="button" title="<?php echo app('translator')->get('lang.edit'); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(urlResource('/templates/contracts/'.$template->contract_template_id.'/edit')); ?>"
                data-loading-target="commonModalBody" data-modal-title="<?php echo app('translator')->get('lang.edit_template'); ?>"
                data-action-url="<?php echo e(urlResource('/templates/contracts/'.$template->contract_template_id)); ?>"
                data-action-method="PUT" data-action-ajax-class="js-ajax-ux-request" data-modal-size="modal-xxl"
                data-action-ajax-loading-target="contracts-td-container">
                <i class="sl-icon-note"></i>
            </button>
        </span>
        <!--action button-->
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/templates/contracts/components/table/ajax.blade.php ENDPATH**/ ?>