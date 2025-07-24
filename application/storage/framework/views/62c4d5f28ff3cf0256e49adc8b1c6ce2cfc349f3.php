<!-- Column -->
<div class="card">
    <!--has logo-->
    <?php if(isset($client['client_logo_folder']) && $client['client_logo_folder'] != ''): ?>
    <div class="card-body profile_header">
        <img src="<?php echo e(url('/')); ?>/storage/logos/clients/<?php echo e($client['client_logo_folder'] ?? '0'); ?>/<?php echo e($client['client_logo_filename'] ?? ''); ?>">
    </div>
    <?php else: ?>
    <!--no logo -->
    <div class="card-body profile_header client logo-text">
        <?php echo e($client->client_company_name); ?>

    </div>
    <?php endif; ?>
    <div class="card-body p-t-0 p-b-0">
        <?php if(auth()->user()->is_team): ?>
        <div>
            <small class="text-muted"><?php echo e(cleanLang(__('lang.client_name'))); ?></small>
            <h6><?php echo e($client->client_company_name); ?></h6>
            <small class="text-muted"><?php echo e(cleanLang(__('lang.telephone'))); ?></small>
            <h6><?php echo e($client->client_phone); ?></h6>
            <small class="text-muted"><?php echo e(cleanLang(__('lang.account_owner'))); ?></small>
            <div class="m-b-10"><img src="<?php echo e(getUsersAvatar($owner->avatar_directory, $owner->avatar_filename)); ?>" alt="user" class="img-circle avatar-xsmall"> <?php echo e($owner->first_name); ?> <?php echo e($owner->last_name); ?></div>
            <small class="text-muted"><?php echo e(cleanLang(__('lang.category'))); ?></small>
            <div class="p-b-10">
                <span class="badge badge-pill badge-primary p-t-4 p-l-12 p-r-12"><?php echo e($client->category_name); ?></span>
            </div>
            <small class="text-muted"><?php echo e(cleanLang(__('lang.account_status'))); ?></small>
            <div class="p-b-10">
                <?php if($client->client_status == 'active'): ?>
                <span class="badge badge-pill badge-success p-t-4 p-l-12 p-r-12"><?php echo e(cleanLang(__('lang.active'))); ?></span>
                <?php else: ?>
                <span class="badge badge-pill badge-danger p-t-4 p-l-12 p-r-12"><?php echo e(cleanLang(__('lang.suspended'))); ?></span>
                <?php endif; ?>
            </div>

            <small class="text-muted"><?php echo e(cleanLang(__('lang.tags'))); ?></small>
            <div class="l-h-24">
                <?php $__currentLoopData = $client->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="label label-rounded label-default tag p-t-3 p-b-3"><?php echo e($tag->tag_title); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div>
        <hr> </div>
    <div class="card-body p-t-0 p-b-0">
        <div>
            <table class="table no-border m-b-0">
                <tbody>
                    <!--invoices-->
                    <tr>
                        <td class="p-l-0 p-t-5"id="fx-client-left-panel-invoices"><?php echo e(cleanLang(__('lang.invoices'))); ?></td>
                        <td class="font-medium p-r-0 p-t-5">
                            <?php echo e(runtimeMoneyFormat($client->sum_invoices_all)); ?>

                            <div class="progress">
                                <div class="progress-bar bg-info  w-100 h-px-3" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <!--payments-->
                    <tr>
                        <td class="p-l-0 p-t-5"><?php echo e(cleanLang(__('lang.payments'))); ?></td>
                        <td class="font-medium p-r-0 p-t-5"><?php echo e(runtimeMoneyFormat($client->sum_all_payments)); ?>

                            <div class="progress">
                                <div class="progress-bar bg-success w-100 h-px-3" role="progressbar"aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <!--completed projects-->
                    <tr>
                        <td class="p-l-0 p-t-5"><?php echo e(cleanLang(__('lang.completed_projects'))); ?></td>
                        <td class="font-medium p-r-0 p-t-5"><?php echo e($client->count_projects_completed); ?>

                            <div class="progress">
                                <div class="progress-bar bg-warning  w-100 h-px-3" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <!--open projects-->
                    <tr>
                        <td class="p-l-0 p-t-5"><?php echo e(cleanLang(__('lang.open_projects'))); ?></td>
                        <td class="font-medium p-r-0 p-t-5"><?php echo e($client->count_projects_pending); ?>

                            <div class="progress">
                                <div class="progress-bar bg-danger w-100 h-px-3" role="progressbar"aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <hr> </div>
        <!--client address-->
    <div class="card-body p-t-0 p-b-0">
        <small class="text-muted"><?php echo e(cleanLang(__('lang.address'))); ?></small>
        <?php if($client->client_billing_street !== ''): ?>
        <h6><?php echo e($client->client_billing_street); ?></h6>
        <?php endif; ?>
        <?php if($client->client_billing_city !== ''): ?>
        <h6><?php echo e($client->client_billing_city); ?></h6>
        <?php endif; ?>
        <?php if($client->client_billing_state !== ''): ?>
        <h6><?php echo e($client->client_billing_state); ?></h6>
        <?php endif; ?>
        <?php if($client->client_billing_zip !== ''): ?>
        <h6><?php echo e($client->client_billing_zip); ?></h6>
        <?php endif; ?>
        <?php if($client->client_billing_country !== ''): ?>
        <h6><?php echo e($client->client_billing_country); ?></h6>
        <?php endif; ?>
    </div>

    <?php if(config('visibility.client_show_custom_fields')): ?>
    <!--CUSTOMER FIELDS-->
    <div class="m-t-10 m-b-10">
        <hr>
    </div>
    <div class="card-body p-t-0 p-b-0">
        <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($field->customfields_show_client_page == 'yes'): ?>
        <div class="x-each-field m-b-18">
            <div class="panel-label p-b-3"><?php echo e($field->customfields_title); ?>

            </div>
            <div class="x-content">
                <?php echo e(strip_tags(customFieldValue($field->customfields_name, $client, $field->customfields_datatype))); ?></div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if(config('app.application_demo_mode')): ?>
        <!--DEMO INFO-->
        <div class="alert alert-info">
            <h5 class="text-info"><i class="sl-icon-info"></i> Demo Info</h5> 
            These are custom fields. You can change them or <a href="<?php echo e(url('app/settings/customfields/projects')); ?>">create your own.</a>
        </div>
        <?php endif; ?>
        
    </div>
    <?php endif; ?>


    <div class="d-none last-line">
        <hr> </div>
</div>
<!-- Column --><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/client/components/misc/leftpanel.blade.php ENDPATH**/ ?>