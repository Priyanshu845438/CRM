        <!--HEADER-->
        <div class="billing-mode-only-item">
            <span class="pull-left">
                <h3><b><?php echo e(cleanLang(__('lang.estimate'))); ?></b>
                    <!--automation icon-->
                    <?php echo $__env->make('pages.bill.components.elements.estimate.icons-automation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </h3>
                <span>
                    <h5>#<?php echo e($bill->formatted_bill_estimateid); ?></h5>
                </span>
            </span>
            <!--status-->
            <span class="pull-right">
                <!--draft-->
                <span class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('draft', $bill->bill_status)); ?>"
                    id="estimate-status-draft">
                    <h1 class="text-uppercase <?php echo e(runtimeEstimateStatusColors('draft', 'text')); ?> muted">
                        <?php echo e(cleanLang(__('lang.draft'))); ?></h1>
                </span>
                <!--new-->
                <span class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('new', $bill->bill_status)); ?>"
                    id="estimate-status-new">
                    <h1 class="text-uppercase <?php echo e(runtimeEstimateStatusColors('new', 'text')); ?>">
                        <?php echo e(cleanLang(__('lang.new'))); ?></h1>
                </span>
                <!--accepted-->
                <span class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('accepted', $bill->bill_status)); ?>"
                    id="estimate-status-accpeted">
                    <h1 class="text-uppercase <?php echo e(runtimeEstimateStatusColors('accepted', 'text')); ?>">
                        <?php echo e(cleanLang(__('lang.accepted'))); ?></h1>
                </span>
                <!--declined-->
                <span class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('declined', $bill->bill_status)); ?>"
                    id="estimate-status-declined">
                    <h1 class="text-uppercase <?php echo e(runtimeEstimateStatusColors('declined', 'text')); ?>">
                        <?php echo e(cleanLang(__('lang.declined'))); ?></h1>
                </span>
                <!--revised-->
                <span class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('revised', $bill->bill_status)); ?>"
                    id="estimate-status-revised">
                    <h1 class="text-uppercase <?php echo e(runtimeEstimateStatusColors('revised', 'text')); ?>">
                        <?php echo e(cleanLang(__('lang.revised'))); ?></h1>
                </span>
                <!--expired-->
                <span class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('expired', $bill->bill_status)); ?>"
                    id="estimate-status-expired">
                    <h1 class="text-uppercase <?php echo e(runtimeEstimateStatusColors('expired', 'text')); ?>">
                        <?php echo e(cleanLang(__('lang.expired'))); ?></h1>
                </span>
            </span>
        </div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/estimate/header-web.blade.php ENDPATH**/ ?>