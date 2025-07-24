<!--table-->
<div class="table-responsive report-results-table-container" id="report-results-container">
    <table class="table table-hover no-wrap" id="report-results-table">
        <thead>
            <tr>

                <!--income-->
                <th class="col_report_income_month w-49"><?php echo app('translator')->get('lang.month'); ?></th>

                <!--income-->
                <th class="col_report_income_income w-17"><?php echo app('translator')->get('lang.income'); ?></th>

                <!--income-->
                <th class="col_report_income_expenses w-17"><?php echo app('translator')->get('lang.expenses'); ?></th>

                <!--income-->
                <th class="col_report_income_total w-17"><?php echo app('translator')->get('lang.profit'); ?></th>

            </tr>
        </thead>
        <tbody id="report-results-ajax-container">
            <?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_numeric($key)): ?>
            <tr>
                <td>
                    <?php echo e($value['month']); ?>

                </td>
                <td>
                    <?php echo e(runtimeMoneyFormat($value['income'])); ?>

                </td>
                <td>
                    <?php echo e(runtimeMoneyFormat($value['expenses'])); ?>

                </td>
                <td>
                    <?php echo e(runtimeMoneyFormat($value['profit'])); ?>

                </td>
            </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <td class="font-weight-500">
                <?php echo app('translator')->get('lang.total'); ?>
            </td>
            <td class="font-weight-500">
                <?php echo e(runtimeMoneyFormat($report['totals']['income'])); ?>

            </td>
            <td class="font-weight-500">
                <?php echo e(runtimeMoneyFormat($report['totals']['expenses'])); ?>

            </td>
            <td class="font-weight-500">
                <?php echo e(runtimeMoneyFormat($report['totals']['profit'])); ?>

            </td>
        </tfoot>
    </table>

</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/reports/income/table.blade.php ENDPATH**/ ?>