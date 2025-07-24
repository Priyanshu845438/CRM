<!--importing results-->
<div class="importing-step-3" id="importing-step-3">
    <div class="x-splash-image"><img src="<?php echo e(url('public/images/import-results-partial.svg')); ?>"
            alt="importing completed" /></div>
    <div class="x-splash-text">
        <h3><?php echo app('translator')->get('lang.importing_completed'); ?></h3>
    </div>
    <div class="x-splash-subtext p-b-15">
        <span class="label label-rounded label-success p-r-16 p-l-16"><strong><?php echo e($count_passed); ?></strong>
            <?php echo app('translator')->get('lang.records_imported'); ?></span>
        <span class="label label-rounded label-danger p-r-16 p-l-16"><strong><?php echo e($error_count); ?></strong>
            <?php echo app('translator')->get('lang.records_failed'); ?></span>
    </div>
    <!--see error log-->
    <div class="x-splash-failed-text">
        <a href="#" class="js-ajax-request" data-loading-target="commonModalBody"
            data-url="<?php echo e(url('import/errorlog?ref='.$error_ref)); ?>"><?php echo app('translator')->get('lang.click_to_view_error_log'); ?></a>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/import/common/partial.blade.php ENDPATH**/ ?>