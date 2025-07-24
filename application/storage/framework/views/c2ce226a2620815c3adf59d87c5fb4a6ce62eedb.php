<!--EACH LINE ITEM X-->
<tr class="billing-line-item" id="lineitem_<?php echo e($lineitem->lineitem_id ?? ''); ?>" type="plain">
    <!--action-->
    <td class="td-action list-table-action x-action bill_col_action">
        <button type="button"
            class="btn btn-outline-danger btn-circle btn-sm js-billing-line-item-delete">
            <i class="sl-icon-trash"></i>
        </button>
        <!--drg-drop icon-->
        <i class="sl-icon-menu font-14 display-inline-block m-l-2 cursor-pointer opacity-4"></i>
    </td>
    <!--description-->
    <td class="form-group x-description bill_col_description">
        <textarea class="form-control form-control-sm js_item_description js_line_validation_item" rows="3"
            name="js_item_description[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"><?php echo e($lineitem->lineitem_description ?? ''); ?></textarea>
    </td>
    <!--quantity-->
    <td class="form-group x-quantity bill_col_quantity">
        <input class="form-control form-control-sm js_item_quantity calculation-element js_line_validation_item"
            type="number" step="1" name="js_item_quantity[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
            value="<?php echo e($lineitem->lineitem_quantity ?? ''); ?>">
    </td>
    <!--unit-->
    <td class="form-group x-unit bill_col_unit">
        <input class="form-control form-control-sm js_item_unit js_line_validation_item" type="text"
            name="js_item_unit[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" value="<?php echo e($lineitem->lineitem_unit ?? ''); ?>">
    </td>
    <!--rate-->
    <td class="form-group x-price bill_col_price">
        <input
            class="form-control form-control-sm js_item_rate calculation-element decimal-field js_line_validation_item"
            type="number" step="1" name="js_item_rate[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
            value="<?php echo e($lineitem->lineitem_rate ?? ''); ?>">
    </td>
    <!--inline tax-->
    <td
        class="bill_col_tax form-group x-tax <?php echo e(runtimeVisibility('invoice-column-inline-tax', $bill->bill_tax_type)); ?> ">
        <select name="js_item_tax[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" <?php echo e(runtimeLineItemTaxStatus($lineitem->lineitem_tax_status ?? '')); ?>

            class="form-control form-control-sm js_item_tax calculation-element" tabindex="-1" aria-hidden="true">
            <!--show zero rated tax first-->
            <?php $__currentLoopData = $taxrates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($taxrate->taxrate_uniqueid == 'zero-rated-tax-rate'): ?>
            <option value="0|<?php echo e($taxrate->taxrate_name); ?>|zero-rated-tax-rate|<?php echo e($taxrate->taxrate_id); ?>"
                <?php echo e(runtimeInlineTaxPreselected($taxrate->taxrate_id ?? '', $lineitem->lineitem_id ?? '')); ?>>
                0% - <?php echo e($taxrate->taxrate_name); ?>

            </option>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--show all other tax rates-->
            <?php $__currentLoopData = $taxrates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($taxrate->taxrate_uniqueid != 'zero-rated-tax-rate'): ?>
            <option
                value="<?php echo e($taxrate->taxrate_value); ?>|<?php echo e($taxrate->taxrate_name); ?>|<?php echo e($taxrate->taxrate_uniqueid); ?>|<?php echo e($taxrate->taxrate_id); ?>"
                <?php echo e(runtimeInlineTaxPreselected($taxrate->taxrate_id ?? '', $lineitem->lineitem_id ?? '')); ?>>
                <?php echo e($taxrate->taxrate_value); ?>% - <?php echo e($taxrate->taxrate_name); ?></option>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <input type="hidden" class="js_linetax_total" name="js_linetax_rate[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
            value="0">
    </td>
    <!--total-->
    <td class="form-group x-total" id="bill_col_total">
        <input class="form-control form-control-sm js_item_total decimal-field" type="number" step="0.01"
            name="js_item_total[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" value="<?php echo e($lineitem->lineitem_total ?? ''); ?>"
            disabled>
    </td>

    <!--linked items-->
    <input type="hidden" class="js_item_linked_type"
        data-duplicate-check="<?php echo e($lineitem->lineitemresource_linked_type ?? ''); ?>|<?php echo e($lineitem->lineitemresource_linked_id ?? ''); ?>"
        name="js_item_linked_type[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
        value="<?php echo e($lineitem->lineitemresource_linked_type ?? ''); ?>">
    <input type="hidden" class="js_item_linked_id" name="js_item_linked_id[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
        value="<?php echo e($lineitem->lineitemresource_linked_id ?? ''); ?>">
    <input type="hidden" class="js_item_type" name="js_item_type[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" value="plain">

    <!--item type-->
    <input type="hidden" class="js_item_type" name="js_item_type[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" value="plain">

    <!-- original product id-->
    <input type="hidden" class="js_item_id" name="js_item_id[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
        value="<?php echo e($lineitem->lineitem_linked_product_id ?? ''); ?>">
    <input type="hidden" class="js_item_id" name="js_item_id[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
        value="<?php echo e($lineitem->lineitem_linked_product_id ?? ''); ?>">

    <!-- tax status-->
    <input type="hidden" class="js_item_tax_status"
        name="js_item_tax_status[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
        value="<?php echo e($lineitem->lineitem_tax_status ?? ''); ?>">
</tr>
<!--/#EACH LINE ITEM--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/line-plain.blade.php ENDPATH**/ ?>