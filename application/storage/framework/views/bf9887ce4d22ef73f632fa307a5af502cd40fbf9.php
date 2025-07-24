<div class="table-responsive">
    <?php if(@count($emails ?? []) > 0): ?>
    <table id="demo-email-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
        <thead>
            <tr>
                <th class="emails_col_emailqueue_created"><?php echo app('translator')->get('lang.date'); ?></th>
                <th class="emails_col_emailqueue_to"><?php echo app('translator')->get('lang.to'); ?></th>
                <th class="emails_col_emailqueue_subject"><?php echo app('translator')->get('lang.subject'); ?></th>
                <th class="emails_col_emailqueue_status"><?php echo app('translator')->get('lang.status'); ?></th>
                <th class="emails_col_action"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.action'); ?></a></th>
            </tr>
        </thead>
        <tbody id="emails-td-container">
            <!--ajax content here-->
            <?php echo $__env->make('pages.settings.sections.email.queue.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--ajax content here-->
        </tbody>
        <tfoot>
            <tr>
                <td colspan="20">
                    <!--load more button-->
                    <?php echo $__env->make('misc.load-more-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--load more button-->
                </td>
            </tr>
            <tr>
                <td colspan="20">
                    <div class="text-right">
                        <!--re-queue emails-->
                        <button type="button" class="btn btn-info btn-sm waves-effect text-left confirm-action-info"
                            data-confirm-title="<?php echo app('translator')->get('lang.queue_all_email_again'); ?>"
                            data-confirm-text="<?php echo app('translator')->get('lang.are_you_sure'); ?>" data-ajax-type="DELETE"
                            data-url="<?php echo e(url('settings/email/queue/requeue')); ?>"><?php echo app('translator')->get('lang.queue_all_email_again'); ?></button>
                        <!--purge emailqueue-->
                        <button type="button" class="btn btn-danger btn-sm waves-effect text-left confirm-action-danger"
                            data-confirm-title="<?php echo app('translator')->get('lang.delete_all_emails'); ?>"
                            data-confirm-text="<?php echo app('translator')->get('lang.are_you_sure'); ?>" data-ajax-type="DELETE"
                            data-url="<?php echo e(url('settings/email/queue/purge')); ?>"><?php echo app('translator')->get('lang.delete_all_emails'); ?></button>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
    <?php endif; ?>
    <?php if(@count($emails ?? []) == 0): ?>
    <!--nothing found-->
    <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--nothing found-->
    <?php endif; ?>
</div>

<?php if(config('system.settings_type') == 'standalone'): ?>
<!--[standalone] - settings documentation help-->
<a href="https://growcrm.io/documentation" target="_blank" class="btn btn-sm btn-info help-documentation"><i
        class="ti-info-alt"></i>
    <?php echo e(cleanLang(__('lang.help_documentation'))); ?>

</a>
<?php endif; ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/settings/sections/email/queue/table.blade.php ENDPATH**/ ?>