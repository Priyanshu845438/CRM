<!-----------------------------------------------------LOGIC & POST HIDDEN FIELDS---------------------------------------------------------->
<div class="hidden" id="invoice-logic">

    <!--sum payments-->
    <label class="col-12 text-left control-label col-form-label">bill_total_payments</label>
    <input type="number" class="decimal-field" name="bill_total_payments" id="bill_total_payments"
        value="<?php echo e($bill->sum_payments); ?>">

    <!--invoice subtotal-->
    <label class="col-12 text-left control-label col-form-label">bill_subtotal</label>
    <input type="number" class="decimal-field" name="bill_subtotal" id="bill_subtotal"
        value="<?php echo e($bill->bill_subtotal); ?>">

    <!--invoice bill_amount_before_tax-->
    <label class="col-12 text-left control-label col-form-label">bill_amount_before_tax</label>
    <input type="number" class="decimal-field" name="bill_amount_before_tax" id="bill_amount_before_tax"
        value="<?php echo e($bill->bill_amount_before_tax); ?>">

    <!--invoice bill_final_amount-->
    <label class="col-12 text-left control-label col-form-label">bill_final_amount</label>
    <input type="number" class="decimal-field" name="bill_final_amount" id="bill_final_amount"
        value="<?php echo e($bill->bill_final_amount); ?>">


    <!--tax type-->
    <label class="col-12 text-left control-label col-form-label">bill_tax_type</label>
    <input type="text" name="bill_tax_type" id="bill_tax_type" value="<?php echo e($bill->bill_tax_type); ?>">

    <!--system tax rates-->
    <label class="col-12 text-left control-label col-form-label">bill_logic_taxes</label>
    <select id="bill_logic_taxes" name="bill_logic_taxes" multiple>
        <!--all tax rates-->
        <?php $__currentLoopData = $taxrates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option id="<?php echo e($taxrate->taxrate_uniqueid); ?>" <?php echo e($taxrate->taxrate_selected); ?>

            value="<?php echo e($taxrate->taxrate_value); ?>|<?php echo e($taxrate->taxrate_name); ?>|<?php echo e($taxrate->taxrate_id); ?>|<?php echo e($taxrate->taxrate_uniqueid); ?>">
            <?php echo e($taxrate->taxrate_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <!--tax total percentage-->
    <label class="col-12 text-left control-label col-form-label">bill_tax_total_percentage</label>
    <input type="text" name="bill_tax_total_percentage" id="bill_tax_total_percentage"
        value="<?php echo e($bill->bill_tax_total_percentage); ?>">

    <!--tax total bill_tax_total_amount-->
    <label class="col-12 text-left control-label col-form-label">bill_tax_total_amount</label>
    <input type="text" name="bill_tax_total_amount" id="bill_tax_total_amount"
        value="<?php echo e($bill->bill_tax_total_amount); ?>">

    <!--DISCOUNT-->
    <label class="col-12 text-left control-label col-form-label">bill_discount_type</label>
    <input type="text" name="bill_discount_type" id="bill_discount_type" value="<?php echo e($bill->bill_discount_type); ?>">
    <label class="col-12 text-left control-label col-form-label">bill_discount_percentage</label>
    <input type="number" name="bill_discount_percentage" id="bill_discount_percentage"
        value="<?php echo e($bill->bill_discount_percentage); ?>">
    <label class="col-12 text-left control-label col-form-label">bill_discount_amount</label>
    <input type="number" name="bill_discount_amount" id="bill_discount_amount" class="decimal-field"
        value="<?php echo e($bill->bill_discount_amount); ?>">

    <!--adjustment-->
    <label class="col-12 text-left control-label col-form-label">bill_adjustment_description</label>
    <input type="text" name="bill_adjustment_description" id="bill_adjustment_description"
        value="<?php echo e($bill->bill_adjustment_description); ?>">
    <label class="col-12 text-left control-label col-form-label">bill_adjustment_amount</label>
    <input type="text" name="bill_adjustment_amount" id="bill_adjustment_amount" class="decimal-field"
        value="<?php echo e($bill->bill_adjustment_amount); ?>">

</div>
<!-----------------------------------------------------/#LOGIC & POST HIDDEN FIELDS----------------------------------------------------------><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/logic.blade.php ENDPATH**/ ?>