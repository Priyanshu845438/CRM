<!--modal-->
<div class="modal" role="dialog" aria-labelledby="itemsModal" id="itemsModal" <?php echo runtimeAllowCloseModalOptions(); ?>>
    <div class="modal-dialog modal-xl" id="itemsModalContainer">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="itemsModalTitle"><?php echo e(cleanLang(__('lang.invoice_products'))); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body p-t-10 p-b-0" id="itemsModalBody">
                <!--search box-->
                <div class="clearfix">
                    <div class="header-search pull-right"  id="header-search-items">
                        <i class="sl-icon-magnifier"></i>
                            <input type="text" class="form-control search-records list-actions-search"
                                data-url="<?php echo e(url('items/search?action=search&itemresource_type=invoice')); ?>"
                                data-type="form" data-ajax-type="post" data-form-id="header-search-items" id="search_query" name="search_query" placeholder="<?php echo e(cleanLang(__('lang.search'))); ?>">
                    </div>
                </div>
                <div id="items-table-wrapper">
                    <!--dynamic content here-->
                </div>
            </div>

            <div class="modal-footer p-t-0 p-b-20 invoice-billing-footer" id="itemsModalFooter">
                <a  id="itemsModalSelectButton" href="javascript:void(0);"
                    class="btn btn-rounded-x btn-danger waves-effect text-left hidden" data-url="" data-loading-target=""
                    data-ajax-type="POST" data-on-start-submit-button="disable"><?php echo e(cleanLang(__('lang.add_selected_items'))); ?></a>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/modals/items.blade.php ENDPATH**/ ?>