<form action="" class="w-100" method="post" id="ticket-compose-form" data-user-type="<?php echo e(auth()->user()->type); ?>">
    <div class="row ticket-compose" id="ticket-compose">
        <!--options panel-->
        <?php echo $__env->make('pages.tickets.components.create.options', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!--compose panel-->
        <div class="col-sm-12 col-lg-9">
            <div class="card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="form-group">
                                <input class="form-control" name="ticket_subject" id="ticket_subject"
                                    placeholder="<?php echo e(cleanLang(__('lang.subject'))); ?>:">
                            </div>
                            <div class="form-group">
                                <textarea class="tinymce-textarea" name="ticket_message" id="ticket_message"
                                    rows="15"></textarea>
                            </div>
                            <!--CANNED MESSAGES-->
                            <?php if(auth()->user()->is_team && config('system.settings2_tickets_replying_interface') == 'inline'): ?>
                            <button type="button"
                                class="btn btn-default btn-sm waves-effect waves-dark js-toggle-side-panel ticket-add-canned m-b-20"
                                data-target="sidepanel-canned-messages">
                                <i class="sl-icon-speech"></i>
                                <?php echo app('translator')->get('lang.canned_messages'); ?>
                            </button>
                            <?php endif; ?>
                            <!--fileupload-->
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="dropzone dz-clickable" id="fileupload_ticket">
                                        <div class="dz-default dz-message">
                                            <i class="icon-Upload-toCloud"></i>
                                            <span><?php echo e(cleanLang(__('lang.drag_drop_file'))); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--fileupload-->
                            <div class="text-lg-right">
                                <button type="submit" class="btn btn-rounded-x btn-danger m-t-20"
                                    id="ticket-compose-form-button" data-url="<?php echo e(url('/tickets')); ?>" data-type="form"
                                    data-ajax-type="post" data-loading-overlay-target="wrapper-tickets"
                                    data-loading-overlay-classname="overlay"
                                    data-form-id="ticket-compose"><?php echo e(cleanLang(__('lang.submit_ticket'))); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/tickets/components/create/compose.blade.php ENDPATH**/ ?>