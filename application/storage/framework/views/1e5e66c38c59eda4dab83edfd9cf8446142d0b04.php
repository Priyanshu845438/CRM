 <!--item-->
 <div class="form-group row">
     <label class="col-12 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.response_title'); ?></label>
     <div class="col-12">
         <input type="text" class="form-control form-control-sm" id="canned_title" name="canned_title"
             value="<?php echo e($canned->canned_title ?? ''); ?>">
     </div>
 </div>

 <!--category-->
 <?php if(!request()->filled('filter_categoryid')): ?>
 <div class="form-group row">
     <label class="col-12 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.category'); ?></label>
     <div class="col-12">
         <select class="select2-basic form-control form-control-sm select2-preselected" id="filter_categoryid"
             name="filter_categoryid" data-preselected="<?php echo e($canned->canned_categoryid ?? -1); ?>">
             <option></option>
             <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <option value="<?php echo e($category->category_id); ?>"><?php echo e($category->category_name); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
     </div>
 </div>
 <?php endif; ?>

 <!--message-->
 <div class="form-group row">
     <label class="col-12 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.message'); ?></label>
     <div class="col-12">
         <textarea class="form-control form-control-sm tinymce-textarea-canned" rows="10" name="html_canned_message"
             id="html_canned_message"><?php echo e($canned->canned_message ?? ''); ?></textarea>
     </div>
 </div>

 <!--item-->
 <?php if(auth()->user()->role->role_canned == 'yes'): ?>
 <div class="form-group form-group-checkbox row">
     <div class="col-12 p-t-5">
         <input type="checkbox" id="canned_visibility" name="canned_visibility" class="filled-in chk-col-light-blue"
         <?php echo e(runtimePrechecked($canned->canned_visibility ?? '', 'private')); ?>>
         <label class="p-l-30" for="canned_visibility"><?php echo app('translator')->get('lang.private'); ?></label>
     </div>
 </div>
 <?php endif; ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/canned/components/modals/add-edit-inc.blade.php ENDPATH**/ ?>