<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr class="toggle-table-settings-row-<?php echo e($field->customfields_id); ?>">
    <!--title-->
    <td class="p-r-40">
        <input type="text" class="form-control form-control-sm x-form-field js-settings-customfiel-input"
            id="add_invoices_date" data-settings-button-id="settings-customfiel-options-<?php echo e($field->customfields_id); ?>"
            name="customfields_title[<?php echo e($field->customfields_id); ?>]" value="<?php echo e($field->customfields_title); ?>">
    </td>

    <!--settings-->
    <td class="td-checkbox">
        <span class="list-table-action dropdown font-size-inherit">
            <button type="button" title=""
                data-settings-row-id="customfields_settings_row_<?php echo e($field->customfields_id); ?>"
                data-settings-common-rows="toggle-table-settings-row-<?php echo e($field->customfields_id); ?>"
                class="data-toggle-action-tooltip btn btn-outline-default btn-circle btn-sm js-toggle-table-settings-row">
                <i class="sl-icon-settings"></i>
            </button>
            <!--info tooltip-->
            <span class="align-middle text-info display-inline-block m-t-5 font-16" data-toggle="tooltip"
                title="<?php echo e(customFieldImportingName($field->customfields_name)); ?>" data-placement="top"><i class="ti-info-alt"></i></span>
        </span>
    </td>
</tr>


<!--leads settings-->
<?php echo $__env->make('pages.settings.sections.customfields.settings.leads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pages.settings.sections.customfields.settings.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pages.settings.sections.customfields.settings.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pages.settings.sections.customfields.settings.tasks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pages.settings.sections.customfields.settings.tickets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/customfields/ajax.blade.php ENDPATH**/ ?>