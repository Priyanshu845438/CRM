
<!--totals-->
<tr class="report-results-table-totals">
    <td colspan="3"><?php echo app('translator')->get('lang.page_totals'); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($totals['sum_before_tax'] ?? 0)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($totals['sum_tax'] ?? 0)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($totals['sum_discount'] ?? 0)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($totals['sum_adjustment'] ?? 0)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($totals['sum_final_amount'] ?? 0)); ?>

    </td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($totals['sum_payments'] ?? 0)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($totals['sum_balance_due'] ?? 0)); ?>

    </td>
    <td>---</td>
</tr>

<!--pagination-->
<tr>
    <td class="pagination-container" data-tableexport-display="none" colspan="11">
        <div class="pagination">
            <?php echo e($invoices->links('pages.reports.components.misc.pagination')); ?>

        </div>
    </td>
</tr><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/reports/invoices/overview/footer.blade.php ENDPATH**/ ?>