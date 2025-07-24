<ul class="nav nav-tabs customtab" role="tablist">
    <!--form builder-->
    <li class="nav-item"> <a class="nav-link <?php echo e($page['menutab_builder'] ?? ''); ?>"
            href="<?php echo e(url('/app/settings/formbuilder/'.$webform->webform_id.'/build')); ?>" role="tab"><span
                class="hidden-sm-up"><i class="ti-home"></i></span> <span
                class="hidden-xs-down"><?php echo app('translator')->get('lang.form_builder'); ?></span></a> </li>
    <!--form settings-->
    <li class="nav-item"> <a class="nav-link cursor-pointer <?php echo e($page['menutab_settings'] ?? ''); ?>"
            href="<?php echo e(url('/app/settings/formbuilder/'.$webform->webform_id.'/settings')); ?>" role="tab"><span
                class="hidden-sm-up ajax-request" href="javascript:void(0);"><i class="ti-user"></i></span> <span
                class="hidden-xs-down"><?php echo app('translator')->get('lang.form_settings'); ?></span></a>
    </li>
    <!--embed code-->
    <li class="nav-item"> <a class="nav-link cursor-pointer <?php echo e($page['menutab_embed'] ?? ''); ?>"
            href="<?php echo e(url('/app/settings/formbuilder/'.$webform->webform_id.'/integrate')); ?>" role="tab"><span
                class="hidden-sm-up"><i class="ti-email"></i></span> <span
                class="hidden-xs-down"><?php echo app('translator')->get('lang.embed_form'); ?></span></a>
    </li>
</ul><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/formbuilder/misc/tabs.blade.php ENDPATH**/ ?>