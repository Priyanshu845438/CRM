
<?php $__env->startSection('settings-page'); ?>

<!--tabs menu-->
<?php echo $__env->make('pages.settings.sections.formbuilder.misc.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="webform-builder-wraper" class="p-t-40">


    <!--embed code-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label"><?php echo app('translator')->get('lang.embed_code'); ?></label>
        <div class="col-12">
            <textarea class="form-control form-control-sm" rows="2" id="embed"><?php echo e($embed_code); ?></textarea>
        </div>
    </div>

    <div class="alert alert-info m-b-40">
        <?php echo app('translator')->get('lang.embed_code_instructions'); ?>
    </div>

    <div class="alert alert-info m-b-40">
        <?php echo app('translator')->get('lang.embed_code_instructions_2'); ?>
    </div>
    
    <div class="alert alert-info m-b-40">
        <?php echo app('translator')->get('lang.embed_code_instructions_3'); ?>
    </div>

    <!--direct url code-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label"><?php echo app('translator')->get('lang.direct_form_link'); ?></label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" rows="5" id="embed" value="<?php echo e($direct_url); ?>">
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/formbuilder/embed/page.blade.php ENDPATH**/ ?>