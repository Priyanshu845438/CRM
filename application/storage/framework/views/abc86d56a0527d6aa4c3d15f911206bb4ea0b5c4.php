<div class="table-responsive" id="taxrates-table-wrapper">
    <?php if(@count($taxrates ?? []) > 0): ?>
    <table id="demo-taxrate-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
        <thead>
            <tr>
                <th class="taxrates_col_name"><?php echo e(cleanLang(__('lang.name'))); ?></th>
                <th class="taxrates_col_value"><?php echo e(cleanLang(__('lang.rate'))); ?></th>
                <th class="taxrates_col_created_by"><?php echo e(cleanLang(__('lang.created_by'))); ?></th>
                <th class="taxrates_col_status w-px-150"><?php echo e(cleanLang(__('lang.status'))); ?></th>
                <th class="taxrates_col_action w-px-100"><a
                        href="javascript:void(0)"><?php echo e(cleanLang(__('lang.action'))); ?></a></th>
            </tr>
        </thead>
        <tbody id="taxrates-td-container">
            <!--ajax content here-->
            <?php echo $__env->make('pages.settings.sections.taxrates.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--ajax content here-->
        </tbody>
        <ttaxratet>
            <tr>
                <td colspan="20">
                    <!--load more button-->
                    <?php echo $__env->make('misc.load-more-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--load more button-->
                </td>
            </tr>
        </ttaxratet>
    </table>
    <?php endif; ?>
    <?php if(@count($taxrates ?? []) == 0): ?>
    <!--nothing found-->
    <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--nothing found-->
    <?php endif; ?>


    <?php if(config('system.settings_type') == 'standalone'): ?>
    <!--[standalone] - settings documentation help-->
    <div>
        <a href="https://growcrm.io/documentation/tax-settings/" target="_blank"
            class="btn btn-sm btn-info help-documentation"><i class="ti-info-alt"></i>
            <?php echo e(cleanLang(__('lang.help_documentation'))); ?>

        </a>
    </div>
    <?php endif; ?>

</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/taxrates/table/table.blade.php ENDPATH**/ ?>