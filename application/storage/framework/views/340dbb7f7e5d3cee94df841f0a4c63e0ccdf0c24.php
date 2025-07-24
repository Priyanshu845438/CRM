<!--text field-->
<div class="form-group row">
    <label class="col-12 text-left control-label col-form-label <?php echo e(runtimeWebformRequiredBold($payload['required'])); ?>">
        <?php echo e($payload['label']); ?><?php echo e(runtimeWebformRequiredAsterix($payload['required'])); ?> <?php if($payload['tooltip'] != ''): ?>
        <span class="align-middle text-default font-16" data-toggle="tooltip" title="<?php echo e($payload['tooltip']); ?>"
            data-placement="top"><i class="ti-info-alt"></i></span>
        <?php endif; ?></label>
    <div class="col-12">
        <input type="text" class="<?php echo e($payload['class']); ?>" id="<?php echo e($payload['name']); ?>"
            placeholder="<?php echo e($payload['placeholder']); ?>" name="<?php echo e($payload['name']); ?>">
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/webform/elements/text.blade.php ENDPATH**/ ?>