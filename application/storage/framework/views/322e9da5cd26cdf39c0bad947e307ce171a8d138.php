<!--rows-->
<?php $__currentLoopData = $estimates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estimate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><a href="<?php echo e(url('estimates/'.$estimate->bill_estimateid)); ?>"><?php echo e($estimate->formatted_bill_estimateid); ?></a>
    </td>
    <td><a href="<?php echo e(url('clients/'.$estimate->bill_clientid)); ?>"><?php echo e(str_limit_reports($estimate->client_company_name ?? '---', 30)); ?></a>
    </td>
    <td data-tableexport-cellformat=""><span class="hidden used-for-sorting"><?php echo e($estimate->timestamp_bill_date); ?></span><?php echo e(runtimeDate($estimate->bill_date)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($estimate->bill_amount_before_tax)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($estimate->bill_tax_total_amount)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($estimate->bill_discount_amount)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($estimate->bill_adjustment_amount)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($estimate->bill_final_amount)); ?>

    </td>
    <td> <span class="label <?php echo e(runtimeEstimateStatusColors($estimate->bill_status, 'label')); ?>"><?php echo e(runtimeLang($estimate->bill_status)); ?></span></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/reports/estimates/overview/ajax.blade.php ENDPATH**/ ?>