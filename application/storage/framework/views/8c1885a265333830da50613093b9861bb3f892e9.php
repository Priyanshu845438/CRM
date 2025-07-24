<!--customer type selector-->
<?php if(config('modal.action') == 'create'): ?>
<div class="modal-selector">


    <!--preset client-->
    <?php if(config('modal.type') == 'preset-client'): ?>
    <div class="client-selector-container" id="client-existing-container">
        <!--clients projects-->
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo app('translator')->get('lang.project'); ?></label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm select2-preselected" id="doc_project_id"
                    name="doc_project_id" data-allow-clear="true">
                    <option></option>
                    <?php $__currentLoopData = config('client.projects'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($project->project_id); ?>"><?php echo e($project->project_title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <!--client id-->
        <input type="hidden" name="doc_client_id" value="<?php echo e(config('client.id')); ?>">
    </div>
    <?php else: ?>

    <!--select client-->
    <div class="client-selector-container" id="client-existing-container">
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label  required"><?php echo e(cleanLang(__('lang.client'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <!--select2 basic search-->
                <select name="doc_client_id" id="doc_client_id"
                    class="clients_and_projects_toggle form-control form-control-sm js-select2-basic-search-modal select2-hidden-accessible"
                    data-projects-dropdown="doc_project_id" data-feed-request-type="clients_projects"
                    data-ajax--url="<?php echo e(url('/')); ?>/feed/company_names">
                    <option></option>
                </select>
            </div>
        </div>
        <!--projects-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.project'))); ?></label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm dynamic_doc_project_id"
                    data-allow-clear="true" id="doc_project_id" name="doc_project_id" disabled>
                </select>
            </div>
        </div>
    </div>

    <?php endif; ?>


</div>
<?php endif; ?>

<!--template-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.template'); ?></label>
    <div class="col-sm-12 col-lg-9">
        <select class="select2-basic form-control form-control-sm" id="contract_template" name="contract_template">
            <option value="blank"><?php echo app('translator')->get('lang.none_blank'); ?></option>
            <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($template->contract_template_id); ?>"><?php echo e($template->contract_template_title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<div class="line"></div>

<!--contract_title-->
<div class="form-group row">
    <label
        class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.contract_title'); ?></label>
    <div class="col-sm-12 col-lg-9">
        <input type="text" class="form-control form-control-sm" id="doc_title" name="doc_title"
            value="<?php echo e($contract->doc_title ?? ''); ?>">
    </div>
</div>

<!--contract_start_date-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.start_date'); ?></label>
    <div class="col-sm-12 col-lg-9">
        <input type="text" class="form-control form-control-sm pickadate" autocomplete="off" name="doc_date_start"
            value="<?php echo e(runtimeDatepickerDate($contract->doc_date_start ?? '')); ?>">
        <input class="mysql-date" type="hidden" name="doc_date_start" id="doc_date_start"
            value="<?php echo e($contract->doc_date_start ?? ''); ?>">
    </div>
</div>

<!--contract_end_date-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo app('translator')->get('lang.end_date'); ?></label>
    <div class="col-sm-12 col-lg-9">
        <input type="text" class="form-control form-control-sm pickadate" autocomplete="off" name="doc_date_end"
            value="<?php echo e(runtimeDatepickerDate($contract->doc_date_end ?? '')); ?>">
        <input class="mysql-date" type="hidden" name="doc_date_end" id="doc_date_end"
            value="<?php echo e($contract->doc_date_end ?? ''); ?>">
    </div>
</div>

<!--doc_value-->
<div class="form-group row">
    <label class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo app('translator')->get('lang.value'); ?></label>
    <div class="col-sm-12 col-lg-9">
        <input type="number" class="form-control form-control-sm" id="doc_value" name="doc_value"
            value="<?php echo e($contract->doc_value ?? ''); ?>">
    </div>
</div>


<!--category-->
<div class="form-group row">
    <label
        class="col-sm-12 col-lg-3 text-left control-label col-form-label  required"><?php echo e(cleanLang(__('lang.category'))); ?>*</label>
    <div class="col-sm-12 col-lg-9">
        <select class="select2-basic form-control form-control-sm" id="doc_categoryid" name="doc_categoryid">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->category_id); ?>"
                <?php echo e(runtimePreselected($contract->doc_categoryid ?? '', $category->category_id)); ?>><?php echo e(runtimeLang($category->category_name)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>


<div class="line m-t-40"></div>

<!--redirect to project-->
<div class="form-group form-group-checkbox row">
    <div class="col-12 text-left p-t-5">
        <input type="checkbox" id="show_after_adding" name="show_after_adding" class="filled-in chk-col-light-blue"
            checked="checked">
        <label for="show_after_adding"><?php echo e(cleanLang(__('lang.show_contract_after_its_created'))); ?></label>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/contracts/components/modals/add-edit-inc.blade.php ENDPATH**/ ?>