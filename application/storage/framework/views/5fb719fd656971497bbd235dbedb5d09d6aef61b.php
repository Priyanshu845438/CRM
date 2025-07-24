
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form" id="settingsFormProjects">
    <!--form text tem-->
    <div class="form-group row">
        <label class="col-4 control-label col-form-label"><?php echo e(cleanLang(__('lang.default_hourly_rate'))); ?></label>
        <div class="col-3">
            <input type="number" class="form-control form-control-sm" id="settings_projects_default_hourly_rate"
                name="settings_projects_default_hourly_rate"
                value="<?php echo e($settings->settings_projects_default_hourly_rate ?? ''); ?>">
        </div>
    </div>

    <!--settings_projects_cover_images-->
    <div class="form-group row">
        <label class="col-4 control-label col-form-label"><?php echo app('translator')->get('lang.project_cover_images_feature'); ?></label>
        <div class="col-3">
            <select class="select2-basic form-control form-control-sm select2-preselected"
                id="settings_projects_cover_images" name="settings_projects_cover_images"
                data-preselected="<?php echo e($settings->settings_projects_cover_images ?? ''); ?>">
                <option value="enabled"><?php echo app('translator')->get('lang.enabled'); ?></option>
                <option value="disabled"><?php echo app('translator')->get('lang.disabled'); ?></option>
            </select>
        </div>
    </div>


    <!--show project categories in main menu-->
    <div class="form-group row">
        <label class="col-4 control-label col-form-label"><?php echo app('translator')->get('lang.show_project_categories_main_menu'); ?></label>
        <div class="col-3">
            <select class="select2-basic form-control form-control-sm select2-preselected"
                id="settings_projects_categories_main_menu" name="settings_projects_categories_main_menu"
                data-preselected="<?php echo e($settings->settings_projects_categories_main_menu ?? ''); ?>">
                <option value="yes"><?php echo app('translator')->get('lang.yes'); ?></option>
                <option value="no"><?php echo app('translator')->get('lang.no'); ?></option>
            </select>
        </div>
    </div>



    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton" class="btn btn-rounded-x btn-danger waves-effect text-left"
            data-url="/settings/projects/general" data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable"><?php echo e(cleanLang(__('lang.save_changes'))); ?></button>
    </div>


    <?php if(config('system.settings_type') == 'standalone'): ?>
    <!--[standalone] - settings documentation help-->
    <div>
        <a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
                class="ti-info-alt"></i>
            <?php echo e(cleanLang(__('lang.help_documentation'))); ?>

        </a>
    </div>
    <?php endif; ?>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/projects/general.blade.php ENDPATH**/ ?>