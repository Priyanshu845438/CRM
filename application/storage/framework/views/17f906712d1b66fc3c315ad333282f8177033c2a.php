<?php $__currentLoopData = $milestones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $milestone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="milestone_<?php echo e($milestone->milestone_id); ?>">
    <td class="milestones_col_name">
        <?php if(config('visibility.milestone_actions')): ?>
        <span class="mdi mdi-drag-vertical cursor-pointer"></span>
        <?php endif; ?>
        <a class="js-dynamic-url js-ajax-ux-request" data-loading-target="embed-content-container"
            data-dynamic-url="<?php echo e(url('/projects')); ?>/<?php echo e($milestone->milestone_projectid); ?>/tasks?source=ext&taskresource_type=project&taskresource_id=<?php echo e($milestone->milestone_projectid); ?>&filter_task_milestoneid=<?php echo e($milestone->milestone_id); ?>"
            data-url="<?php echo e(url('/tasks')); ?>?source=ext&taskresource_type=project&taskresource_id=<?php echo e($milestone->milestone_projectid); ?>&filter_task_milestoneid=<?php echo e($milestone->milestone_id); ?>"
            href="#projects_ajaxtab"><?php echo e(runtimeLang($milestone->milestone_title, 'task_milestone')); ?></a>

        <?php if($milestone->milestone_type == 'uncategorised'): ?>
        <span class="sl-icon-star text-warning p-l-5" data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.default_category'))); ?>"></span>
        <?php endif; ?>
        <!--sorting data-->
        <?php if(config('visibility.milestone_actions')): ?>
        <input type="hidden" name="sort-milestones[<?php echo e($milestone->milestone_id); ?>]"
            value="<?php echo e($milestone->milestone_id); ?>">
        <?php endif; ?>
    </td>
    <td class="milestones_col_tasks">
        <?php echo e($milestone->milestone_count_tasks_all); ?>

    </td>
    <td class="milestones_col_tasks_pending">
        <?php echo e($milestone->milestone_count_tasks_pending); ?>

    </td>
    <td class="milestones_col_tasks_completed">
        <?php echo e($milestone->milestone_count_tasks_completed); ?>

    </td>
    <td class="milestone_col_color"><span class="bg-<?php echo e($milestone->milestone_color); ?> fx-settimgs-milestones-color">&nbsp;</span>

    <?php if(config('visibility.milestone_actions')): ?>
    <td class="milestones_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <?php if($milestone->milestone_type == 'categorised'): ?>
            <!---delete milestone with confirm checkbox-->
            <span id="milestone_form_<?php echo e($milestone->milestone_id); ?>">
                <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                    class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                    id="foobar" data-confirm-title="<?php echo e(cleanLang(__('lang.delete_milestone'))); ?>"
                    data-confirm-text="
                            <input type='checkbox' id='confirm_action_<?php echo e($milestone->milestone_id); ?>' 
                                   class='filled-in chk-col-light-blue confirm_action_checkbox' 
                                   data-field-id='delete_milestone_tasks_<?php echo e($milestone->milestone_id); ?>'>
                            <label for='confirm_action_<?php echo e($milestone->milestone_id); ?>'><?php echo e(cleanLang(__('lang.delete_all_tasks'))); ?></label>" data-ajax-type="DELETE" data-type="form"
                    data-form-id="milestone_form_<?php echo e($milestone->milestone_id); ?>"
                    data-url="<?php echo e(url('/')); ?>/milestones/<?php echo e($milestone->milestone_id); ?>?project_id=<?php echo e($milestone->milestone_projectid); ?>">
                    <i class="sl-icon-trash"></i>
                </button>
                <input type="hidden" class="confirm_hidden_fields" name="delete_milestone_tasks"
                    id="delete_milestone_tasks_<?php echo e($milestone->milestone_id); ?>">
            </span>
            <!---/#delete milestone with confirm checkbox-->
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(urlResource('/milestones/'.$milestone->milestone_id.'/edit')); ?>"
                data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.edit_milestone'))); ?>"
                data-action-url="<?php echo e(urlResource('/milestones/'.$milestone->milestone_id.'?ref=list')); ?>"
                data-action-method="PUT" data-action-ajax-class=""
                data-action-ajax-loading-target="milestones-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <?php else: ?>
            <!--optionally show disabled button?-->
            <span class="btn btn-outline-default btn-circle btn-sm disabled <?php echo e(runtimePlaceholdeActionsButtons()); ?>"
                data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.actions_not_available'))); ?>"><i class="sl-icon-trash"></i></span>
            <span class="btn btn-outline-default btn-circle btn-sm disabled <?php echo e(runtimePlaceholdeActionsButtons()); ?>"
                data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.actions_not_available'))); ?>"><i class="sl-icon-note"></i></span>
            <?php endif; ?>
        </span>
        <!--action button-->
    </td>
    <?php endif; ?>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/milestones/components/table/ajax.blade.php ENDPATH**/ ?>