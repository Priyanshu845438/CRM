<?php if(auth()->check() && auth()->user()->is_team ): ?>
<?php if(auth()->check() && auth()->user()->role->role_estimates >= 2): ?>
<!--show editing icon (automation)-->
<a href="javascript:void(0)" id="estimate-automation-icon"
    class="edit-add-modal-button js-ajax-ux-request reset-target-modal-form <?php echo e(runtimeVisibility('estimate-automation-icon', $bill->estimate_automation_status)); ?>"
    data-toggle="modal" data-target="#commonModal"
    data-url="<?php echo e(urlResource('/estimates/'.$bill->bill_estimateid.'/edit-automation')); ?>"
    data-loading-target="commonModalBody" data-modal-title="<?php echo app('translator')->get('lang.estimate_automation'); ?>"
    data-action-url="<?php echo e(urlResource('/estimates/'.$bill->bill_estimateid.'/edit-automation')); ?>"
    data-action-method="POST" data-action-ajax-loading-target="commonModalBody">
    <i class="sl-icon-energy text-warning cursor-pointer" data-toggle="tooltip"
        title="<?php echo e(cleanLang(__('lang.estimate_automation'))); ?>"></i>
</a>
<?php else: ?>
<!--show plain icon (automation)-->
<i class="sl-icon-energy text-warning cursor-pointer <?php echo e(runtimeVisibility('estimate-automation-icon', $bill->estimate_automation_status)); ?>"
    data-toggle="tooltip" id="estimate-automation-icon" title="<?php echo e(cleanLang(__('lang.estimate_automation'))); ?>"></i>
<?php endif; ?>
<?php endif; ?><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/components/elements/estimate/icons-automation.blade.php ENDPATH**/ ?>