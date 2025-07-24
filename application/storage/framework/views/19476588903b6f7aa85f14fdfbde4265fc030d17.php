 <?php $__env->startSection('content'); ?>
<!-- main content -->
<div class="container-fluid" id="embed-content-container">

    <!-- page content -->
    <form class="input-form" action="/kb/search" method="get">
        <div class="row p-t-10" id="knowledgebase-search-field">
            <div class="col-lg-12">
                <h2 class="text-info text-center"><?php echo e(cleanLang(__('lang.knowledgebase'))); ?></h2>
                <div class="text-center p-t-5 p-b-40 m-b-30">
                    <h5 class="display-inline-block"><?php echo e(cleanLang(__('lang.get_help_from_knowledgebase'))); ?></h5> <h5 class="display-inline-block"><a href="/tickets/create"><?php echo app('translator')->get('lang.you_can_open_support_ticket'); ?></a></h5>
                </div>
                <div class="input-group hidden">
                    <input type="text" class="form-control" name="search_query" placeholder="<?php echo e(cleanLang(__('lang.search'))); ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit"><?php echo e(cleanLang(__('lang.search'))); ?></button>
                    </span>
                </div>
            </div>
        </div>
    </form>

    <!-- page content -->
    <div class="row" id="categories-container">
        <?php echo $__env->make('pages.kbcategories.components.list.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<!--main content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/kbcategories/page.blade.php ENDPATH**/ ?>