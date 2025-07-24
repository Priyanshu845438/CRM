<div class="row">
    <div class="col-lg-12">

        <!--title-->
        <div class="form-group row">
            <label
                class="col-sm-12 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.title'))); ?>*</label>
            <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" autocomplete="off" id="note_title"
                    name="note_title" value="<?php echo e($note->note_title ?? ''); ?>">
            </div>
        </div>

        <!--description-->
        <div class="form-group row">
            <label
                class="col-sm-12 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.description'))); ?>*</label>
            <div class="col-sm-12">
                <textarea id="note_description" name="note_description"
                    class="tinymce-textarea hidden"><?php echo e($note->note_description ?? ''); ?></textarea>
            </div>
        </div>

        <!--tags-->
        <div class="form-group row">
            <label class="col-sm-12 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.tags'))); ?></label>
            <div class="col-sm-12">
                <select name="tags" id="tags"
                    class="form-control form-control-sm select2-multiple <?php echo e(runtimeAllowUserTags()); ?> select2-hidden-accessible"
                    multiple="multiple" tabindex="-1" aria-hidden="true">
                    <!--array of selected tags-->
                    <?php if(isset($page['section']) && $page['section'] == 'edit'): ?>
                    <?php $__currentLoopData = $note->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $selected_tags[] = $tag->tag_title ; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <!--/#array of selected tags-->
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tag->tag_title); ?>"
                        <?php echo e(runtimePreselectedInArray($tag->tag_title ?? '', $selected_tags  ?? [])); ?>>
                        <?php echo e($tag->tag_title); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <!--/#tags-->

        <!--attach recipt - toggle-->
        <div class="spacer row">
            <div class="col-sm-12 col-lg-8">
                <span class="title"><?php echo e(cleanLang(__('lang.add_file_attachments'))); ?></span class="title">
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="switch  text-right">
                    <label>
                        <input type="checkbox" name="show_more_settings_notes" id="show_more_settings_notes"
                            class="js-switch-toggle-hidden-content" data-target="add_file_attachments">
                        <span class="lever switch-col-light-blue"></span>
                    </label>
                </div>
            </div>
        </div>


        <!--attach recipt-->
        <div class="hidden" id="add_file_attachments">
            <!--fileupload-->
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="dropzone dz-clickable" id="dropzone_upload_multiple_files">
                        <div class="dz-default dz-message">
                            <i class="icon-Upload-toCloud"></i>
                            <span><?php echo e(cleanLang(__('lang.drag_drop_file'))); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--fileupload-->
            <!--existing files-->
            <?php if(isset($page['section']) && $page['section'] == 'edit'): ?>
            <table class="table table-bordered">
                <tbody>
                    <?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="note_attachment_<?php echo e($attachment->attachment_id); ?>">
                        <td><?php echo e($attachment->attachment_filename); ?> </td>
                        <td class="w-px-40"> <button type="button"
                                class="btn btn-danger btn-circle btn-sm confirm-action-danger"
                                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>"
                                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" active"
                                data-ajax-type="DELETE"
                                data-url="<?php echo e(url('/notes/attachments/'.$attachment->attachment_uniqiueid)); ?>">
                                <i class="sl-icon-trash"></i>
                            </button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>

        <!--pass source-->
        <input type="hidden" name="source" value="<?php echo e(request('source')); ?>">

        <!--notes-->
        <div class="row">
            <div class="col-12">
                <div><small><strong>* <?php echo e(cleanLang(__('lang.required'))); ?></strong></small></div>
            </div>
        </div>

        <!--info-->
        <?php if(request('noteresource_type') == 'project' && auth()->user()->is_team): ?>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info"><?php echo e(cleanLang(__('lang.project_notes_not_visible_to_client'))); ?></div>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/notes/components/modals/add-edit-inc.blade.php ENDPATH**/ ?>