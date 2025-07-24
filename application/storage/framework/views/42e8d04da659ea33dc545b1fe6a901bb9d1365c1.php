<div class="card count-<?php echo e(@count($knowledgebase)); ?>">
    <div class="card-body">
        <div class="table-responsive min-h-250">
            <?php if(@count($knowledgebase ?? []) > 0): ?>
            <table id="demo-foo-addrow" class="table m-t-0 m-b-0 table-hover no-wrap knowledgebase" data-page-size="10">
                <tbody id="knowledgebase-td-container">
                    <!--ajax content here-->
                    <?php echo $__env->make('pages.knowledgebase.components.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--ajax content here-->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">
                            <!--load more button-->
                            <?php echo $__env->make('misc.load-more-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!--load more button-->
                        </td>
                    </tr>
                </tfoot>
            </table>
            <?php endif; ?> <?php if(@count($knowledgebase ?? []) == 0): ?>
            <!--nothing found-->
            <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--nothing found-->
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/knowledgebase/components/table/table.blade.php ENDPATH**/ ?>