<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="projects_<?php echo e($project->project_id); ?>">
    <td class="projects_col_title">
        <a href="<?php echo e(url('templates/projects/'.$project->project_id)); ?>"><?php echo e(str_limit($project->project_title ??'---', 30)); ?></a>
    </td>
    <td class="projects_col_date">
        <?php echo e(runtimeDate($project->project_created)); ?>

    </td>
    <td class="projects_col_category">
        <?php echo e($project->category_name); ?>

    </td>
    <td class="projects_col_createby">
        <img src="<?php echo e(getUsersAvatar($project->avatar_directory, $project->avatar_filename)); ?>" alt="user"
        class="img-circle avatar-xsmall"> <?php echo e(str_limit($project->first_name ?? runtimeUnkownUser(), 8)); ?>

    </td>
    <td class="projects_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--delete-->
            <?php if(auth()->user()->role->role_templates_projects > 2): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>" data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>"
                data-ajax-type="DELETE" data-url="<?php echo e(url('/')); ?>/templates/projects/<?php echo e($project->project_id); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <?php endif; ?>
            <!--edit-->
            <?php if(auth()->user()->role->role_templates_projects > 1): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(urlResource('/templates/projects/'.$project->project_id.'/edit')); ?>" data-loading-target="commonModalBody"
                data-modal-title="<?php echo e(cleanLang(__('lang.edit_project'))); ?>" data-action-url="<?php echo e(urlResource('/templates/projects/'.$project->project_id)); ?>"
                data-action-method="PUT" data-action-ajax-class="js-ajax-ux-request"
                data-action-ajax-loading-target="templates-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <?php endif; ?>
        </span>
        <!--action button-->
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/templates/projects/components/table/ajax.blade.php ENDPATH**/ ?>