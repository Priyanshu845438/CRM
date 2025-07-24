<?php if(isset($categories)): ?>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each category-->
<div class="col-sm-12 col-md-4 col-lg-3" id="category_<?php echo e($category->kbcategory_id ?? ''); ?>">
    <div class="card kb-category">
        <div class="card-body">
            <!--visibility-->
            <?php if(auth()->user()->role->role_knowledgebase > 1): ?>
            <span class="kb-hover-icons hidden x-team label label-with-icon"><i class="sl-icon-eye"></i>
                <?php echo e(runtimeLang($category->kbcategory_visibility)); ?></span>
            <?php endif; ?>
            <!--category icon-->
            <div class="kb-category-icon"><span><i class="<?php echo e($category->kbcategory_icon ?? 'sl-icon-docs'); ?>"></i></span></div>
            <!--title-->
            <h5 class="card-title"><?php echo e($category->kbcategory_title ?? ''); ?></h5>
            <!--description-->
            <div class="card-text"><?php echo clean($category->kbcategory_description ?? '---'); ?></div>
            <a href="/kb/articles/<?php echo e($category->kbcategory_slug); ?>" class="btn btn-sm btn-rounded-x btn-outline-info"><?php echo e(cleanLang(__('lang.see_articles'))); ?></a>
        </div>
    </div>
</div>
<!--each category-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/kbcategories/components/list/ajax.blade.php ENDPATH**/ ?>