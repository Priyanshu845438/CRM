<div class="card knowledgebase-sidepanel">
    <div class="card-body">

        <!--categories-->
        <div class="x-section">
            <h4><?php echo e(cleanLang(__('lang.categories'))); ?></h4>
            <ul>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="/kb/articles/<?php echo e($category->kbcategory_slug); ?>""><?php echo e($category->kbcategory_title); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <!--related questions-->
        <?php if(isset($page['vsibility_related_questions']) && $page['vsibility_related_questions'] =='yes'): ?>
        <div class="x-section">
                <h4><?php echo e(cleanLang(__('lang.related'))); ?></h4>
            <ul>
                <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($question->knowledgebase_title); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>

        <!--get help-->
        <?php if(auth()->user()->is_client): ?>
        <div class="x-section">
                            <h4><?php echo e(cleanLang(__('lang.need_more_help'))); ?>?</h4>
            <div class="x-support">
            <img src="<?php echo e(url('/')); ?>/public/images/get-support.png" /> 
            <a href="/tickets/create" class="btn btn-sm btn-rounded-x btn-danger edit-add-modal-button"><?php echo e(cleanLang(__('lang.open_a_support_ticket'))); ?></a>
        </div>
        <?php endif; ?>
    </div>

    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/knowledgebase/components/table/sidepanel.blade.php ENDPATH**/ ?>