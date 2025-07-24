<div class="row">
    <div class="col-lg-12">
        <div class="p-b-30">

            <table class="table table-bordered payment-details">
                <tbody>
                    <tr>
                        <td><?php echo e(cleanLang(__('lang.payment_id'))); ?></td>
                        <td>#<?php echo e($payment->payment_id); ?></td>
                    </tr>
                    <tr class="font-16 font-weight-600">
                            <td><?php echo e(cleanLang(__('lang.amount'))); ?></td>
                            <td>
                                <?php echo e(runtimeMoneyFormat($payment->payment_amount)); ?></td>
                            </td>
                        </tr>
                    <tr>
                        <td><?php echo e(cleanLang(__('lang.invoice_id'))); ?></td>
                        <td> <?php echo e(runtimeInvoiceIdFormat($payment->payment_invoiceid)); ?>

                        </td>
                    </tr>
                    <tr>
                        <td><?php echo e(cleanLang(__('lang.date'))); ?></td>
                        <td><?php echo e(runtimeDate($payment->payment_date)); ?></td>
                    </tr>

                    <tr>
                        <td><?php echo e(cleanLang(__('lang.payment_method'))); ?></td>
                        <td><?php echo e($payment->payment_gateway); ?></td>
                    </tr>
                    <?php if(auth()->user()->is_team): ?>
                    <tr>
                        <td><?php echo e(cleanLang(__('lang.client'))); ?></td>
                        <td><?php echo e($payment->client_company_name); ?></td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td><?php echo e(cleanLang(__('lang.project'))); ?></td>
                        <td><?php echo e($payment->project_title); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(cleanLang(__('lang.notes'))); ?></td>
                        <td><?php echo e($payment->payment_notes); ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/payments/components/modals/show-payment.blade.php ENDPATH**/ ?>