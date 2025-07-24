<div class="splash-image" id="updatePasswordSplash">
    <img src="<?php echo e(url('/')); ?>/public/images/update-avatar.png" alt="update avatar" />
</div>
<div class="splash-text">
    <?php echo e(cleanLang(__('lang.update_your_profile_picture'))); ?>

</div>


<!--fileupload-->
<div class="form-group row">
    <div class="col-12">
        <div class="dropzone dz-clickable text-center file-upload-box" id="fileupload_avatar">
            <div class="dz-default dz-message">
                <div>
                    <h4><?php echo e(cleanLang(__('lang.drag_drop_file'))); ?></h4>
                </div>
                <div class="p-t-10"><small><?php echo e(cleanLang(__('lang.allowed_file_types'))); ?>: (jpg)</small></div>
                <div class=""><small><?php echo e(cleanLang(__('lang.minimum_size'))); ?>: (80 x 80) -
                        <?php echo e(cleanLang(__('lang.maximum_size'))); ?>: (500 x 500)</small></div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/user/modals/update-avatar.blade.php ENDPATH**/ ?>