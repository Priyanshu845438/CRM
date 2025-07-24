<div class="card count-<?php echo e(@count($categories ?? [])); ?>" id="categories-table-wrapper"
    data-payload="<?php echo e(request('filter_category_type')); ?>">
    <div class="card-body">
        <div class="table-responsive">
            <?php if(@count($categories ?? []) > 0): ?>
            <table id="demo-foo-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
                <thead>
                    <tr>
                        <th class="categories_col_name"><?php echo e(cleanLang(__('lang.name'))); ?></th>
                        <th class="categories_col_created_by"><?php echo e(cleanLang(__('lang.created_by'))); ?></th>
                        <th class="categories_col_date"><?php echo e(cleanLang(__('lang.date_created'))); ?></th>
                        <th class="categories_col_items"><?php echo e(cleanLang(__('lang.items'))); ?></th>
                        <th class="categories_col_status"><?php echo e(cleanLang(__('lang.status'))); ?></th>
                        <?php if(request('filter_category_type')=='project'): ?>
                        <th class="categories_col_users"><?php echo e(cleanLang(__('lang.team'))); ?></th>
                        <?php endif; ?>
                        <th class="categories_col_action"><a
                                href="javascript:void(0)"><?php echo e(cleanLang(__('lang.action'))); ?></a></th>
                    </tr>
                </thead>
                <tbody id="categories-td-container">
                    <!--ajax content here-->
                    <?php echo $__env->make('pages.categories.components.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--ajax content here-->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="20">
                            <!--load more button-->
                            <?php echo $__env->make('misc.load-more-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!--load more button-->
                        </td>
                    </tr>
                </tfoot>
            </table>
            <?php endif; ?>
            <?php if(@count($categories ?? []) == 0): ?>
            <!--nothing found-->
            <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--nothing found-->
            <?php endif; ?>

            <?php if(config('system.settings_type') == 'standalone'): ?>
            <!--[standalone] - settings documentation help-->
            <div>
                <a href="https://growcrm.io/documentation" target="_blank"
                    class="btn btn-sm btn-info help-documentation"><i class="ti-info-alt"></i>
                    <?php echo e(cleanLang(__('lang.help_documentation'))); ?></a>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/categories/components/table/table.blade.php ENDPATH**/ ?>