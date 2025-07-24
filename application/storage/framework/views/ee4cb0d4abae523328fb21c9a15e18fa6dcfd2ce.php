<div class="table-responsive" id="file-folders-table">
    <?php if(@count($folders ?? []) > 0): ?>
    <table id="demo-folder-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
        <thead>
            <tr>
                <th class="col_filefolder_name"><?php echo app('translator')->get('lang.name'); ?></th>
                <th class="col_filefolder_created"><?php echo app('translator')->get('lang.date'); ?></th>
                <th class="col_filefolder_creatorid"><?php echo app('translator')->get('lang.created_by'); ?></th>
                <th class="col_action"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.actions'); ?></a></th>
            </tr>
        </thead>
        <tbody id="folders-td-container">
            <!--ajax content here-->
            <?php echo $__env->make('pages.settings.sections.files.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--ajax content here-->
        </tbody>
    </table>
    <?php endif; ?>
    <?php if(@count($folders ?? []) == 0): ?>
    <!--nothing found-->
    <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--nothing found-->
    <?php endif; ?>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/files/table/table.blade.php ENDPATH**/ ?>