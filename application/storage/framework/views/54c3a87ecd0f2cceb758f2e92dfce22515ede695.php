<!-- action buttons -->
<?php echo $__env->make('pages.invoices.components.misc.list-page-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- action buttons -->

<!--stats panel-->
<?php if(auth()->user()->is_team): ?>
<div id="invoices-stats-wrapper" class="stats-wrapper card-embed-fix">
<?php if(@count($invoices ?? []) > 0): ?> <?php echo $__env->make('misc.list-pages-stats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php endif; ?>
</div>
<?php endif; ?>
<!--stats panel-->

<!--invoices table-->
<div class="card-embed-fix">
<?php echo $__env->make('pages.invoices.components.table.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!--invoices table--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/invoices/tabswrapper.blade.php ENDPATH**/ ?>