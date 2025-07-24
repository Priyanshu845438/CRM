<div class="card count-<?php echo e(@count($tags ?? [])); ?>" id="tags-table-wrapper">
    <div class="card-body">
        <div class="table-responsive">
            <?php if(@count($tags ?? []) > 0): ?>
            <table id="tag-foo-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
                <thead>
                    <tr>
                        <th class="tags_col_date">
                            <a class="js-ajax-ux-request js-list-sorting" id="sort_tag_created"
                                href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/tags?action=sort&orderby=tag_created&sortorder=asc')); ?>"><?php echo e(cleanLang(__('lang.date_created'))); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                        <th class="tags_col_title">
                            <a class="js-ajax-ux-request js-list-sorting" id="sort_tag_title" href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/tags?action=sort&orderby=tag_title&sortorder=asc')); ?>"><?php echo e(cleanLang(__('lang.title'))); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a>
                        </th>

                        <th class="tags_col_creator">
                            <a class="js-ajax-ux-request js-list-sorting" id="sort_created_by" href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/tags?action=sort&orderby=created_by&sortorder=asc')); ?>"><?php echo e(cleanLang(__('lang.created_by'))); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                        <th class="tags_col_resourcetype">
                            <a class="js-ajax-ux-request js-list-sorting" id="sort_tagresource_type"
                                href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/tags?action=sort&orderby=tagresource_type&sortorder=asc')); ?>"><?php echo e(cleanLang(__('lang.resource_type'))); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                        <th class="tags_col_resourceid">
                            <a class="js-ajax-ux-request js-list-sorting" id="sort_tagresource_id"
                                href="javascript:void(0)"
                                data-url="<?php echo e(urlResource('/tags?action=sort&orderby=tagresource_id&sortorder=asc')); ?>"><?php echo e(cleanLang(__('lang.resource_id'))); ?><span
                                    class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                        <th class="tags_col_action"><a href="javascript:void(0)"><?php echo e(cleanLang(__('lang.action'))); ?></a>
                        </th>
                    </tr>
                </thead>
                <tbody id="tags-td-container">
                    <!--ajax content here-->
                    <?php echo $__env->make('pages.tags.components.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php endif; ?> <?php if(@count($tags ?? []) == 0): ?>
            <!--nothing found-->
            <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--nothing found-->
            <?php endif; ?>

            <?php if(config('system.settings_type') == 'standalone'): ?>
            <!--[standalone] - settings documentation help-->
            <div>
                <a href="https://growcrm.io/documentation" target="_blank"
                    class="btn btn-sm btn-info help-documentation"><i class="ti-info-alt"></i>
                    <?php echo e(cleanLang(__('lang.help_documentation'))); ?>

                </a>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/tags/components/table/table.blade.php ENDPATH**/ ?>