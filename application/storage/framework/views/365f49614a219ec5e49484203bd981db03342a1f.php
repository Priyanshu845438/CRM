
<?php $__env->startSection('settings-page'); ?>
<!--heading-->
<form>
    <div class="table-responsive p-b-30 customfields-table">
        <table id="custom-fields" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10"">
            <thead>
            <th><?php echo e(cleanLang(__('lang.form_field_name'))); ?></th>
            <th class=" w-px-80 actions_column"><?php echo e(cleanLang(__('lang.settings'))); ?></th>
            </tr>
            </thead>
            <tbody id="customfields-td-container">
                <?php echo $__env->make('pages.settings.sections.customfields.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <!--load more button-->
                        <?php echo $__env->make('misc.load-more-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!--load more button-->
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <?php if(config('system.settings_type') == 'standalone'): ?>
    <!--[standalone] - settings documentation help-->
    <div>
        <a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
                class="ti-info-alt"></i>
            <?php echo e(cleanLang(__('lang.help_documentation'))); ?></a>
    </div>
    <?php endif; ?>

    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="custom-fields-save-button"
            class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request"
            data-url="<?php echo e($payload['save_button_url']); ?>" data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable"><?php echo e(cleanLang(__('lang.save_changes'))); ?></button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/customfields/table.blade.php ENDPATH**/ ?>