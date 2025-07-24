
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form>


    <!--show project categories in main menu-->
    <div class="form-group row">
        <label class="col-4 control-label col-form-label"><?php echo app('translator')->get('lang.projects_user_permission'); ?></label>
        <div class="col-3">
            <select class="select2-basic form-control form-control-sm select2-preselected"
                id="settings_projects_permissions_basis" name="settings_projects_permissions_basis"
                data-preselected="<?php echo e($settings->settings_projects_permissions_basis ?? ''); ?>">
                <option value="user_roles"><?php echo app('translator')->get('lang.role_based'); ?></option>
                <option value="category_based"><?php echo app('translator')->get('lang.category_based'); ?></option>
            </select>
        </div>
    </div>

    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label text-left"><?php echo e(cleanLang(__('lang.tasks_collaboration'))); ?></label>
        <div class="col-8 text-left p-t-5">
            <input type="checkbox" id="settings_projects_assignedperm_tasks_collaborate"
                name="settings_projects_assignedperm_tasks_collaborate" class="filled-in chk-col-light-blue"
                <?php echo e(runtimePrechecked($settings['settings_projects_assignedperm_tasks_collaborate'] ?? '')); ?>>
            <label for="settings_projects_assignedperm_tasks_collaborate"></label>
        </div>
    </div>
    <div class="alert alert-warning">
        <h5 class="text-warning"><i class="sl-icon-info"></i> <?php echo app('translator')->get('lang.warning'); ?></h5>
        <?php echo app('translator')->get('lang.changing_project_permissions_warning'); ?>
    </div>


    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton"
            class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request"
            data-url="/settings/projects/staff" data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable"><?php echo e(cleanLang(__('lang.save_changes'))); ?></button>
    </div>
</form>

<?php if(config('system.settings_type') == 'standalone'): ?>
<!--[standalone] - settings documentation help-->
<a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
        class="ti-info-alt"></i>
    <?php echo e(cleanLang(__('lang.help_documentation'))); ?>

</a>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/projects/staff-permissions.blade.php ENDPATH**/ ?>