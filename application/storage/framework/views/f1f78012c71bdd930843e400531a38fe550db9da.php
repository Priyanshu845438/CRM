<div class="row">
    <div class="col-lg-12">

        <!--amount-->
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.amount'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="basic-addon2"><?php echo e(config('system.settings_system_currency_symbol')); ?></span>
                    <input type="number" name="payment_amount" id="payment_amount" class="form-control form-control-sm"
                        value="<?php echo e($payment->payment_amount); ?>" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>

        <!--date-->
        <div class="form-group row">
            <label for="due_date"
                class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.date'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" name="payment_date" class="form-control form-control-sm pickadate" autocomplete="off"
                    value="<?php echo e(runtimeDatepickerDate($payment->payment_date)); ?>">
                <input class="mysql-date" type="hidden" name="payment_date" id="payment_date"
                    value="<?php echo e($payment->payment_date); ?>">
            </div>
        </div>

        <!--gateway-->
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.payment_method'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <select id="payment_gateway" name="payment_gateway" class="select2-basic form-control-sm" data-preselected="<?php echo e($payment->payment_gateway); ?>">
                    <?php $__currentLoopData = config('system.gateways'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($gateway); ?>"><?php echo e($gateway); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <!--transaction id-->
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.transaction_id'))); ?></label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" name="payment_transaction_id" class="form-control form-control-sm"
                    id="payment_transaction_id" autocomplete="off" value="<?php echo e($payment->payment_transaction_id); ?>">
            </div>
        </div>

        <!--additional information toggle-->
        <div class="spacer row">
            <div class="col-sm-12 col-lg-8">
                <span class="title"><?php echo e(cleanLang(__('lang.additional_information'))); ?></span class="title">
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="switch  text-right">
                    <label>
                        <input type="checkbox" name="show_more_settings_payments" id="show_more_settings_payments"
                            class="js-switch-toggle-hidden-content" data-target="add_payment_additional_settings">
                        <span class="lever switch-col-light-blue"></span>
                    </label>
                </div>
            </div>
        </div>

        <!--notes-->
        <div id="add_payment_additional_settings" class="hidden">
            <div class="form-group row">
                <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.notes'))); ?>**</label>
                <div class="col-sm-12 col-lg-9">
                    <textarea class="form-control" name="payment_notes" id="payment_notes" rows="5"><?php echo $payment->payment_notes; ?></textarea>
                    <div><small>** <?php echo e(cleanLang(__('lang.private'))); ?> (<?php echo e(cleanLang(__('lang.not_visible_to_the_client'))); ?>)</small></div>
                </div>
            </div>
        </div>

        <!--notes-->
        <div class="row">
            <div class="col-12">
                <div><small><strong>* <?php echo e(cleanLang(__('lang.required'))); ?></strong></small></div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/payments/components/modals/edit-payment.blade.php ENDPATH**/ ?>