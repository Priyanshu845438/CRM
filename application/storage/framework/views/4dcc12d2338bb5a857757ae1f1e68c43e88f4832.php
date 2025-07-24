    <!--Editing panel-->
    <div class="row" id="email-templates-editing">
        <!--editor-->
        <div class="col-sm-12 col-lg-9 loading" id="emailEditWrapper">
            <div class="hidden" id="emailEditContainer">
                <?php if($template->emailtemplate_real_template == 'yes'): ?>
                <div class="form-group row">
                    <label class="col-12 control-label col-form-label required"><?php echo e(cleanLang(__('lang.subject'))); ?></label>
                    <div class="col-12">
                        <input type="text" class="form-control form-control-sm"
                            value="<?php echo e($template->emailtemplate_subject); ?>" id="emailtemplate_subject"
                            name="emailtemplate_subject" placeholder="Subject">
                    </div>
                </div>
                <?php else: ?>
                <input type="hidden" class="form-control form-control-sm" value="<?php echo e($template->emailtemplate_subject); ?>"
                    id="emailtemplate_subject" name="emailtemplate_subject" placeholder="Subject">
                <?php endif; ?>
                <div class="form-group">
                    <?php if($template->emailtemplate_real_template == 'yes'): ?>
                    <label class="control-label col-form-label required"><?php echo e(cleanLang(__('lang.email_body'))); ?></label>
                    <?php endif; ?>
                    <textarea class="emailtemplate_body" name="emailtemplate_body" id="emailtemplate_body">
                <?php echo $template->emailtemplate_body; ?>

                    </textarea>
                </div>
                <?php if($template->emailtemplate_show_enabled == 'yes'): ?>
                <div class="form-group form-group-checkbox row">
                    <div class="col-12">
                        <label class="text-left control-label col-form-label required p-r-3"
                            ><?php echo e(cleanLang(__('lang.enabled'))); ?></label>
                        <span class="text-right p-l-5">
                            <input type="checkbox" id="emailtemplate_status" name="emailtemplate_status"
                                class="filled-in chk-col-light-blue"
                                <?php echo e(runtimePrechecked($template->emailtemplate_status)); ?>>
                            <label class=" display-inline"for="emailtemplate_status"></label>
                        </span>
                    </div>
                </div>
                <?php endif; ?>
                <!--form buttons-->
                <div class="text-right p-t-30" id="email-templates-buttons-container">
                    <button type="submit" id="submitButton"
                        class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request"
                        data-url="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>" data-type="form"
                        data-loading-target="email-templates-buttons-container" data-form-id="email-templates-editing"
                        data-ajax-type="POST" data-on-start-submit-button="disable"><?php echo e(cleanLang(__('lang.save_changes'))); ?></button>
                </div>
            </div>
        </div>
        <!--side panel-->
        <div class="col-sm-12 col-lg-3">
            <div id="fx-settings-email-templates-side">
                <div class="p-b-40">
                    <h4><?php echo e(cleanLang(__('lang.template_variables'))); ?></h4>
                    <?php $__currentLoopData = $variables['template']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div><?php echo e($variable); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="p-b-40">
                    <h4><?php echo e(cleanLang(__('lang.general_variables'))); ?></h4>
                    <?php $__currentLoopData = $variables['general']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div><?php echo e($variable); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/email/templates/edit.blade.php ENDPATH**/ ?>