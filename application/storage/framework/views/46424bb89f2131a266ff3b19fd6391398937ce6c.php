
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form">


    <!--welcome-->
    <div class="row">
        <div class="col-12">
            <div class="page-notification-imaged">
                <img src="<?php echo e(url('/')); ?>/public/images/email.png" alt="Application Settings" />
                <div class="message">
                    <h4><?php echo e(cleanLang(__('lang.select_email_template_from_dropdown'))); ?></h2>
                </div>
            </div>
        </div>
    </div>

    <!--select dropdown-->
    <div id="list-page-actions" class="hidden pull-right w-px-400 select-email-template-dropdown"
        id="fx-settings-emailtemplates-dropdown">
        <form id="fix-form-email-templates">
            <select class="select2-basic form-control form-control-sm text-left" data-url="" id="selectEmailTemplate"
                name="selectEmailTemplate">
                <option value="0"><?php echo app('translator')->get('lang.select_a_template'); ?></option>
                <!--contracts-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.contracts'))); ?> ]">
                    <?php $__currentLoopData = $contracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--estimates-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.estimates'))); ?> ]">
                    <?php $__currentLoopData = $estimates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--financial-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.financial'))); ?> ]">
                    <?php $__currentLoopData = $billing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--leads-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.leads'))); ?> ]">
                    <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--projects-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.projects'))); ?> ]">
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--propsoal-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.proposals'))); ?> ]">
                    <?php $__currentLoopData = $proposals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--subscriptions-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.subscriptions'))); ?> ]">
                    <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--system-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.system'))); ?> ]">
                    <?php $__currentLoopData = $system; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--tasks-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.tasks'))); ?> ]">
                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--tickets-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.tickets'))); ?> ]">
                    <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--users-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.users'))); ?> ]">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--other-->
                <optgroup label="[ <?php echo e(cleanLang(__('lang.other'))); ?> ]">
                    <?php $__currentLoopData = $other; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLang($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <!--modules [HIDDEN]--
                <optgroup class="hidden" label="[ <?php echo e(cleanLang(__('lang.modules'))); ?> ]">
                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(url('settings/email/templates/'.$template->emailtemplate_id)); ?>">
                        <?php echo e(runtimeLangModules($template->emailtemplate_lang)); ?>

                        <?php echo e(runtimeEmailTemplates($template->emailtemplate_type)); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
            -->
            </select>
        </form>
    </div>
</form>

<?php if(config('system.settings_type') == 'standalone'): ?>
<!--[standalone] - settings documentation help-->
<a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
        class="ti-info-alt"></i>
    <?php echo e(cleanLang(__('lang.help_documentation'))); ?>

</a>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/email/templates/welcome.blade.php ENDPATH**/ ?>