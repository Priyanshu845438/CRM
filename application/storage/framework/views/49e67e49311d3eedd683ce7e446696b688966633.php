<div class="table-responsive">
    <?php if(@count($templates ?? []) > 0): ?>
    <table id="demo-webform-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
        <thead>
            <tr>
                <th class="templates_col_name"><?php echo app('translator')->get('lang.name'); ?></th>
                <th class="templates_col_date"><?php echo app('translator')->get('lang.date_created'); ?></th>
                <th class="templates_col_created_by"><?php echo app('translator')->get('lang.created_by'); ?></th>
                <th class="templates_col_action"><?php echo app('translator')->get('lang.actions'); ?></th>
            </tr>
        </thead>
        <tbody id="templates-td-container">
            <!--ajax content here-->
            <?php echo $__env->make('pages.settings.sections.webmailtemplates.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--ajax content here-->
        </tbody>
    </table>

    <?php if(config('system.settings_type') == 'standalone'): ?>
    <!--[standalone] - settings documentation help-->
    <div class="m-t-40">
        <a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
                class="ti-info-alt"></i>
            <?php echo e(cleanLang(__('lang.help_documentation'))); ?>

        </a>
    </div>
    <?php endif; ?>

    <?php endif; ?>
    <?php if(@count($templates ?? []) == 0): ?>
    <!--nothing found-->
    <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--nothing found-->
    <?php endif; ?>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/webmailtemplates/table/table.blade.php ENDPATH**/ ?>