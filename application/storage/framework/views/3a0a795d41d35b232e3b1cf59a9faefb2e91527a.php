<div class="card count-<?php echo e(@count($canned_responses ?? [])); ?>" id="canned-table-wrapper">
    <div class="card-body">
        <div class="table-responsive">
            <?php if(@count($canned_responses ?? []) > 0): ?>
            <table id="canned-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
                <thead>
                    <tr>
                        <!--canned_title-->
                        <th class="col_canned_title"><a class="js-ajax-ux-request js-list-sorting"
                                id="sort_canned_title" href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/canned?action=sort&orderby=canned_title&sortorder=asc')); ?>"><?php echo app('translator')->get('lang.title'); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                        <!--canned_created-->
                        <th class="col_canned_created w-px-150"><a class="js-ajax-ux-request js-list-sorting"
                                id="sort_canned_created" href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/canned?action=sort&orderby=canned_created&sortorder=asc')); ?>"><?php echo app('translator')->get('lang.date_created'); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                        <!--canned_visibility-->
                        <th class="col_canned_visibility w-px-150"><a class="js-ajax-ux-request js-list-sorting"
                                id="sort_canned_visibility" href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/canned?action=sort&orderby=canned_visibility&sortorder=asc')); ?>"><?php echo app('translator')->get('lang.visibility'); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                        <!--actions-->
                        <th class="col_canned_actions w-px-150"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.actions'); ?></a>
                        </th>
                    </tr>
                </thead>
                <tbody id="canned-td-container">
                    <!--ajax content here-->
                    <?php echo $__env->make('pages.canned.components.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php endif; ?> <?php if(@count($canned_responses ?? []) == 0): ?>
            <!--nothing found-->
            <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--nothing found-->
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/canned/components/table/table.blade.php ENDPATH**/ ?>