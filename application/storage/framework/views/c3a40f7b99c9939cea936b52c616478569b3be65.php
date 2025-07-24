<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?php echo app('translator')->get('lang.error_log'); ?></h4>
        <h6 class="card-subtitle"><?php echo app('translator')->get('lang.the_following_records_could_not_be_imported'); ?></h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><?php echo app('translator')->get('lang.row'); ?></th>
                        <th><?php echo app('translator')->get('lang.column_name'); ?></th>
                        <th><?php echo app('translator')->get('lang.error_message'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $log->log_payload; ?>

                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/import/common/errorlog.blade.php ENDPATH**/ ?>