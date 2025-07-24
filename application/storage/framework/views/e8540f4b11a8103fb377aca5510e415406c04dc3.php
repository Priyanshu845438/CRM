<!--details-->
<div class="col-sm-12 col-lg-3" id="ticket-left-panel">
    <div class="card m-t-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="ticket-panel">
                    <div class="x-top-header">
                        <?php echo e(cleanLang(__('lang.categories'))); ?>

                    </div>

                    <div class="x-body">

                        <!--department-->
                        <?php $__currentLoopData = $category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="x-list ajax-request cursor-pointer canned_category <?php echo e(runtimeCannedCategory($category['category_id'])); ?>"
                            data-url="<?php echo e(url('canned?filter_categoryid='.$category['category_id'])); ?>"
                            id="canned_category_<?php echo e($category['category_id']); ?>">
                            <div class="x-name"><?php echo e($category['category_name']); ?></div>
                            <div class="x-details"><span
                                    id="canned_category_count_<?php echo e($category['category_id']); ?>"><?php echo e($category['count_canned']); ?></span>
                                <?php echo app('translator')->get('lang.count_canned_responses'); ?></div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        <!--edit button-->
                        <?php if(config('visibility.action_buttons_manage')): ?>
                        <div class="x-list b-none">
                            <!--add item modal-->
                            <a href="<?php echo e(url('app/categories?filter_category_type=canned&source=ext')); ?>" type="button"
                                class="btn btn-info btn-sm edit-add-modal-button"><?php echo app('translator')->get('lang.manage_categories'); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--options--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/canned/components/panel.blade.php ENDPATH**/ ?>