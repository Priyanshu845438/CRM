<!--rows-->
<?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><a href="<?php echo e(url('invoices/'.$invoice->bill_invoiceid)); ?>"><?php echo e($invoice->formatted_bill_invoiceid); ?></a>
    </td>
    <td><a href="<?php echo e(url('clients/'.$invoice->bill_clientid)); ?>"><?php echo e(str_limit_reports($invoice->client_company_name ?? '---', 30)); ?></a>
    </td>
    <td data-tableexport-cellformat=""><span class="hidden used-for-sorting"><?php echo e($invoice->timestamp_bill_date); ?></span><?php echo e(runtimeDate($invoice->bill_date)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($invoice->bill_amount_before_tax)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($invoice->bill_tax_total_amount)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($invoice->bill_discount_amount)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($invoice->bill_adjustment_amount)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($invoice->bill_final_amount)); ?>

    </td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($invoice->sum_payments)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($invoice->invoice_balance)); ?>

    </td>
    <td> <span class="label <?php echo e(runtimeInvoiceStatusColors($invoice->bill_status, 'label')); ?>"><?php echo e(runtimeLang($invoice->bill_status)); ?></span></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/reports/invoices/overview/ajax.blade.php ENDPATH**/ ?>