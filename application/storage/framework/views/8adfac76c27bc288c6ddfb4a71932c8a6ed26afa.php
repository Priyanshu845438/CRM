<div class="row">
    <div class="col-lg-12">

        <!--repeat period-->
        <div class="form-group row">
            <label for="example-month-input"
                class="col-sm-12 col-lg-3 col-form-label text-left"><?php echo e(cleanLang(__('lang.repeat_every'))); ?></label>

            <div class="col-sm-12 col-lg-3">
                <input type="number" class="form-control form-control-sm" id="bill_recurring_duration"
                    name="bill_recurring_duration" value="<?php echo e($invoice->bill_recurring_duration ?? 1); ?>">
            </div>
            <div class="col-6">
                <select class="select2-basic form-control form-control-sm" id="bill_recurring_period"
                    name="bill_recurring_period">
                    <option value="month" <?php echo e(runtimePreselected($invoice->bill_recurring_period ?? '', 'month')); ?>>
                        <?php echo e(cleanLang(__('lang.month_months'))); ?></option>
                    <option value="day" <?php echo e(runtimePreselected($invoice->bill_recurring_period ?? '', 'day')); ?>><?php echo e(cleanLang(__('lang.days'))); ?>

                    </option>
                    <option value="week" <?php echo e(runtimePreselected($invoice->bill_recurring_period ?? '', 'week')); ?>>
                        <?php echo e(cleanLang(__('lang.week_weeks'))); ?></option>
                    <option value="year" <?php echo e(runtimePreselected($invoice->bill_recurring_period ?? '', 'year')); ?>>
                        <?php echo e(cleanLang(__('lang.year_years'))); ?></option>
                </select>
            </div>

        </div>


        <!--repeat cycle-->
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.cycles'))); ?></label>
            <div class="col-sm-12 col-lg-3">
                <input type="number" class="form-control form-control-sm" id="bill_recurring_cycles"
                    name="bill_recurring_cycles" value="<?php echo e($invoice->bill_recurring_cycles ?? 0); ?>">
            </div>
            <div class="col-sm-12 col-lg-3">
                <!--info tooltip-->
                <div class="fx-info-tool-tip">
                    <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                        title="<?php echo e(cleanLang(__('lang.bill_recurring_period_info'))); ?>" data-placement="top"><i
                            class="ti-info-alt"></i></span>
                </div>
            </div>
        </div>

        <!--next cycle date-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.next_bill_date'))); ?></label> 
            <div class="col-sm-12 col-lg-3">
                <?php if(isset($invoice['bill_recurring']) && $invoice['bill_recurring'] == 'yes'): ?>
                <input type="text" class="form-control form-control-sm pickadate" name="bill_recurring_next"
                    autocomplete="off" value="<?php echo e(runtimeDatepickerDate($invoice->bill_recurring_next ?? '')); ?>">
                <input class="mysql-date" type="hidden" name="bill_recurring_next" id="bill_recurring_next"
                    value="<?php echo e($invoice->bill_recurring_next ?? ''); ?>">
                <?php else: ?>
                <input type="text" class="form-control form-control-sm pickadate" name="bill_recurring_next"
                    autocomplete="off" value="">
                <input class="mysql-date" type="hidden" name="bill_recurring_next" id="bill_recurring_next" value="">
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-lg-3">
                <!--info tooltip-->
                <div  class="fx-info-tool-tip">
                    <span class="align-middle text-themecontrast font-16" data-toggle="tooltip"
                        title="<?php echo e(cleanLang(__('lang.see_information_below'))); ?>" data-placement="top"><i
                            class="ti-info-alt"></i></span>
                </div>
            </div>
        </div>

        <!--billing cycles information-->
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                    aria-hidden="true">×</span> </button>
            <h5 class="text-info"><i class="sl-icon-info"></i> <?php echo e(cleanLang(__('lang.first_invoice'))); ?></h5>
            <div><?php echo e(cleanLang(__('lang.bill_recurring_cycles_explanation_3'))); ?></div>
        </div>

        <!--billing cycles information-->
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                    aria-hidden="true">×</span> </button>
            <h5 class="text-info"><i class="sl-icon-info"></i> <?php echo e(cleanLang(__('lang.next_bill_date'))); ?></h5>
            <div><?php echo e(cleanLang(__('lang.bill_recurring_cycles_explanation_1'))); ?></div>
        </div>

        <!--billing cycles information-->
        <div class="alert alert-info hidden">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                    aria-hidden="true">×</span> </button>
            <h5 class="text-info"><i class="sl-icon-info"></i> <?php echo e(cleanLang(__('lang.dates_information'))); ?></h5>
            <div><?php echo e(cleanLang(__('lang.bill_recurring_cycles_explanation_2'))); ?></div>
        </div>


    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/invoices/components/modals/recurring-settings.blade.php ENDPATH**/ ?>