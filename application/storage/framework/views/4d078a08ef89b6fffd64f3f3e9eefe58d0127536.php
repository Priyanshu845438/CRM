<div class="card count-<?php echo e(@count($milestones ?? [])); ?>" id="milestones-table-wrapper">
    <div class="card-body">
        <div class="table-responsive">
            <?php if(@count($milestones ?? []) > 0): ?>
            <table id="milestones-table" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10"
                data-type="form" data-form-id="milestones-table-wrapper" data-ajax-type="post"
                data-url="<?php echo e(url('milestones/update-positions')); ?>">

                <thead>
                    <tr>
                        <th class="milestones_col_name"><a class="js-ajax-ux-request js-list-sorting"
                                id="sort_milestone_title" href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/milestones?action=sort&orderby=milestone_title&sortorder=asc')); ?>"><?php echo e(cleanLang(__('lang.name'))); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a>
                        </th>
                        <th class="milestones_col_tasks w-20"><a class="js-ajax-ux-request js-list-sorting"
                                id="sort_total_tasks" href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/milestones?action=sort&orderby=total_tasks&sortorder=asc')); ?>"><?php echo e(cleanLang(__('lang.all_tasks'))); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                        <th class="milestones_col_tasks_pending w-20"><a class="js-ajax-ux-request js-list-sorting"
                                id="sort_pending_tasks" href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/milestones?action=sort&orderby=pending_tasks&sortorder=asc')); ?>"><?php echo e(cleanLang(__('lang.pending_tasks'))); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                        <th class="milestones_col_tasks_completed w-20"><a class="js-ajax-ux-request js-list-sorting"
                                id="sort_completed_tasks" href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/milestones?action=sort&orderby=completed_tasks&sortorder=asc')); ?>"><?php echo e(cleanLang(__('lang.completed_tasks'))); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                        <th class="milestones_col_color"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.color'); ?></a></th>
                        <?php if(config('visibility.milestone_actions')): ?>
                        <th class="milestones_col_action w-5"><a
                                href="javascript:void(0)"><?php echo e(cleanLang(__('lang.action'))); ?></a></th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody id="milestones-td-container">
                    <!--ajax content here-->
                    <?php echo $__env->make('pages.milestones.components.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php endif; ?> <?php if(@count($milestones ?? []) == 0): ?>
            <!--nothing found-->
            <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--nothing found-->
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/milestones/components/table/table.blade.php ENDPATH**/ ?>