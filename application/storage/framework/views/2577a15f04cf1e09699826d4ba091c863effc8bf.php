<!-- action buttons -->
<?php echo $__env->make('pages.milestones.components.misc.list-page-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- action buttons -->

<!--stats panel-->
<?php if(auth()->user()->is_team): ?>
<div id="milestones-stats-wrapper" class="stats-wrapper card-embed-fix">
<?php if(@count($milestones ?? []) > 0): ?> <?php echo $__env->make('misc.list-pages-stats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php endif; ?>
</div>
<?php endif; ?>
<!--stats panel-->

<!--milestones table-->
<div class="card-embed-fix">
<?php echo $__env->make('pages.milestones.components.table.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!--milestones table--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/milestones/tabswrapper.blade.php ENDPATH**/ ?>