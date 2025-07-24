
<!--SECOND STEP FORM-->
<?php $__env->startSection('second-step-form'); ?>
<div class="form-group form-group-checkbox row">
    <label class="col-sm-12 col-lg-5 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.send_welcome_email'))); ?>*</label>
    <div class="col-sm-12 col-lg-7 text-left p-t-5">
        <input type="checkbox" id="send_email" name="send_email" class="filled-in chk-col-light-blue" checked>
        <label for="send_email"></label>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.import.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/import/clients/import.blade.php ENDPATH**/ ?>