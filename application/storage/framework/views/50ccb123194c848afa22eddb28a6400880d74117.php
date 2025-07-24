<!-- Page Title & Bread Crumbs -->
<div class="col-md-12 col-lg-6 align-self-center">
    <h3 class="text-themecolor"><?php echo e($page['heading'] ?? ''); ?></h3>
    <!--crumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><?php echo e(cleanLang(__('lang.app'))); ?></li>
        <?php if(isset($page['crumbs'])): ?>
        <?php $__currentLoopData = $page['crumbs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="breadcrumb-item <?php if($loop->last): ?> active <?php endif; ?>"><?php echo e($title ?? ''); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </ol>
    <!--crumbs-->
</div>
<!--Page Title & Bread Crumbs --><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/templates/project/components/misc/crumbs.blade.php ENDPATH**/ ?>