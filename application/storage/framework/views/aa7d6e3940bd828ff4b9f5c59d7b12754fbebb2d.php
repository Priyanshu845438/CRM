<div id="test-email-form">
    <?php if($show == 'form'): ?>
    <div class="splash-image">
        <img src="<?php echo e(url('/')); ?>/public/images/send-email.svg" alt="<?php echo e(cleanLang(__('lang.send_test_email'))); ?>" />
    </div>
    <div class="splash-text">
        <h4><?php echo e(cleanLang(__('lang.send_test_email'))); ?></h4>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="email" name="email"
                placeholder="<?php echo e(cleanLang(__('lang.email_address'))); ?>">
        </div>
    </div>
    <?php else: ?>
    <div class="splash-image">
        <img src="<?php echo e(url('/')); ?>/public/images/general-error.png" alt="<?php echo e(cleanLang(__('lang.error'))); ?>" />
    </div>
    <div class="splash-text">
        <div class="alert alert-danger"><?php echo e(cleanLang(__('lang.cronjob_and_emails'))); ?></div>
    </div>
    <div class="splash-text p-b-40">
        <a href="https://growcrm.io/documentation/cron-job-settings/" target="_blank"
            class="btn btn-sm btn-info  help-documentation"><i class="ti-info-alt"></i>
            <?php echo e(cleanLang(__('lang.see_documentation_for_details'))); ?></a>
    </div>
    <?php endif; ?>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/email/modals/test-email.blade.php ENDPATH**/ ?>