 <?php $__env->startSection('content'); ?>
<!-- main content -->
<div class="container-fluid">

    <!--page heading-->
    <div class="row page-titles">


        <?php echo $__env->make('pages.client.components.misc.crumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('pages.client.components.misc.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <!--page heading-->

    <!-- page content -->
    <div class="row">
        <!--left panel-->
        <div class="col-xl-3 d-none d-xl-block">
            <?php echo $__env->make('pages.client.components.misc.leftpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!--left panel-->
        <!-- Column -->
        <div class="col-xl-9 col-lg-12">
            <div class="card h-100">

                <!--top nav-->
                <?php echo $__env->make('pages.client.components.misc.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- main content -->
                <div class="tab-content">
                    <div class="tab-pane active ext-ajax-container" id="clients_ajaxtab" role="tabpanel">
                        <div class="card-body tab-body tab-body-embedded p-t-40" id="embed-content-container">
                            <!--dynamic content here-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!--page content -->

</div>
<!--main content -->
<span class="hidden" id="dynamic-client-content" class="js-ajax-ux-request"  data-url="<?php echo e($page['dynamic_url'] ?? ''); ?>" data-loading-target="embed-content-container">placeholder</span>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/client/wrapper.blade.php ENDPATH**/ ?>