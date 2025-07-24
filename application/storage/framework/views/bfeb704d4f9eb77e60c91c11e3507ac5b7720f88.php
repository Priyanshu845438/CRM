    <!--dates-->
    <div class="pull-left invoice-dates">
        <table>
            <tr>
                <td class="x-date-lang" id="fx-invoice-date-lang"><?php echo e(cleanLang(__('lang.invoice_date'))); ?> </td>
                <?php if(config('visibility.bill_mode') == 'editing'): ?>
                <td><input type="text" class="form-control form-control-xs pickadate" name="bill_date"
                        autocomplete="off" value="<?php echo e(runtimeDate($bill->bill_date)); ?>">
                    <input class="mysql-date" type="hidden" name="bill_date" id="bill_date"
                        value="<?php echo e($bill->bill_date); ?>">
                </td>
                <?php else: ?>
                <td class="x-date" > <span><?php echo e(runtimeDate($bill->bill_date)); ?></span></td>
                <?php endif; ?>
            </tr>
            <tr>
                <td class="x-date-due-lang" ><?php echo e(cleanLang(__('lang.due_date'))); ?> </td>
                <?php if(config('visibility.bill_mode') == 'editing'): ?>
                <td><input type="text" class="form-control form-control-xs pickadate" name="bill_due_date"
                        autocomplete="off" value="<?php echo e(runtimeDate($bill->bill_due_date)); ?>">
                    <input class="mysql-date" type="hidden" name="bill_due_date" id="bill_due_date"
                        value="<?php echo e($bill->bill_due_date); ?>">
                </td>
                <?php else: ?>
                <td class="x-date-due"> <span><?php echo e(runtimeDate($bill->bill_due_date)); ?></span></td>
                <?php endif; ?>
            </tr>
        </table>
    </div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/invoice/dates.blade.php ENDPATH**/ ?>