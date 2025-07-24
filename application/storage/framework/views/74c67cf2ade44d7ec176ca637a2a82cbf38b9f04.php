<div class="table-responsive" id="knowledgebase-categories-table">
    <?php if(@count($categories ?? []) > 0): ?>
    <table id="knowledgebase-categories" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10"
        data-type="form" data-form-id="knowledgebase-categories" data-ajax-type="post"
        data-url="<?php echo e(url('settings/knowledgebase/update-positions')); ?>">
        <thead>
            <tr>
                <th class="category_col_name"><?php echo e(cleanLang(__('lang.name'))); ?></th>
                <th class="category_col_type"><?php echo app('translator')->get('lang.type'); ?></th>
                <th class="category_col_articles"><?php echo e(cleanLang(__('lang.articles'))); ?></th>
                <th class="category_col_visible_to"><?php echo e(cleanLang(__('lang.visible_to'))); ?></th>
                <th class="category_col_created_by"><?php echo e(cleanLang(__('lang.created_by'))); ?></th>
                <th class="category_col_action"><a href="javascript:void(0)"><?php echo e(cleanLang(__('lang.action'))); ?></a></th>
            </tr>
        </thead>
        <tbody id="categories-td-container">
            <!--ajax content here-->
            <?php echo $__env->make('pages.settings.sections.knowledgebase.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--ajax content here-->
        </tbody>
    </table>
    <?php endif; ?>
    <?php if(@count($categories ?? []) == 0): ?>
    <!--nothing found-->
    <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--nothing found-->
    <?php endif; ?>

    <?php if(config('system.settings_type') == 'standalone'): ?>
    <!--[standalone] - settings documentation help-->
    <div class="m-t-40">
        <a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
                class="ti-info-alt"></i>
            <?php echo e(cleanLang(__('lang.help_documentation'))); ?></a>
    </div>
    <?php endif; ?>

</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/knowledgebase/table/table.blade.php ENDPATH**/ ?>