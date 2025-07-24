
<?php $__env->startSection('settings-page'); ?>
<div class="table-responsive">
    <table class="table" id="standard-fields-sorting" data-type="form" data-form-id="standard-fields-sorting"
        data-ajax-type="post" data-url="<?php echo e(url('settings/customfields/update-standard-form-positions')); ?>"
        data-progress-bar='hidden'>
        <thead>
            <tr>


                <th><span><?php echo app('translator')->get('lang.form_field_name'); ?></span></th>
                <th class="w-px-140"><?php echo app('translator')->get('lang.required'); ?></th>
                <th class="w-px-120"><?php echo app('translator')->get('lang.options'); ?></th>
            </tr>
        </thead>
        <tbody id="standard-fields-container">
            <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="toggle-table-settings-row-<?php echo e($field->customfields_id); ?>"
                id="toggle-table-settings-row-<?php echo e($field->customfields_id); ?>">
                <td>
                    <!--sorting data-->
                    <input type="hidden" name="sort-fields[<?php echo e($field->customfields_id); ?>]"
                        value="<?php echo e($field->customfields_id); ?>">
                    <span class="mdi mdi-drag-vertical cursor-pointer"></span> <span>
                        <?php echo e($field->customfields_title); ?></span></td>
                <td class="p-t-11 p-b-0">
                    <input type="checkbox" id="customfields_required[<?php echo e($field->customfields_id); ?>]"
                        name="customfields_required[<?php echo e($field->customfields_id); ?>]"
                        class="filled-in chk-col-light-blue custom-fields-standard-form-required-checkbox"
                        data-url="<?php echo e(url('/settings/customfields/standard-form-required')); ?>"
                        data-form-id="standard-fields-sorting" data-progress-bar='hidden' data-loading-target=""
                        data-ajax-type="PUT" data-type="form" <?php echo e(runtimePrechecked($field->customfields_required)); ?>>
                    <label class="m-0" for="customfields_required[<?php echo e($field->customfields_id); ?>]"></label>
                </td>
                <td> <button type="button" class="btn btn-danger btn-xs confirm-action-danger"
                        data-confirm-title="<?php echo app('translator')->get('lang.delete_item'); ?>" data-confirm-text="<?php echo app('translator')->get('lang.are_you_sure'); ?>"
                        data-ajax-type="DELETE" data-url="<?php echo e(url('/settings/customfields/'.$field->customfields_id)); ?>">
                        <?php echo app('translator')->get('lang.remove'); ?>
                    </button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="alert alert-info" id="custom-fields-display-container">
        <input type="checkbox" 
            name="custom_fields_display_setting" id="custom_fields_display_setting"
            class="filled-in chk-col-light-blue"
            data-url="<?php echo e(url('/settings/customfields/standard-form-display-settings?tab_menu_type='.$payload['tab_menu_type'])); ?>" data-form-id="custom-fields-display-container"
            data-loading-target="" data-ajax-type="PUT" data-type="form"
            <?php echo e(runtimePrechecked($payload['display_setting'])); ?>>
        <label class="m-0" for="custom_fields_display_setting"><?php echo app('translator')->get('lang.show_form_fields_in_collapsed_toggle'); ?><a class="fancybox"
                href="<?php echo e(url('/storage/system/images/info-customfields-toggle.jpg')); ?>"
                title="2020-06-21_214237.jpg" alt="2020-06-21_214237.jpg">
                 <i class="ti-info-alt"></i></a>
        </label>
    </div>

    <div class="alert alert-info"><?php echo app('translator')->get('lang.info_standard_form_info_1'); ?></div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/customfields/standard-form.blade.php ENDPATH**/ ?>