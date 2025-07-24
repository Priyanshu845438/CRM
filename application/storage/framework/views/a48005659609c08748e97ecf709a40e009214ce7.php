<?php $__currentLoopData = $lineitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lineitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <!--description-->
    <td class="x-description text-wrap-new-lines"><?php echo e($lineitem->lineitem_description); ?></td>

    <!--quantity - [plain]-->
    <?php if($lineitem->lineitem_type == 'plain'): ?>
    <td class="x-quantity"><?php echo e($lineitem->lineitem_quantity); ?></td>
    <?php endif; ?>

    <!--quantity -[time]-->
    <?php if($lineitem->lineitem_type == 'time'): ?>
    <td class="x-quantity">
        <?php if($lineitem->lineitem_time_hours > 0): ?>
        <?php echo e($lineitem->lineitem_time_hours); ?><?php echo e(strtolower(__('lang.hrs'))); ?>&nbsp;
        <?php endif; ?>
        <?php if($lineitem->lineitem_time_minutes > 0): ?>
        <?php echo e($lineitem->lineitem_time_minutes); ?><?php echo e(strtolower(__('lang.mins'))); ?>

        <?php endif; ?>
    </td>
    <?php endif; ?>

    <!--quantity - [dimensions]-->
    <?php if($lineitem->lineitem_type == 'dimensions'): ?>
    <td class="x-quantity"><?php echo e($lineitem->lineitem_quantity); ?></td>
    <?php endif; ?>

    <!--unit price-->
    <td class="x-unit"><?php echo e($lineitem->lineitem_unit); ?></td>
    <!--rate-->
    <td class="x-rate"><?php echo e(runtimeNumberFormat($lineitem->lineitem_rate)); ?></td>
    <!--tax-->
    <td class="x-tax <?php echo e(runtimeVisibility('invoice-column-inline-tax', $bill->bill_tax_type)); ?>">
        <?php $__currentLoopData = $lineitem->taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($tax->tax_rate == '0.00'): ?>
                    ---
                <?php else: ?>
                    <?php echo e($tax->tax_name); ?> (<small><?php echo e($tax->tax_rate); ?>%</small>)
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </td>
    <!--total-->
    <td class="x-total text-right"><?php echo e(runtimeNumberFormat($lineitem->lineitem_total)); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/lineitems.blade.php ENDPATH**/ ?>