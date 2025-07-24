<!--totals-->
<tr class="report-results-table-totals">
    <td colspan="1"><?php echo app('translator')->get('lang.page_totals'); ?></td>

    <!--count_projects_completed-->
    <td>
        <?php echo e($totals['count_projects_completed']); ?></td>

    <!--count_projects_pending-->
    <td>
        <?php echo e($totals['count_projects_pending']); ?></td>

    <!--sum_invoices_paid-->
    <td>
        <?php echo e(runtimeMoneyFormat($totals['sum_invoices_paid'])); ?></td>

    <!--sum_invoices_due-->
    <td>
        <?php echo e(runtimeMoneyFormat($totals['sum_invoices_due'])); ?></td>

    <!--sum_invoices_overdue-->
    <td>
        <?php echo e(runtimeMoneyFormat($totals['sum_invoices_overdue'])); ?></td>

    <!--sum_estimates_accepted-->
    <td>
        <?php echo e(runtimeMoneyFormat($totals['sum_estimates_accepted'])); ?></td>

    <!--sum_estimates_declined-->
    <td>
        <?php echo e(runtimeMoneyFormat($totals['sum_estimates_declined'])); ?></td>

    <!--sum_expenses_invoiced-->
    <td>
        <?php echo e(runtimeMoneyFormat($totals['sum_expenses_invoiced'])); ?></td>

    <!--sum_expenses_not_invoiced-->
    <td>
        <?php echo e(runtimeMoneyFormat($totals['sum_expenses_not_invoiced'])); ?></td>


    <!--sum_expenses_not_billable-->
    <td>
        <?php echo e(runtimeMoneyFormat($totals['sum_expenses_not_billable'])); ?></td>
</tr>

<!--pagination-->
<tr>
    <td class="pagination-container" data-tableexport-display="none" colspan="11">
        <div class="pagination">
            <?php echo e($clients->links('pages.reports.components.misc.pagination')); ?>

        </div>
    </td>
</tr><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/reports/clients/overview/footer.blade.php ENDPATH**/ ?>