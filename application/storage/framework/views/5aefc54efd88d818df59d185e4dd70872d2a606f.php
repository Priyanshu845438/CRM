<!--each checklist-->
<?php $__currentLoopData = $checklists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checklist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="checklist-item clearfix" id="lead_checklist_container_<?php echo e($checklist->checklist_id); ?>"
    data-id="<?php echo e($checklist->checklist_id); ?>">
    <input type="checkbox" class="filled-in chk-col-light-blue js-ajax-ux-request-default" name="card_checklist"
        data-url="<?php echo e(urlResource('/leads/toggle-checklist-status/'.$checklist->checklist_id)); ?>" data-ajax-type="post"
        data-type="form" data-form-id="lead_checklist_container_<?php echo e($checklist->checklist_id); ?>" data-notifications="disabled"
        id="lead_checklist_<?php echo e($checklist->checklist_id); ?>" 
        <?php echo e(runtimeChecklistCheckbox($checklist->permission_edit_delete_checklist)); ?>

        <?php echo e(runtimePrechecked($checklist->checklist_status)); ?>>
    <label class="checklist-label" for="lead_checklist_<?php echo e($checklist->checklist_id); ?>"></label>
    <span class="checklist-text <?php echo e(runtimePermissions('lead-edit-checklist', $checklist->permission_edit_delete_checklist)); ?>" data-toggle="edit" data-id="<?php echo e($checklist->checklist_id); ?>"
        data-action-url="<?php echo e(url('/leads/update-checklist/'.$checklist->checklist_id)); ?>"><?php echo e($checklist->checklist_text); ?></span>
    <!--delete action-->
    <?php if($checklist->permission_edit_delete_checklist): ?>
    <a href="javascript:void(0)" class="x-action-delete checklist-item-delete hidden js-delete-ux js-ajax-ux-request"
        data-ajax-type="DELETE" data-parent-container="lead_checklist_container_<?php echo e($checklist->checklist_id); ?>"
        data-progress-bar="hidden" data-url="<?php echo e(url('/leads/delete-checklist/'.$checklist->checklist_id)); ?>"><i
            class="mdi mdi-delete text-danger"></i></a>
   <?php endif; ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/lead/components/checklist.blade.php ENDPATH**/ ?>