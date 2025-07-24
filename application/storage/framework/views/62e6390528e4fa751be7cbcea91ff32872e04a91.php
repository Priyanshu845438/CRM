<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($event->event_show_in_timeline == 'yes'): ?>
<!--each events item-->
<div class="sl-item timeline">
    <div class="sl-left">
        <img src="<?php echo e(getUsersAvatar($event->avatar_directory, $event->avatar_filename, $event->event_creatorid)); ?>" alt="user"
            class="img-circle" />
    </div>
    <div class="sl-right">
        <div>
            <div class="x-meta"><a href="javascript:void(0)" class="link">
                <?php if($event->event_creatorid == 0 || $event->event_creatorid == -1): ?>
                    <?php if($event->event_creatorid == 0): ?>
                    <?php echo e(cleanLang(__('lang.system_bot_name'))); ?>

                    <?php else: ?>
                    <!--non registered users-->
                    <?php echo e($event->event_creator_name); ?>

                    <?php endif; ?>
                <?php else: ?>
                    <?php echo e($event->first_name ?? runtimeUnkownUser()); ?>

                <?php endif; ?>
            </a> <span class="sl-date"><?php echo e(runtimeDateAgo($event->event_created)); ?></span>
            </div>
            <div class="x-title">
                <!--assigned event - viewed by third party-->
                <?php if($event->event_notification_category == 'notifications_new_assignement' && (auth()->user()->id != $event->event_item_content2)): ?>
                <span><?php echo e(runtimeLang($event->event_item_lang_alt)); ?> <?php echo e($event->event_item_content3); ?><span>
                <?php else: ?>
                <span><?php echo e(runtimeLang($event->event_item_lang)); ?><span>
                <?php endif; ?>
                <!--do for project time lines-->
                <?php if(request('timelineresource_type') == 'project' && ($event->event_parent_type =='project' || $event->event_parent_type =='file')): ?>
                <!--do nothing-->
                <?php else: ?>
                <?php echo $__env->make('pages.events.includes.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
            <?php if($event->event_show_item == 'yes'): ?>
            <?php echo $__env->make('pages.events.includes.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--each events item-->
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/timeline/components/misc/ajax.blade.php ENDPATH**/ ?>