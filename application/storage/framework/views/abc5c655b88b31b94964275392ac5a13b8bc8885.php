<div class="card count-<?php echo e(@count($notes ?? [])); ?>" id="notes-table-wrapper">
    <div class="card-body">
        <div class="table-responsive">
            <?php if(@count($notes ?? []) > 0): ?>
            <table id="note-foo-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
                <thead>
                    <tr>
                        <?php if(config('visibility.notes_col_checkboxes')): ?>
                        <th class="list-checkbox-wrapper">
                            <!--list checkbox-->
                            <span class="list-checkboxes display-inline-block w-px-20">
                                <input type="checkbox" id="listcheckbox-notes" name="listcheckbox-notes"
                                    class="listcheckbox-all filled-in chk-col-light-blue"
                                    data-actions-container-class="notes-checkbox-actions-container"
                                    data-children-checkbox-class="listcheckbox-notes">
                                <label for="listcheckbox-notes"></label>
                            </span>
                        </th>
                        <?php endif; ?>
                        <th class="notes_col_added"><?php echo e(cleanLang(__('lang.added_by'))); ?></th>
                        <th class="notes_col_title"><?php echo e(cleanLang(__('lang.title'))); ?></th>
                        <th class="notes_col_tags"><?php echo e(cleanLang(__('lang.tags'))); ?></th>
                        <th class="notes_col_date"><?php echo e(cleanLang(__('lang.date'))); ?></th>
                        <th class="notes_col_action"><a href="javascript:void(0)"><?php echo e(cleanLang(__('lang.action'))); ?></a></th>
                    </tr>
                </thead>
                <tbody id="notes-td-container">
                    <!--ajax content here-->
                    <?php echo $__env->make('pages.notes.components.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                </tfoot>
            </table>
            <?php endif; ?> <?php if(@count($notes ?? []) == 0): ?>
            <!--nothing found-->
            <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--nothing found-->
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/notes/components/table/table.blade.php ENDPATH**/ ?>