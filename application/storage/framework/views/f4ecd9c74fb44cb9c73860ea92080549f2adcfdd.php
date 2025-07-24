<div class="row client-details" id="client-details-container">
    <div class="col-sm-12 tinymce-transparent">
        <!--textarea & editor area-->
        <div class="client-description p-0 rich-text-formatting" id="client-description"> <?php echo clean($client->client_description); ?>

        </div>
        <!--dynamic description field-->
        <input type="hidden" name="description" id="description" value="">

        <!--editable tags-->
        <div class="form-group row hidden m-t-10" id="client-details-edit-tags">
            <label class="col-12 strong"><?php echo e(cleanLang(__('lang.tags'))); ?></label>
            <div class="col-12">
                <select name="tags" id="tags"
                    class="form-control form-control-sm select2-multiple <?php echo e(runtimeAllowUserTags()); ?> select2-hidden-accessible"
                    multiple="multiple" tabindex="-1" aria-hidden="true">
                    <!--array of selected tags-->
                    <?php $__currentLoopData = $client->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
        <?php if(auth()->user()->is_team): ?>
        <div class="p-t-20" id="client-details-tags">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="label label-rounded label-default tag"><?php echo e($tag->tag_title); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <!--/#tags holder-->

        <?php if(config('visibility.edit_client_button')): ?>
        <hr>
        </hr>
        <!--buttons: edit-->
        <div id="client-description-edit" class="p-t-20 text-right">
            <button type="button" class="btn waves-effect waves-light btn-xs btn-info"
                id="client-description-button-edit"><?php echo e(cleanLang(__('lang.edit_description'))); ?></button>
        </div>

        <!--button: subit & cancel-->
        <div id="client-description-submit" class="p-t-20 hidden text-right">
            <button type="button" class="btn waves-effect waves-light btn-xs btn-default"
                id="client-description-button-cancel"><?php echo e(cleanLang(__('lang.cancel'))); ?></button>
            <button type="button" class="btn waves-effect waves-light btn-xs btn-danger" data-type="form"
                data-form-id="client-details-container" data-ajax-type="post"
                data-url="<?php echo e(url('clients/'.$client->client_id .'/client-details')); ?>"
                id="client-description-button-save"><?php echo e(cleanLang(__('lang.save'))); ?></button>
        </div>
        <?php endif; ?>

    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/client/components/tabs/details.blade.php ENDPATH**/ ?>