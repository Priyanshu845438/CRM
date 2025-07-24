
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form">

    <div class="form-group row">
        <label for="example-month-input"
            class="col-12 col-form-label text-left"><?php echo e(cleanLang(__('lang.order_articles_by'))); ?></label>
        <div class="col-12">
            <select class="select2-basic form-control form-control-sm" id="settings_knowledgebase_article_ordering"
                name="settings_knowledgebase_article_ordering">
                <option value="name-asc"
                    <?php echo e(runtimePreselected('name-asc', $settings->settings_knowledgebase_article_ordering ?? '')); ?>>
                    <?php echo e(cleanLang(__('lang.article_title'))); ?> - (<?php echo e(cleanLang(__('lang.ascending_order'))); ?>)</option>
                <option value="name-desc"
                    <?php echo e(runtimePreselected('name-desc', $settings->settings_knowledgebase_article_ordering ?? '')); ?>>
                    <?php echo e(cleanLang(__('lang.article_title'))); ?> - (<?php echo e(cleanLang(__('lang.descending_order'))); ?>)</option>
                <option value="date-asc"
                    <?php echo e(runtimePreselected('date-asc', $settings->settings_knowledgebase_article_ordering ?? '')); ?>>
                    <?php echo e(cleanLang(__('lang.date_added'))); ?> - (<?php echo e(cleanLang(__('lang.ascending_order'))); ?>)</option>
                <option value="date-desc"
                    <?php echo e(runtimePreselected('date-desc', $settings->settings_knowledgebase_article_ordering ?? '')); ?>>
                    <?php echo e(cleanLang(__('lang.date_added'))); ?> - (<?php echo e(cleanLang(__('lang.descending_order'))); ?>)</option>
            </select>
        </div>
    </div>

    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton"
            class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request"
            data-url="/settings/knowledgebase/settings" data-loading-target="" data-ajax-type="PUT" data-type="form"
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
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/knowledgebase/page.blade.php ENDPATH**/ ?>