<div class="col-12">
    <div class="table-responsive m-t-40 invoice-table-wrapper <?php echo e(config('css.bill_mode')); ?> clear-both">
        <table class="table table-hover invoice-table <?php echo e(config('css.bill_mode')); ?>">
            <thead>
                <tr>
                    <!--action-->
                    <?php if(config('visibility.bill_mode') == 'editing'): ?>
                    <th class="text-left x-action bill_col_action"></th>
                    <?php endif; ?>
                    <!--description-->
                    <th class="text-left x-description bill_col_description"><?php echo e(cleanLang(__('lang.description'))); ?>

                    </th>
                    <!--quantity-->
                    <th class="text-left x-quantity bill_col_quantity"><?php echo e(cleanLang(__('lang.qty'))); ?></th>
                    <!--unit price-->
                    <th class="text-left x-unit bill_col_unit"><?php echo e(cleanLang(__('lang.unit'))); ?></th>
                    <!--rate-->
                    <th class="text-left x-rate bill_col_rate"><?php echo e(cleanLang(__('lang.rate'))); ?></th>
                    <!--tax-->
                    <th
                        class="text-left x-tax bill_col_tax <?php echo e(runtimeVisibility('invoice-column-inline-tax', $bill->bill_tax_type)); ?>">
                        <?php echo e(cleanLang(__('lang.tax'))); ?></th>
                    <!--total-->
                    <th class="text-right x-total bill_col_total" id="bill_col_total"><?php echo e(cleanLang(__('lang.total'))); ?>

                    </th>
                </tr>
            </thead>
            <?php if(config('visibility.bill_mode') == 'editing'): ?>
            <tbody id="billing-items-container" class="billing-items-container-editing">
                <?php $__currentLoopData = $lineitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lineitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--plain line-->
                <?php if($lineitem->lineitem_type == 'plain'): ?>
                <?php echo $__env->make('pages.bill.components.elements.line-plain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

                <!--estimation notes-->
                <?php if($lineitem->item_notes_estimatation != ''): ?>
                <?php echo $__env->make('pages.bill.components.elements.line-estimation-notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

                <!--time line-->
                <?php if($lineitem->lineitem_type == 'time'): ?>
                <?php echo $__env->make('pages.bill.components.elements.line-time', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

                <!--dimensions line-->
                <?php if($lineitem->lineitem_type == 'dimensions'): ?>
                <?php echo $__env->make('pages.bill.components.elements.line-dimensions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <?php else: ?>
            <tbody id="billing-items-container">
                <?php echo $__env->make('pages.bill.components.elements.lineitems', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </tbody>
            <?php endif; ?>
        </table>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/main-table.blade.php ENDPATH**/ ?>