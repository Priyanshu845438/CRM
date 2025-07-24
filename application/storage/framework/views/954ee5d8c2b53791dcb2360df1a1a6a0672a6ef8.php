<!--client email-->
<div class="form-group row">
    <label class="col-12 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.to'); ?></label>
    <!--specified [standard user]-->
    <?php if($recipients['specified']): ?>
    <div class="col-12">
        <select class="select2-basic form-control form-control-sm select2-preselected" id="email_to" name="email_to">
            <option></option>
            <?php $__currentLoopData = $recipients['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user['email']); ?>"><?php echo e($user['name']); ?> (<?php echo e($user['email']); ?>)</option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <?php endif; ?>
    <!--no user specified-->
    <?php if(!$recipients['specified']): ?>
    <div class="col-sm-12 col-lg-9">
        <input type="text" class="form-control form-control-sm" id="email_to" name="email_to">
    </div>
    <?php endif; ?>
</div>

<!--subject-->
<div class="form-group row">
    <label class="col-12 text-left control-label col-form-label"><?php echo app('translator')->get('lang.subject'); ?></label>
    <div class="col-12">
        <input type="text" class="form-control form-control-sm" id="email_subject" name="email_subject" placeholder="">
    </div>
</div>

<!--template-->
<div class="form-group row">
    <label class="col-12 text-left control-label col-form-label"><?php echo app('translator')->get('lang.use_a_template'); ?></label>
    <div class="col-12">
        <select class="select2-basic form-control form-control-sm select2-preselected" id="email_template_selector"
            name="email_template_selector">
            <option></option>
            <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($template->webmail_template_id); ?>"
                data-url="<?php echo e(url('appwebmail/prefill?id='.$template->webmail_template_id)); ?>"><?php echo e($template->webmail_template_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>


<!--text area-->
<div class="form-group row">
    <div class="col-12">
        <textarea class="form-control form-control-sm tinymce-textarea" rows="5" name="email_body"
            id="email_body"></textarea>
    </div>
</div>

<!--fileupload-->
<div class="form-group row">
    <div class="col-12">
        <div class="dropzone dz-clickable" id="email_files">
            <div class="dz-default dz-message">
                <i class="icon-Upload-toCloud"></i>
                <span><?php echo app('translator')->get('lang.drag_drop_file'); ?></span>
            </div>
        </div>
    </div>
</div>
<!--#fileupload-->


<!--from email-->
<div class="form-group row">
    <label class="col-12 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.from'); ?></label>
    <div class="col-12">
        <select class="select2-basic form-control form-control-sm select2-preselected" id="email_from"
            name="email_from">
            <option value="system_email"><?php echo e(config('system.settings_email_from_name')); ?>

                (<?php echo e(config('system.settings_email_from_address')); ?>)</option>
            <option value="users_email"><?php echo e(auth()->user()->full_name); ?> (<?php echo e(auth()->user()->email); ?>)</option>
        </select>
    </div>
</div>

<!--warning-->
<div class="alert alert-warning"><?php echo app('translator')->get('lang.email_address_warning'); ?></div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/webmail/compose/modal.blade.php ENDPATH**/ ?>