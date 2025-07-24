<div class="row" id="js-trigger-expenses" data-client-id="<?php echo e($expense->expense_clientid ?? ''); ?>"
    data-payload="<?php echo e(config('visibility.expense_modal_trigger_clients_project_list')); ?>">
    <div class="col-lg-12">


        <!--description-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.description'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <textarea class="w-100" id="expense_description" rows="4"
                    name="expense_description"><?php echo e($expense->expense_description ?? ''); ?></textarea>
            </div>
        </div>

        <!--date-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.date'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control form-control-sm pickadate" autocomplete="off" name="expense_date"
                    value="<?php echo e(runtimeDatepickerDate($expense->expense_date ?? '')); ?>">
                <input class="mysql-date" type="hidden" name="expense_date" id="expense_date"
                    value="<?php echo e($expense->expense_date ?? ''); ?>">
            </div>
        </div>


        <!--amount-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.amount'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <div class="input-group input-group-sm">
                    <span class="input-group-addon"
                        id="basic-addon2"><?php echo e(config('system.settings_system_currency_symbol')); ?></span>
                    <input type="number" name="expense_amount" id="expense_amount" class="form-control form-control-sm"
                        value="<?php echo e($expense->expense_amount ?? ''); ?>" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>


        <!--category-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label  required"><?php echo e(cleanLang(__('lang.category'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm" id="expense_categoryid"
                    name="expense_categoryid">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->category_id); ?>"
                        <?php echo e(runtimePreselected($expense->expense_categoryid ?? '', $category->category_id)); ?>><?php echo e(runtimeLang($category->category_name)); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>



        <!--column visibility-->
        <?php if(config('visibility.expense_modal_client_project_fields')): ?>
        <div>
            <!--not yet invoice invoiced - can change client/project-->
            <?php if(config('visibility.expense_modal_edit_client_and_project')): ?>
            <!--project-->
            <div class="form-group row">
                <label
                    class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.project'))); ?></label>
                <div class="col-sm-12 col-lg-9">
                    <!--select2 basic search-->
                    <select name="expense_projectid" id="expense_projectid"
                        class="form-control form-control-sm js-select2-basic-search-modal"
                        data-ajax--url="<?php echo e(url('/')); ?>/feed/projects?ref=general">
                        <?php if(isset($expense->expense_projectid) && $expense->expense_projectid != ''): ?>
                        <option value="<?php echo e($expense->expense_projectid ?? ''); ?>"><?php echo e($expense->project_title); ?>

                        </option>
                        <?php endif; ?>
                    </select>
                    <!--select2 basic search-->
                </div>
            </div>
            <?php else: ?>
            <!--already invoiced - cannot change client/project-->
            <!--existing client-->
            <div class="form-group row">
                <label
                    class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.client'))); ?></label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control" value="<?php echo e($expense->client_company_name ?? ''); ?>" disabled>
                    <input type="hidden" name="expense_clientid" value="<?php echo e($expense->expense_clientid ?? ''); ?>">
                </div>
            </div>
            <!--existing client-->
            <div class="form-group row">
                <label
                    class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.project'))); ?></label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" value="<?php echo e($expense->project_title ?? ''); ?>"
                        disabled>
                    <input type="hidden" name="expense_projectid" value="<?php echo e($expense->expense_projectid ?? ''); ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 text-right">
                    <small><?php echo e(cleanLang(__('lang.expense_has_already_been_invoiced'))); ?></small>
                </div>
            </div>
            <div class="line"></div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <!--clients projects-->
        <?php if(config('visibility.expense_modal_clients_projects')): ?>
        <div class="form-group row">
            <label for="example-month-input"
                class="col-sm-12 col-lg-3 col-form-label text-left"><?php echo e(cleanLang(__('lang.project'))); ?></label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm" id="expense_projectid"
                    name="expense_projectid">
                    <?php $__currentLoopData = config('settings.clients_projects'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($project->project_id ?? ''); ?>"><?php echo e($project->project_title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <?php endif; ?>

        <!--project manager<>-->
        <?php if(auth()->user()->role->role_expenses_scope == 'global'): ?>
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.team_member'))); ?></label>
            <div class="col-sm-12 col-lg-9">
                <select name="expense_creatorid" id="expense_creatorid"
                    class="select2-basic form-control form-control-sm">
                    <option></option>
                    <!--users list-->
                    <?php $__currentLoopData = config('system.team_members'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>"
                        <?php echo e(runtimePreselected($user->id, $expense->expense_creatorid ?? '')); ?>><?php echo e($user->full_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!--/#users list-->
                </select>
            </div>
        </div>
        <?php endif; ?>


        <!--billable-->
        <div class="form-group form-group-checkbox row" id="expense_billable_option">
            <label class="col-sm-12 col-lg-3 col-form-label text-left"><?php echo e(cleanLang(__('lang.billable'))); ?>?</label>
            <div class="col-6 text-left p-t-5">
                <?php if(isset($page['section']) && $page['section'] == 'edit'): ?>
                <input type="checkbox" id="expense_billable" name="expense_billable"
                    class="filled-in chk-col-light-blue" <?php echo e(runtimePrechecked($expense['expense_billable'] ?? '')); ?>

                    <?php echo e(runtimeExpenseBillable($expense->expense_billing_status ?? '')); ?>>
                <?php else: ?>
                <input type="checkbox" id="expense_billable" name="expense_billable"
                    class="filled-in chk-col-light-blue"
                    <?php echo e(runtimePrechecked(config('system.settings_expenses_billable_by_default'))); ?>>
                <?php endif; ?>
                <label for="expense_billable"></label>
            </div>
        </div>

        <div class="line"></div>


        <!--attach recipt - toggle-->
        <div class="spacer row">
            <div class="col-sm-12 col-lg-8">
                <span class="title"><?php echo e(cleanLang(__('lang.attach_receipt'))); ?></span class="title">
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="switch  text-right">
                    <label>
                        <input type="checkbox" name="show_more_settings_expenses" id="show_more_settings_expenses"
                            class="js-switch-toggle-hidden-content" data-target="add_expense_attach_receipt">
                        <span class="lever switch-col-light-blue"></span>
                    </label>
                </div>
            </div>
        </div>


        <!--attach recipt-->
        <div class="hidden" id="add_expense_attach_receipt">
            <!--fileupload-->
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="dropzone dz-clickable" id="fileupload_expense_receipt">
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
                    <tr id="expense_attachment_<?php echo e($attachment->attachment_id); ?>">
                        <td><?php echo e($attachment->attachment_filename); ?> </td>
                        <td class="w-px-40"> <button type="button"
                                class="btn btn-danger btn-circle btn-sm confirm-action-danger"
                                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_item'))); ?>"
                                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" active"
                                data-ajax-type="DELETE"
                                data-url="<?php echo e(url('/expenses/attachments/'.$attachment->attachment_uniqiueid)); ?>">
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
        <input type="hidden" name="ref" value="<?php echo e(request('ref')); ?>">

        <div class="row">
            <div class="col-12">
                <div><small><strong>* <?php echo e(cleanLang(__('lang.required'))); ?></strong></small></div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/expenses/components/modals/add-edit-inc.blade.php ENDPATH**/ ?>