<div class="col-12" id="bill-totals-wrapper">

    <!--FILE ATTACHEMENTS-->
    <?php if(config('visibility.bill_files_section')): ?>
    <div class="pull-left m-t-30 text-left bill-file-attachments">
        <h6><?php echo app('translator')->get('lang.attachments'); ?></h6>
        <div class="bill-file-attachments-wrapper" id="bill-file-attachments-wrapper">

            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('pages.bill.components.elements.attachment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--add attachments-->
            <?php if(config('visibility.bill_mode') == 'editing' && (auth()->check() && auth()->user()->role->role_estimates >= 3)): ?>
            <div class="x-add-file-button">
                <button type="button" id="bill-file-attachments-upload-button"
                    class="btn waves-effect waves-light btn-rounded btn-xs btn-danger"><?php echo app('translator')->get('lang.add_file_attachments'); ?></button>
            </div>
            <?php endif; ?>
        </div>
        <!--dropzone-->
        <!--fileupload-->
        <?php if(auth()->check() && auth()->user()->role->role_estimates >= 3): ?>
        <div class="form-group row hidden" id="bill-file-attachments-dropzone-wrapper">
            <div class="col-12">
                <div class="dropzone dz-clickable fileupload_bills" id="fileupload_bills"
                    data-upload-url="<?php echo e(runtimeURLBillAttachFiles($bill)); ?>">
                    <div class="dz-default dz-message">
                        <i class="icon-Upload-toCloud"></i>
                        <span><?php echo app('translator')->get('lang.drag_drop_file'); ?></span>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                        id="bill-file-attachments-close-button">
                        <i class="ti-close"></i>
                    </button>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!--#fileupload-->
    </div>
    <?php endif; ?>

    <!--total amounts-->
    <div class="pull-right m-t-30 text-right">

        <table class="invoice-total-table">

            <!--invoice amount-->
            <tbody id="billing-table-section-subtotal" class="<?php echo e($bill->visibility_subtotal_row); ?>">
                <tr>
                    <td><?php echo e(cleanLang(__('lang.subtotal'))); ?></td>
                    <td id="billing-subtotal-figure">
                        <span><?php echo runtimeMoneyFormatPDF($bill->bill_subtotal); ?></span>
                    </td>
                </tr>
            </tbody>

            <!--discounted invoice-->
            <tbody id="billing-table-section-discounts" class="<?php echo e($bill->visibility_discount_row); ?>">
                <tr id="billing-sums-discount-container">
                    <?php if($bill->bill_discount_type == 'percentage'): ?>
                    <td><?php echo e(cleanLang(__('lang.discount'))); ?> <span class="x-small"
                            id="dom-billing-discount-type">(<?php echo e($bill->bill_discount_percentage); ?>%)</span>
                    </td>
                    <?php else: ?>
                    <td><?php echo e(cleanLang(__('lang.discount'))); ?> <span class="x-small"
                            id="dom-billing-discount-type">(<?php echo e(cleanLang(__('lang.fixed'))); ?>)</span></td>
                    <?php endif; ?>
                    <td id="billing-sums-discount">
                        -<?php echo runtimeMoneyFormatPDF($bill->bill_discount_amount); ?>

                    </td>
                </tr>

                <!-- 18 sep 2022 - removed. not really required--
                <tr id="billing-sums-before-tax-container" class="<?php echo e($bill->visibility_before_tax_row); ?>">
                    <td><?php echo app('translator')->get('lang.total'); ?> <span class="x-small">(<?php echo e(cleanLang(__('lang.before_tax'))); ?>)</span></td>
                    <td id="billing-sums-before-tax">
                        <span><?php echo runtimeMoneyFormatPDF($bill->bill_amount_before_tax); ?></span></td>
                </tr>
                -->
            </tbody>

            <!--taxes (summary)-->
            <?php if($bill->bill_tax_type == 'summary'): ?>
            <tbody id="billing-table-section-tax" class="<?php echo e($bill->visibility_tax_row); ?>">
                <?php $__currentLoopData = $bill->taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="billing-sums-tax-container" id="billing-sums-tax-container-<?php echo e($tax->tax_id); ?>">
                    <td><?php echo e($tax->tax_name); ?> <span class="x-small">(<?php echo e($tax->tax_rate); ?>%)</span></td>
                    <td id="invoice-sums-tax-<?php echo e($tax->tax_id); ?>">
                        <span><?php echo runtimeMoneyFormatPDF(($bill->bill_amount_before_tax * $tax->tax_rate)/100); ?></span>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <?php endif; ?>


            <!--taxes (inline)-->
            <?php if($bill->bill_tax_type == 'inline'): ?>
            <tbody id="billing-table-section-tax" class="<?php echo e($bill->visibility_tax_row); ?>">
                <tr class="billing-sums-tax-container">
                    <td><?php echo app('translator')->get('lang.tax'); ?></td>
                    <td>
                        <span><?php echo runtimeMoneyFormatPDF($bill->bill_tax_total_amount); ?></span>
                    </td>
                </tr>
            </tbody>
            <?php endif; ?>


            <!--adjustment & invoice total-->
            <tbody id="invoice-table-section-total">
                <!--adjustment-->
                <tr class="billing-adjustment-container <?php echo e($bill->visibility_adjustment_row); ?>"
                    id="billing-adjustment-container">
                    <td class="p-t-15 billing-adjustment-text" id="billing-adjustment-container-description">
                        <?php echo e($bill->bill_adjustment_description); ?></td>
                    <td class="p-t-15 billing-adjustment-text">
                        <span id="billing-adjustment-container-amount"><?php echo runtimeMoneyFormatPDF($bill->bill_adjustment_amount); ?></span>
                    </td>
                </tr>

                <!--total-->
                <tr class="text-themecontrast" id="billing-sums-total-container">
                    <td class="billing-sums-total"><?php echo e(cleanLang(__('lang.total'))); ?></td>
                    <td id="billing-sums-total">
                        <span><?php echo runtimeMoneyFormatPDF($bill->bill_final_amount); ?></span>
                    </td>
                </tr>
            </tbody>

        </table>

    </div>

</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/totals-table.blade.php ENDPATH**/ ?>