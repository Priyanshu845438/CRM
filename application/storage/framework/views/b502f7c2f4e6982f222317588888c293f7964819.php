<div class="table-responsive" id="milestone-categories-table">
    <?php if(@count($milestones ?? []) > 0): ?>
    <table id="milestone-stages" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10"
        data-type="form" data-form-id="milestone-stages" data-ajax-type="post"
        data-url="<?php echo e(url('settings/milestones/update-positions')); ?>">
        <thead>
            <tr>
                <th class="milestones_col_name"><?php echo e(cleanLang(__('lang.name'))); ?></th>
                <th class="milestones_col_date"><?php echo e(cleanLang(__('lang.date_created'))); ?></th>
                <th class="milestones_col_created_by"><?php echo e(cleanLang(__('lang.created_by'))); ?></th>
                <th class="milestone_col_color"><?php echo e(cleanLang(__('lang.color'))); ?></th>
                <th class="milestones_col_action"><a href="javascript:void(0)"><?php echo e(cleanLang(__('lang.action'))); ?></a>
                </th>
            </tr>
        </thead>
        <tbody id="milestones-td-container">
            <!--ajax content here-->
            <?php echo $__env->make('pages.settings.sections.milestones.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--ajax content here-->
        </tbody>
    </table>
    <?php endif; ?>
    <?php if(@count($milestones ?? []) == 0): ?>
    <!--nothing found-->
    <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--nothing found-->
    <?php endif; ?>

    <?php if(config('system.settings_type') == 'standalone'): ?>
    <!--[standalone] - settings documentation help-->
    <div class="m-t-40">
        <a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
                class="ti-info-alt"></i>
            <?php echo e(cleanLang(__('lang.help_documentation'))); ?>

        </a>
    </div>
    <?php endif; ?>

</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/milestones/table/table.blade.php ENDPATH**/ ?>