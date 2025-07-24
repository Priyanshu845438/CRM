 <?php $__env->startSection('content'); ?>
<!-- main content -->
<div class="container-fluid <?php echo e($page['mode'] ?? ''); ?>" id="invoice-container">

    <!--BILL CONTENT-->
    <div class="row">
        <div class="col-md-12 p-t-30">
            <?php echo $__env->make('pages.bill.bill-web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<!--main content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.wrapperplain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/wrapper-public.blade.php ENDPATH**/ ?>