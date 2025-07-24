<!--table-->
<?php if(@count($clients ?? []) > 0): ?>
<div class="table-responsive report-results-table-container" id="report-results-container">
    <table class="table table-hover no-wrap" id="report-results-table">
        <thead>
            <tr>
                <th></th>
                <th colspan="2" class="text-center reports-th-heading"><?php echo app('translator')->get('lang.projects'); ?></th>
                <th colspan="3" class="text-center reports-th-heading-contrast"><?php echo app('translator')->get('lang.invoices'); ?></th>
                <th colspan="2" class="text-center reports-th-heading"><?php echo app('translator')->get('lang.estimates'); ?></th>
                <th colspan="3" class="text-center reports-th-heading-contrast"><?php echo app('translator')->get('lang.expenses'); ?></th>
            </tr>
            <tr>

                <!--client_company_name-->
                <th class="col_project_id"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.client'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <!--count_projects_completed-->
                <th class="col_count_projects_completed"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.completed'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--count_projects_pending-->
                <th class="col_count_projects_pending"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.pending'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--sum_invoices_paid-->
                <th class="col_sum_invoices_paid"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.paid'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--sum_invoices_due-->
                <th class="col_sum_invoices_due"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.due'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--sum_invoices_overdue-->
                <th class="col_sum_invoices_due"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.overdue'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                <!--sum_estimates_accepted-->
                <th class="col_sum_estimates_accepted"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.accepted'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <!--sum_estimates_declined-->
                <th class="col_sum_estimates_declined"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.declined'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <!--sum_expenses_invoiced-->
                <th class="col_sum_expenses_invoiced"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.invoiced'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>


                <!--sum_expenses_not_invoiced-->
                <th class="col_sum_hours"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.not_invoiced'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <!--sum_expenses_not_billable-->
                <th class="col_sum_hours"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.not_billable'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

            </tr>
        </thead>
        <tbody id="report-results-ajax-container">
            <!--rows-->
            <?php echo $__env->make('pages.reports.clients.overview.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </tbody>
        <tfoot>
            <!--rows-->
            <?php echo $__env->make('pages.reports.clients.overview.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </tfoot>
    </table>

</div>
<?php else: ?>
<div id="report-results-container">
    <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php endif; ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/reports/clients/overview/table.blade.php ENDPATH**/ ?>