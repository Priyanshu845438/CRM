
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form" id="settings-projects-automation">


    <!--settings2_projects_automation_default_status-->
    <div class="form-group row p-b-10">
        <label class="col-sm-12 text-left control-label col-form-label"><?php echo app('translator')->get('lang.project_automation_default'); ?> <span
                class="align-middle text-info font-16" data-toggle="tooltip"
                title="<?php echo app('translator')->get('lang.project_automation_default_info'); ?>" data-placement="top"><i
                    class="ti-info-alt"></i></span></label>
        <div class="col-sm-12">
            <select class="select2-basic form-control form-control-sm select2-preselected"
                id="automation_default_status" name="settings2_projects_automation_default_status"
                data-preselected="<?php echo e($settings->settings2_projects_automation_default_status ?? ''); ?>">
                <option></option>
                <option value="enabled"><?php echo app('translator')->get('lang.enabled'); ?></option>
                <option value="disabled"><?php echo app('translator')->get('lang.disabled'); ?></option>
            </select>
        </div>
    </div>


    <!--automation options container-->
    <div class="<?php echo e(projectAutomationVisibility($settings->settings2_projects_automation_default_status)); ?>"
        id="automation-options-container">

        <div class="line m-t-20 m-b-10"></div>

        <!--[automation option]-->
        <div class="alert alert-info m-b-20 m-t-25">
            <h6><?php echo app('translator')->get('lang.automation_option'); ?></h6> <?php echo app('translator')->get('lang.project_automation_info_1'); ?>: <span
                class="align-middle text-info font-16" data-toggle="tooltip"
                title="<?php echo app('translator')->get('lang.project_automation_info_2'); ?>" data-placement="top"><i class="ti-info-alt"></i></span>
        </div>

        <!--settings2_projects_automation_create_invoices-->
        <div class="form-group form-group-checkbox row m-b-20">
            <div class="col-12">
                <label
                    class="text-left control-label col-form-label p-r-3 required"><?php echo app('translator')->get('lang.automation_invoice_project'); ?></label>
                <span class="text-right p-l-5">
                    <input type="checkbox" id="settings2_projects_automation_create_invoices"
                        name="settings2_projects_automation_create_invoices" class="filled-in chk-col-light-blue"
                        <?php echo e(runtimePrechecked($settings->settings2_projects_automation_create_invoices ?? '')); ?>>
                    <label for="settings2_projects_automation_create_invoices" class="display-inline"></label>
                </span>
            </div>
        </div>

        <!--invoice creation options-->
        <div class="card-contrast-panel m-l-30 <?php echo e(projectAutomationVisibility($settings->settings2_projects_automation_create_invoices)); ?>"
            id="project_automation_create_invoices_settings">

            <h6 class="text-underlined m-b-16"><?php echo app('translator')->get('lang.invoice_creation_options'); ?></h6>

            <!--settings2_projects_automation_convert_estimates_to_invoices-->
            <div class="form-group form-group-checkbox row m-b-0">
                <label
                    class="col-sm-12 col-lg-4 col-form-label text-left"><?php echo app('translator')->get('lang.automation_generate_invoice_from_estimates'); ?></label>
                <div class="col-sm-12 col-lg-8 text-left p-t-5">
                    <input type="checkbox" id="settings2_projects_automation_convert_estimates_to_invoices"
                        <?php echo e(runtimePrechecked($settings->settings2_projects_automation_convert_estimates_to_invoices ?? '')); ?>

                        name="settings2_projects_automation_convert_estimates_to_invoices"
                        class="filled-in chk-col-light-blue">
                    <label class="p-l-30" for="settings2_projects_automation_convert_estimates_to_invoices"></label>
                </div>
            </div>


            <!--settings2_projects_automation_skip_draft_estimates-->
            <div class="<?php echo e(projectAutomationEstimateStatuses($settings->settings2_projects_automation_convert_estimates_to_invoices)); ?>"
                id="project_automation_create_invoices_options">
                <div class="form-group form-group-checkbox row p-l-100 m-b-0">
                    <label class="col-sm-12 col-lg-4 col-form-label text-left">-
                        <?php echo app('translator')->get('lang.skip_estimates_with_draft_status'); ?></label>
                    <div class="col-sm-12 col-lg-8 text-left p-t-5">
                        <input type="checkbox" id="settings2_projects_automation_skip_draft_estimates"
                            <?php echo e(runtimePrechecked($settings->settings2_projects_automation_skip_draft_estimates ?? '')); ?>

                            name="settings2_projects_automation_skip_draft_estimates"
                            class="filled-in chk-col-light-blue">
                        <label class="p-l-30" for="settings2_projects_automation_skip_draft_estimates"></label>
                    </div>
                </div>


                <!--settings2_projects_automation_skip_declined_estimates-->
                <div class="form-group form-group-checkbox row p-l-100">
                    <label class="col-sm-12 col-lg-4 col-form-label text-left">-
                        <?php echo app('translator')->get('lang.skip_estimates_with_declined_status'); ?></label>
                    <div class="col-sm-12 col-lg-8 text-left p-t-5">
                        <input type="checkbox" id="settings2_projects_automation_skip_declined_estimates"
                            <?php echo e(runtimePrechecked($settings->settings2_projects_automation_skip_declined_estimates ?? '')); ?>

                            name="settings2_projects_automation_skip_declined_estimates"
                            class="filled-in chk-col-light-blue">
                        <label class="p-l-30" for="settings2_projects_automation_skip_declined_estimates"></label>
                    </div>
                </div>
            </div>


            <!--settings2_projects_automation_invoice_unbilled_hours-->
            <!--TODO-->
            <?php if(config('visibility.foooo_bar')): ?>
            <div class="form-group form-group-checkbox row">
                <label
                    class="col-sm-12 col-lg-4 col-form-label text-left"><?php echo app('translator')->get('lang.automation_invoice_unbilled_hours'); ?></label>
                <div class="col-sm-12 col-lg-8 text-left p-t-5">
                    <input type="checkbox" id="settings2_projects_automation_invoice_unbilled_hours"
                        <?php echo e(runtimePrechecked($settings->settings2_projects_automation_invoice_unbilled_hours ?? '')); ?>

                        name="settings2_projects_automation_invoice_unbilled_hours"
                        class="filled-in chk-col-light-blue">
                    <label class="p-l-30" for="settings2_projects_automation_invoice_unbilled_hours"></label>
                </div>
            </div>
            <?php endif; ?>

            <!--TODO-->
            <?php if(config('visibility.foooo_bar')): ?>
            <div class="<?php echo e(projectAutomationHourlyVisibility($settings->settings2_projects_automation_invoice_unbilled_hours ?? '')); ?>"
                id="project_automation_invoice_hourly_rate_container">

                <div class="line"></div>

                <h6 class="text-underlined m-b-16"><?php echo app('translator')->get('lang.hourly_billing_settings'); ?></h6>

                <!--settings2_projects_automation_invoice_hourly_rate-->
                <div class="form-group row">
                    <label
                        class="col-sm-12 col-lg-4 text-left control-label col-form-label"><?php echo app('translator')->get('lang.default_hourly_rate'); ?></label>
                    <div class="col-sm-12 col-lg-4">
                        <input type="number" class="form-control form-control-sm"
                            id="settings2_projects_automation_invoice_hourly_rate"
                            name="settings2_projects_automation_invoice_hourly_rate"
                            value="<?php echo e($settings->settings2_projects_automation_invoice_hourly_rate ?? ''); ?>">
                    </div>
                </div>

                <!--settings2_projects_automation_invoice_hourly_tax_1-->
                <div class="form-group row">
                    <label
                        class="col-sm-12 col-lg-4 text-left control-label col-form-label"><?php echo app('translator')->get('lang.default_tax'); ?></label>
                    <div class="col-sm-12 col-lg-4">
                        <select class="select2-basic form-control form-control-sm select2-preselected"
                            id="settings2_projects_automation_invoice_hourly_tax_1"
                            name="settings2_projects_automation_invoice_hourly_tax_1"
                            data-preselected="<?php echo e($settings->settings2_projects_automation_invoice_hourly_tax_1 ?? ''); ?>">
                            <option></option>
                            <?php $__currentLoopData = $taxrates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($taxrate->taxrate_id); ?>"><?php echo e($taxrate->taxrate_name); ?> -
                                <?php echo e($taxrate->taxrate_value); ?>%</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

            </div>
            <?php endif; ?>

            <div class="line"></div>
            <h6 class="text-underlined m-b-16"><?php echo app('translator')->get('lang.invoice_creation_settings'); ?></h6>

            <!--automation_invoice_due_date-->
            <div class="form-group row">
                <label
                    class="col-sm-12 col-lg-4 text-left control-label col-form-label"><?php echo app('translator')->get('lang.automation_invoice_due_date'); ?></label>
                <div class="col-sm-12 col-lg-4">
                    <input type="number" class="form-control form-control-sm"
                        id="settings2_projects_automation_invoice_due_date"
                        name="settings2_projects_automation_invoice_due_date"
                        value="<?php echo e($settings->settings2_projects_automation_invoice_due_date ?? ''); ?>">
                </div>
            </div>

            <!--settings2_projects_automation_invoice_email_client-->
            <div class="form-group form-group-checkbox row">
                <label
                    class="col-sm-12 col-lg-4 col-form-label text-left"><?php echo app('translator')->get('lang.automation_email_invoices_to_client'); ?></label>
                <div class="col-sm-12 col-lg-8 text-left p-t-5">
                    <input type="checkbox" id="settings2_projects_automation_invoice_email_client"
                        <?php echo e(runtimePrechecked($settings->settings2_projects_automation_invoice_email_client ?? '')); ?>

                        name="settings2_projects_automation_invoice_email_client" class="filled-in chk-col-light-blue">
                    <label class="p-l-30" for="settings2_projects_automation_invoice_email_client"></label>
                </div>
            </div>


        </div>
    </div>


    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton" class="btn btn-rounded-x btn-danger waves-effect text-left"
            data-url="/settings/projects/automation" data-loading-target="" data-ajax-type="PUT" data-type="form"
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
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/projects/automation.blade.php ENDPATH**/ ?>