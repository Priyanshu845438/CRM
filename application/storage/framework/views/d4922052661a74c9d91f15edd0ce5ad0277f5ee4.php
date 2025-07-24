<div class="row">
    <div class="col-lg-12">
        <!--title-->
        <div class="form-group row">
            <label class="col-12 text-left control-label col-form-label required"><?php echo e($page['form_label_category_name'] ?? ''); ?></label>
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="category_name" name="category_name"
                    value="<?php echo e($category->category_name ?? ''); ?>">
                <input type="hidden" name="category_type" value="<?php echo e(request('category_type')); ?>">
            </div>
        </div>


        <!--migrate to another category-->
        <?php if(isset($page['section']) && $page['section'] == 'edit'): ?>
        <div class="form-group row">
            <label class="col-12 text-left control-label col-form-label required"><?php echo e($page['form_label_move_items'] ?? ''); ?> (<?php echo e(cleanLang(__('lang.optional'))); ?>)</label>
            <div class="col-12">
                <select class="select2-basic form-control form-control-sm" id="migrate"
                    name="migrate">
                    <option>&nbsp;</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->category_id); ?>"><?php echo e($category->category_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/categories/components/modals/add-edit-inc.blade.php ENDPATH**/ ?>