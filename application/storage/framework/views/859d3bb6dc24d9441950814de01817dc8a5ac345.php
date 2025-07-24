<!--rows-->
<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>

    <!--client_company_name-->
    <td><a href="<?php echo e(url('clients/'.$client->client_id)); ?>"><?php echo e($client->client_company_name); ?></a>
    </td>

    <!--count_projects_completed-->
    <td>
        <?php echo e($client->count_projects_completed); ?></td>

    <!--count_projects_pending-->
    <td>
        <?php echo e($client->count_projects_pending); ?></td>

    <!--sum_invoices_paid-->
    <td>
        <?php echo e(runtimeMoneyFormat($client->sum_invoices_paid)); ?>

    </td>

    <!--sum_invoices_due-->
    <td>
        <?php echo e(runtimeMoneyFormat($client->sum_invoices_due)); ?>

    </td>

     <!--sum_invoices_overdue-->
     <td>
        <?php echo e(runtimeMoneyFormat($client->sum_invoices_overdue)); ?>

    </td>
 
    <!--sum_estimates_accepted-->
    <td>
        <?php echo e(runtimeMoneyFormat($client->sum_estimates_accepted)); ?>

    </td>

    <!--sum_estimates_declined-->
    <td>
        <?php echo e(runtimeMoneyFormat($client->sum_estimates_declined)); ?>

    </td>

    <!--sum_expenses_invoiced-->
    <td>
        <?php echo e(runtimeMoneyFormat($client->sum_expenses_invoiced)); ?>

    </td>

    <!--sum_expenses_not_invoiced-->
    <td>
        <?php echo e(runtimeMoneyFormat($client->sum_expenses_not_invoiced)); ?>

    </td>

    <!--sum_expenses_not_billable-->
    <td>
        <?php echo e(runtimeMoneyFormat($client->sum_expenses_not_billable)); ?>

    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/reports/clients/overview/ajax.blade.php ENDPATH**/ ?>