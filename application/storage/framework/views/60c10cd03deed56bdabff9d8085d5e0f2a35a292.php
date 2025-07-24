<!--CRUMBS CONTAINER (RIGHT)-->
<div class="col-md-12  col-lg-6 align-self-center text-right parent-page-actions p-b-9"
        id="list-page-actions-container">
        <div id="list-page-actions">
                <!--reminder-->
                <?php if(config('visibility.modules.reminders')): ?>
                <button type="button" data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.reminder'))); ?>"
                        id="reminders-panel-toggle-button"
                        class="reminder-toggle-panel-button list-actions-button btn btn-page-actions waves-effect waves-dark js-toggle-reminder-panel ajax-request <?php echo e($client->reminder_status); ?>"
                        data-url="<?php echo e(url('reminders/start?resource_type=client&resource_id='.$client->client_id)); ?>"
                        data-loading-target="reminders-side-panel-body" data-progress-bar='hidden'
                        data-target="reminders-side-panel" data-title="<?php echo app('translator')->get('lang.my_reminder'); ?>">
                        <i class="ti-alarm-clock"></i>
                </button>
                <?php endif; ?>


                <!--send email-->
                <button type="button" title="<?php echo e(cleanLang(__('lang.email_client'))); ?>" id="clientSendEmail"
                        class="data-toggle-tooltip list-actions-button btn btn-page-actions waves-effect waves-dark js-ajax-ux-request reset-target-modal-form edit-add-modal-button"
                        data-toggle="modal" data-target="#commonModal"
                        data-modal-title="<?php echo e(cleanLang(__('lang.email_client'))); ?>"
                        data-url="<?php echo e(url('/appwebmail/compose?view=modal&resource_type=client&resource_id='.$client->client_id)); ?>"
                        data-action-url="<?php echo e(url('/appwebmail/send')); ?>" data-loading-target="actionsModalBody"
                        data-modal-size="modal-xl" data-button-loading-annimation="yes" data-action-method="POST">
                        <i class="ti-email"></i>
                </button>



                <?php if(auth()->user()->role->role_clients >= 2): ?>
                <span class="dropdown">
                        <button type="button" data-toggle="dropdown" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                                aria-haspopup="true" aria-expanded="false"
                                class="data-toggle-tooltip list-actions-button btn btn-page-actions waves-effect waves-dark">
                                <i class="sl-icon-note"></i>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="listTableAction">
                                <!--edit client-->
                                <a class="dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                                        href="javascript:void(0)" data-toggle="modal" data-target="#commonModal"
                                        data-url="<?php echo e(urlResource('/clients/'.$client->client_id.'/edit')); ?>"
                                        data-loading-target="commonModalBody"
                                        data-modal-title="<?php echo e(cleanLang(__('lang.edit_client'))); ?>"
                                        data-action-url="<?php echo e(urlResource('/clients/'.$client->client_id.'?ref=page')); ?>"
                                        data-action-method="PUT" data-action-ajax-loading-target="clients-td-container">
                                        <?php echo e(cleanLang(__('lang.edit_client'))); ?></a>
                                <!--upload logo-->
                                <a class="dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                                        href="javascript:void(0)" data-toggle="modal" data-target="#commonModal"
                                        data-url="<?php echo e(url('/clients/logo?source=page&client_id='.$client->client_id)); ?>"
                                        data-loading-target="commonModalBody" data-modal-size="modal-sm"
                                        data-modal-title="<?php echo e(cleanLang(__('lang.update_avatar'))); ?>"
                                        data-header-visibility="hidden" data-header-extra-close-icon="visible"
                                        data-action-url="<?php echo e(url('/clients/logo?source=page&client_id='.$client->client_id)); ?>"
                                        data-action-method="PUT">
                                        <?php echo e(cleanLang(__('lang.change_logo'))); ?></a>
                        </div>
                </span>
                <?php endif; ?>

                <?php if(auth()->user()->role->role_clients >= 3): ?>
                <!--delete-->
                <button type="button" data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.delete_client'))); ?>"
                        class="list-actions-button btn btn-page-actions waves-effect waves-dark confirm-action-danger"
                        data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>"
                        data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                        data-url="<?php echo e(url('/clients/'.$client->client_id)); ?>"><i class="sl-icon-trash"></i></button>
                <?php endif; ?>
        </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/client/components/misc/actions.blade.php ENDPATH**/ ?>