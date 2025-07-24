<!-- action buttons -->
<?php echo $__env->make('pages.estimates.components.misc.list-page-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- action buttons -->

<!--stats panel-->
<div id="estimates-stats-wrapper" class="stats-wrapper card-embed-fix">
<?php if(@count($estimates ?? []) > 0): ?> <?php echo $__env->make('misc.list-pages-stats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php endif; ?>
</div>
<!--stats panel-->

<!--estimates table-->
<div class="card-embed-fix">
<?php echo $__env->make('pages.estimates.components.table.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!--estimates table--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/estimates/tabswrapper.blade.php ENDPATH**/ ?>