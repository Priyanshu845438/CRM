<div class="splash-image" id="updatePasswordSplash">
    <img src="<?php echo e(url('/')); ?>/public/images/theme.svg" alt="404 - Not found" />
</div>
<div class="splash-text">
    <?php echo e(cleanLang(__('lang.change_theme'))); ?>

</div>

<!--item-->
<div class="form-group row m-t-20">
    <div class="col-sm-12">
        <select class="select2-basic form-control form-control-sm select2-preselected" id="pref_theme"
            name="pref_theme" data-preselected="<?php echo e(auth()->user()->pref_theme ?? ''); ?>">
                <?php $__currentLoopData = config('theme.list'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($theme); ?>"><?php echo e(runtimeThemeName($theme)); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/user/modals/change-theme.blade.php ENDPATH**/ ?>