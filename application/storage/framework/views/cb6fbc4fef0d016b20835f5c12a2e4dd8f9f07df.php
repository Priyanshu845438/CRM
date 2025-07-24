<!-- action buttons -->
<?php echo $__env->make('pages.tasks.components.misc.list-page-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- action buttons -->

<!--stats panel-->
<?php if(auth()->user()->is_team): ?>
<div id="tasks-stats-wrapper" class="stats-wrapper card-embed-fix">
    <?php if(@count($tasks ?? []) > 0): ?> <?php echo $__env->make('misc.list-pages-stats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php endif; ?>
</div>
<?php endif; ?>
<!--stats panel-->

<!--tasks and kanban layouts-->
<?php if(auth()->user()->pref_view_tasks_layout =='list'): ?>
<div class="card-embed-fix  kanban-wrapper">
    <?php echo $__env->make('pages.tasks.components.table.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php else: ?>
<div class="card-embed-fix  kanban-wrapper">
    <?php echo $__env->make('pages.tasks.components.kanban.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php endif; ?>
<!--/#tasks and kanban layouts-->

<!--filter-->
<?php if(auth()->user()->is_team): ?>
<?php echo $__env->make('pages.tasks.components.misc.filter-tasks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<!--filter-->

<!--task modal-->
<?php echo $__env->make('pages.task.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/tasks/tabswrapper.blade.php ENDPATH**/ ?>