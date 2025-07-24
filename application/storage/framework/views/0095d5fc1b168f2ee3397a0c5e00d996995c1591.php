<!--CRUMBS CONTAINER (RIGHT)-->
<div class="col-md-12  col-lg-7 p-b-9 align-self-center text-right <?php echo e($page['list_page_actions_size'] ?? ''); ?> <?php echo e($page['list_page_container_class'] ?? ''); ?>"
    id="list-page-actions-container">
    <div id="list-page-actions">
        <!--SEARCH BOX-->
        <?php if( config('visibility.list_page_actions_search')): ?>
        <div class="header-search" id="header-search">
            <i class="sl-icon-magnifier"></i>
            <input type="text" class="form-control search-records list-actions-search"
                data-url="<?php echo e($page['dynamic_search_url'] ?? ''); ?>" data-type="form" data-ajax-type="post"
                data-form-id="header-search" id="search_query" name="search_query" placeholder="<?php echo app('translator')->get('lang.search'); ?>">
        </div>
        <?php endif; ?>

        <!--TOGGLE STATS-->
        <?php if( config('visibility.stats_toggle_button')): ?>
        <button type="button" data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.quick_stats'))); ?>"
            class="list-actions-button btn btn-page-actions waves-effect waves-dark js-toggle-stats-widget update-user-ux-preferences"
            data-type="statspanel" data-progress-bar="hidden"
            data-url-temp="<?php echo e(url('/')); ?>/<?php echo e(auth()->user()->team_or_contact); ?>/updatepreferences" data-url=""
            data-target="list-pages-stats-widget">
            <i class="ti-stats-up"></i>
        </button>
        <?php endif; ?>

        <!--FILTERING-->
        <?php if(config('visibility.list_page_actions_filter_button')): ?>
        <button type="button" data-toggle="tooltip" title="<?php echo app('translator')->get('lang.filter'); ?>"
            class="list-actions-button btn btn-page-actions waves-effect waves-dark js-toggle-side-panel"
            data-target="sidepanel-filter-contracts">
            <i class="mdi mdi-filter-outline"></i>
        </button>
        <?php endif; ?>

        <!--ADD NEW ITEM-->
        <?php if(config('visibility.list_page_actions_add_button')): ?>
        <button type="button"
            class="btn btn-danger btn-add-circle edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
            data-toggle="modal" data-target="#commonModal"
            data-url="<?php echo e(url('contracts/create?contractresource_id=' . request('contractresource_id') . '&contractresource_type=' . request('contractresource_type'))); ?>"
            data-loading-target="commonModalBody" data-modal-title="<?php echo app('translator')->get('lang.add_contract'); ?>"
            data-action-url="<?php echo e(url('contracts?contractresource_id=' . request('contractresource_id') . '&contractresource_type=' . request('contractresource_type'))); ?>"
            data-action-method="POST" data-modal-size="modal-lg" data-action-ajax-loading-target="commonModalBody">
            <i class="ti-plus"></i>
        </button>
        <?php endif; ?>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/contracts/components/misc/list-page-actions.blade.php ENDPATH**/ ?>