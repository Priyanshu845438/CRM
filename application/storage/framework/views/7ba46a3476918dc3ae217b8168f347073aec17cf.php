 <?php $__env->startSection('content'); ?>
<!-- main content -->
<div class="container-fluid <?php echo e($page['mode'] ?? ''); ?>" id="invoice-container">

    <!--HEADER SECTION-->
    <div class="row page-titles">

        <!--BREAD CRUMBS & TITLE-->
        <div class="col-md-12 col-lg-7 align-self-center <?php echo e($page['crumbs_special_class'] ?? ''); ?>" id="breadcrumbs">
            <!--attached to project-->
            <a id="InvoiceTitleAttached"
                class="<?php echo e(runtimeInvoiceAttachedProject('project-title', $bill->bill_projectid)); ?>"
                href="<?php echo e(_url('projects/'.$bill->bill_projectid)); ?>">
                <h3 class="text-themecolor" id="InvoiceTitleProject"><?php echo e($page['heading'] ?? ''); ?></h3>
            </a>
            <!--not attached to project-->
            <h4 id="InvoiceTitleNotAttached"
                class="muted <?php echo e(runtimeInvoiceAttachedProject('alternative-title', $bill->bill_projectid)); ?>"><?php echo e(cleanLang(__('lang.not_attached_to_project'))); ?></h4>
            <!--crumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo e(cleanLang(__('lang.app'))); ?></li>
                <?php if(isset($page['crumbs'])): ?>
                <?php $__currentLoopData = $page['crumbs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="breadcrumb-item <?php if($loop->last): ?> active active-bread-crumb <?php endif; ?>"><?php echo e($title ?? ''); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ol>
            <!--crumbs-->
        </div>

        <!--ACTIONS-->
        <?php if($bill->bill_type == 'invoice'): ?>
        <?php echo $__env->make('pages.bill.components.misc.invoice.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if($bill->bill_type == 'estimate'): ?>
        <?php echo $__env->make('pages.bill.components.misc.estimate.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

    </div>
    <!--/#HEADER SECTION-->

    <!--BILL CONTENT-->
    <div class="row">
        <div class="col-md-12 p-t-30">
            <?php echo $__env->make('pages.bill.bill-web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<!--main content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/wrapper.blade.php ENDPATH**/ ?>