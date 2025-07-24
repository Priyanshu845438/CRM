<div class="row project-details" id="project-details-container">
    <div class="col-sm-12 tinymce-transparent">
        <!--textarea & editor area-->
        <div class="project-description p-0 p-t-40 rich-text-formatting" id="project-description"> <?php echo clean($project->project_description); ?>

        </div>
        <!--dynamic description field-->
        <input type="hidden" name="description" id="description" value="">

        <!--editable tags-->
        <div class="form-group row hidden m-t-10" id="project-details-edit-tags">
            <label class="col-12 strong"><?php echo e(cleanLang(__('lang.tags'))); ?></label>
            <div class="col-12">
                <select name="tags" id="tags"
                    class="form-control form-control-sm select2-multiple <?php echo e(runtimeAllowUserTags()); ?> select2-hidden-accessible"
                    multiple="multiple" tabindex="-1" aria-hidden="true">
                    <!--array of selected tags-->
                    <?php $__currentLoopData = $project->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $selected_tags[] = $tag->tag_title ; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!--/#array of selected tags-->
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tag->tag_title); ?>"
                        <?php echo e(runtimePreselectedInArray($tag->tag_title ?? '', $selected_tags  ?? [])); ?>><?php echo e($tag->tag_title); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <!--/#editable tags-->
        <!--tags holder-->
        <div class="p-t-20" id="project-details-tags">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="label label-rounded label-default tag"><?php echo e($tag->tag_title); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!--/#tags holder-->

        <?php if(config('visibility.edit_project_button')): ?>
        <hr>
        </hr>
        <!--buttons: edit-->
        <div id="project-description-edit" class="p-t-20 text-right">
            <button type="button" class="btn waves-effect waves-light btn-xs btn-info"
                id="project-description-button-edit"><?php echo e(cleanLang(__('lang.edit_description'))); ?></button>
        </div>

        <!--button: subit & cancel-->
        <div id="project-description-submit" class="p-t-20 hidden text-right">
            <button type="button" class="btn waves-effect waves-light btn-xs btn-default"
                id="project-description-button-cancel"><?php echo e(cleanLang(__('lang.cancel'))); ?></button>
            <button type="button" class="btn waves-effect waves-light btn-xs btn-danger" data-type="form"
                data-form-id="project-details-container" data-ajax-type="post"
                data-url="<?php echo e(url('templates/projects/'.$project->project_id .'/project-details')); ?>"
                id="project-description-button-save"><?php echo e(cleanLang(__('lang.save'))); ?></button>
        </div>
        <?php endif; ?>

    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/templates/project/components/tabs/details.blade.php ENDPATH**/ ?>