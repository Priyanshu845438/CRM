<!--CRUMBS CONTAINER (RIGHT)-->
<div class="col-md-12  col-lg-6 align-self-center text-right parent-page-actions p-b-9"
    id="list-page-actions-container">
    <div id="list-page-actions">

        <!--edit project-->
        <?php if(config('visibility.edit_project_button')): ?>
        <span class="dropdown">
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit_template'))); ?>" class="data-toggle-tooltip list-actions-button btn btn-page-actions waves-effect waves-dark 
                actions-modal-button js-ajax-ux-request reset-target-modal-form edit-add-modal-button"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(urlResource('/templates/projects/'.$project->project_id.'/edit')); ?>" data-loading-target="commonModalBody"
                data-modal-title="<?php echo e(cleanLang(__('lang.edit_project_template'))); ?>" data-action-url="<?php echo e(urlResource('/templates/projects/'.$project->project_id).'?ref=page'); ?>"
                data-action-method="PUT" data-action-ajax-class="js-ajax-ux-request"
                data-action-ajax-loading-target="projects-td-container">
                <i class="sl-icon-note"></i>
            </button>
        </span>
        <?php endif; ?>


        <!--delete project-->
        <?php if(config('visibility.delete_project_button')): ?>
        <!--delete-->
        <button type="button" data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.delete_project'))); ?>"
            class="list-actions-button btn btn-page-actions waves-effect waves-dark confirm-action-danger"
            data-confirm-title="<?php echo e(cleanLang(__('lang.delete_template'))); ?>"
            data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
            data-url="<?php echo e(url('/templates/projects/'.$project->project_id.'?source=page')); ?>"><i
                class="sl-icon-trash"></i></button>
        <?php endif; ?>
    </div>
</div>
<!-- action buttons --><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/templates/project/components/misc/actions.blade.php ENDPATH**/ ?>