<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="client_<?php echo e($client->client_id); ?>">

    <!--tableconfig_column_1 [client_id]-->
    <td class="clients_col_id <?php echo e(config('table.tableconfig_column_1')); ?> tableconfig_column_1"
        id="clients_col_id_<?php echo e($client->client_id); ?>">
        <?php echo e($client->client_id); ?>

    </td>

    <!--tableconfig_column_2 [client_company_name]-->
    <td class="clients_col_company <?php echo e(config('table.tableconfig_column_2')); ?> tableconfig_column_2"
        id="clients_col_id_<?php echo e($client->client_id); ?>">
        <a href="/clients/<?php echo e($client->client_id ?? ''); ?>"><?php echo e(str_limit($client->client_company_name, 35)); ?></a>
    </td>

    <!--tableconfig_column_3 [account_owner]-->
    <td class="clients_col_account_owner <?php echo e(config('table.tableconfig_column_3')); ?> tableconfig_column_3"
        id="clients_col_account_owner_<?php echo e($client->client_id); ?>">
        <img src="<?php echo e(getUsersAvatar($client->avatar_directory, $client->avatar_filename)); ?>" alt="user"
            class="img-circle avatar-xsmall">
        <span><?php echo e($client->first_name ?? '---'); ?></span>
    </td>


    <!--tableconfig_column_4 [count_pending_projects]-->
    <?php if(config('visibility.modules.projects')): ?>
    <td class="col_count_pending_projects <?php echo e(config('table.tableconfig_column_4')); ?> tableconfig_column_4">
        <?php echo e($client->count_pending_projects ?? '0'); ?>

    </td>
    <?php endif; ?>

    <!--tableconfig_column_5 [count_completed_projects]-->
    <?php if(config('visibility.modules.projects')): ?>
    <td class="col_count_completed_projects <?php echo e(config('table.tableconfig_column_5')); ?> tableconfig_column_5">
        <?php echo e($client->count_completed_projects ?? '0'); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_6 [count_pending_tasks]-->
    <?php if(config('visibility.modules.tasks')): ?>
    <td class="col_count_pending_tasks <?php echo e(config('table.tableconfig_column_6')); ?> tableconfig_column_6">
        <?php echo e($client->count_pending_tasks ?? '0'); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_7 [count_completed_tasks]-->
    <?php if(config('visibility.modules.tasks')): ?>
    <td class="col_count_completed_tasks <?php echo e(config('table.tableconfig_column_7')); ?> tableconfig_column_7">
        <?php echo e($client->count_completed_tasks ?? '0'); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_8 [count_tickets_open]-->
    <?php if(config('visibility.modules.tickets')): ?>
    <td class="col_count_tickets_open <?php echo e(config('table.tableconfig_column_8')); ?> tableconfig_column_8">
        <?php echo e($client->count_tickets_open ?? '0'); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_9 [count_tickets_closed]-->
    <?php if(config('visibility.modules.tickets')): ?>
    <td class="col_count_tickets_closed <?php echo e(config('table.tableconfig_column_9')); ?> tableconfig_column_9">
        <?php echo e($client->count_tickets_closed ?? '0'); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_10 [sum_estimates_accepted]-->
    <?php if(config('visibility.modules.estimates')): ?>
    <td class="col_sum_estimates_accepted <?php echo e(config('table.tableconfig_column_10')); ?> tableconfig_column_10">
        <?php echo e(runtimeMoneyFormat($client->sum_estimates_accepted)); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_11 [sum_estimates_declined]-->
    <?php if(config('visibility.modules.estimates')): ?>
    <td class="col_sum_estimates_declined <?php echo e(config('table.tableconfig_column_11')); ?> tableconfig_column_11">
        <?php echo e(runtimeMoneyFormat($client->sum_estimates_declined)); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_12 [sum_invoices_all]-->
    <?php if(config('visibility.modules.invoices')): ?>
    <td class="col_sum_invoices_all <?php echo e(config('table.tableconfig_column_12')); ?> tableconfig_column_12">
        <?php echo e(runtimeMoneyFormat($client->sum_invoices_all_x)); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_13 [sum_all_payments]-->
    <?php if(config('visibility.modules.payments')): ?>
    <td class="col_sum_all_payments <?php echo e(config('table.tableconfig_column_13')); ?> tableconfig_column_13">
        <?php echo e(runtimeMoneyFormat($client->sum_all_payments)); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_14 [sum_outstanding_balance]-->
    <?php if(config('visibility.modules.invoices')): ?>
    <td class="col_sum_outstanding_balance <?php echo e(config('table.tableconfig_column_14')); ?> tableconfig_column_14">
        <?php echo e(runtimeMoneyFormat($client->sum_outstanding_balance)); ?>

    </td>
    <?php endif; ?>



    <!--tableconfig_column_15 [sum_subscriptions_active]-->
    <?php if(config('visibility.modules.subscriptions')): ?>
    <td class="col_sum_subscriptions_active <?php echo e(config('table.tableconfig_column_15')); ?> tableconfig_column_15">
        <?php echo e(runtimeMoneyFormat($client->sum_subscriptions_active)); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_16 [count_proposals_accepted]-->
    <?php if(config('visibility.modules.proposals')): ?>
    <td class="col_sum_proposals_accepted <?php echo e(config('table.tableconfig_column_16')); ?> tableconfig_column_16">
        <?php echo e($client->count_proposals_accepted ?? 0); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_17 [count_proposals_declined]-->
    <?php if(config('visibility.modules.proposals')): ?>
    <td class="col_sum_proposals_declined <?php echo e(config('table.tableconfig_column_17')); ?> tableconfig_column_17">
        <?php echo e($client->count_proposals_accepted ?? 0); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_18 [sum_contracts]-->
    <?php if(config('visibility.modules.contracts')): ?>
    <td class="col_sum_contracts <?php echo e(config('table.tableconfig_column_18')); ?> tableconfig_column_18">
        <?php echo e(runtimeMoneyFormat($client->sum_contracts)); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_ 19[sum_hours_worked]-->
    <?php if(config('visibility.modules.timesheets')): ?>
    <td class="col_sum_hours_worked <?php echo e(config('table.tableconfig_column_19')); ?> tableconfig_column_19">
        <?php echo e(runtimeSecondsWholeHours($client->sum_hours_worked)); ?>:<?php echo e(runtimeSecondsWholeMinutesZero($client->sum_hours_worked)); ?>

    </td>
    <?php endif; ?>

    <!--tableconfig_column_20 [count_tickets_open]-->
    <?php if(config('visibility.modules.tickets')): ?>
    <td class="col_count_tickets_open <?php echo e(config('table.tableconfig_column_20')); ?> tableconfig_column_20">
        <?php echo e($client->count_tickets_open ?? '0'); ?>

    </td>
    <?php endif; ?>


    <!--tableconfig_column_21 [count_tickets_closed]-->
    <?php if(config('visibility.modules.tickets')): ?>
    <td class="col_count_tickets_closed <?php echo e(config('table.tableconfig_column_21')); ?> tableconfig_column_21">
        <?php echo e($client->count_tickets_closed ?? '0'); ?>

    </td>
    <?php endif; ?>

    <!--tableconfig_column_22 [count_users]-->
    <td class="col_count_users <?php echo e(config('table.tableconfig_column_22')); ?> tableconfig_column_22">
        <?php echo e($client->count_users ?? '0'); ?>

    </td>


    <!--tableconfig_column_23 [tags]-->
    <td class="clients_col_tags <?php echo e(config('table.tableconfig_column_23')); ?> tableconfig_column_23">
        <!--tag-->
        <?php if(count($client->tags ?? []) > 0): ?>
        <?php $__currentLoopData = $client->tags->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="label label-outline-default"><?php echo e(str_limit($tag->tag_title, 15)); ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <span>---</span>
        <?php endif; ?>
        <!--/#tag-->

        <!--more tags (greater than tags->take(x) number above -->
        <?php if(count($client->tags ?? []) > 1): ?>
        <?php $tags = $client->tags; ?>
        <?php echo $__env->make('misc.more-tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <!--more tags-->

    </td>

    <!--tableconfig_column_24 [category]-->
    <td class="col_category <?php echo e(config('table.tableconfig_column_24')); ?> tableconfig_column_24">
        <!--category-->
        <span class="label label-outline-default"><?php echo e(str_limit($client->category_name, 15)); ?></span>
        <!--category-->
    </td>

    <!--tableconfig_column_25 [status]-->
    <th class="col_status <?php echo e(config('table.tableconfig_column_25')); ?> tableconfig_column_25">
        <span class="label <?php echo e(runtimeClientStatusLabel($client->client_status)); ?>"><?php echo e(runtimeLang($client->client_status)); ?></span>
        </td>


        <!--actions-->
        <?php if(config('visibility.action_column')): ?>
    <td class="clients_col_action actions_column" id="clients_col_action_<?php echo e($client->client_id); ?>">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--delete-->
            <?php if(config('visibility.action_buttons_delete')): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_client'))); ?>"
                data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>" data-ajax-type="DELETE"
                data-url="<?php echo e(url('/clients/'.$client->client_id)); ?>">
                <i class="sl-icon-trash"></i>
            </button>
            <?php endif; ?>
            <!--edit-->
            <?php if(config('visibility.action_buttons_edit')): ?>
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(urlResource('/clients/'.$client->client_id.'/edit')); ?>"
                data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.edit_client'))); ?>"
                data-action-url="<?php echo e(urlResource('/clients/'.$client->client_id.'?ref=list')); ?>" data-action-method="PUT"
                data-action-ajax-loading-target="clients-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <?php endif; ?>

            <!--send email-->
            <button type="button" title="<?php echo app('translator')->get('lang.send_email'); ?>"
                class="data-toggle-action-tooltip btn btn-outline-warning btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(url('/appwebmail/compose?view=modal&webmail_template_type=clients&resource_type=client&resource_id='.$client->client_id)); ?>"
                data-loading-target="commonModalBody" data-modal-title="<?php echo app('translator')->get('lang.send_email'); ?>"
                data-action-url="<?php echo e(url('/appwebmail/send')); ?>" data-action-method="POST" data-modal-size="modal-xl"
                data-action-ajax-loading-target="clients-td-container">
                <i class="ti-email display-inline-block m-t-3"></i>
            </button>

            <a href="/clients/<?php echo e($client->client_id ?? ''); ?>" class="btn btn-outline-info btn-circle btn-sm">
                <i class="ti-new-window"></i>
            </a>
        </span>
        <!--action button-->
        <!--more button (hidden)-->
        <span class="list-table-action dropdown hidden font-size-inherit">
            <button type="button" id="listTableAction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                class="btn btn-outline-default-light btn-circle btn-sm">
                <i class="ti-more"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="listTableAction">
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ti-new-window"></i> <?php echo e(cleanLang(__('lang.view_details'))); ?></a>
            </div>
        </span>
        <!--more button-->
    </td>
    <?php endif; ?>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/clients/components/table/ajax.blade.php ENDPATH**/ ?>