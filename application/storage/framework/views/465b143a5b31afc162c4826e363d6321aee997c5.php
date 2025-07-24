<?php if(request('filter_field_type') =='dropdown'): ?>
<div class="col-12">
    <div class="form-group row m-b-0">
        <label class="col-12">List options (<?php echo app('translator')->get('lang.type_list_options'); ?>)</label>
        <div class="col-12">
            <select name="customfields_datapayload[<?php echo e($field->customfields_id); ?>]" id="customfields_datapayload[<?php echo e($field->customfields_id); ?>]"
                class="form-control form-control-sm select2-basic select2-multiple select2-tags-with-spaces select2-hidden-accessible"
                multiple="multiple" tabindex="-1" aria-hidden="true">
                <?php echo runtimeCustomFieldsJsonLists($field->customfields_datapayload, true); ?>

            </select>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/customfields/settings/dropdown.blade.php ENDPATH**/ ?>