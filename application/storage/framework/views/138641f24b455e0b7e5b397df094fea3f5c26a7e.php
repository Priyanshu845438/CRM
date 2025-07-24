<div class="row">
    <div class="col-lg-12">

        <?php if(config('visibility.contacts_modal_client_fields')): ?>
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.company_name'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <!--select2 basic search-->
                <select name="clientid" id="clientid"
                    class="form-control form-control-sm js-select2-basic-search-modal select2-hidden-accessible"
                    data-ajax--url="<?php echo e(url('/')); ?>/feed/company_names"></select>
                <!--select2 basic search-->
            </div>
        </div>
        <?php endif; ?>

        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.first_name'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control form-control-sm" id="first_name" name="first_name"
                    value="<?php echo e($user->first_name ?? ''); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.last_name'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control form-control-sm" id="last_name" name="last_name"
                    value="<?php echo e($user->last_name ?? ''); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.email_address'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control form-control-sm" id="email" name="email"
                    value="<?php echo e($user->email ?? ''); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.telephone'))); ?></label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control form-control-sm" id="phone" name="phone"
                    value="<?php echo e($user->phone ?? ''); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.position'))); ?></label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control form-control-sm" id="position" name="position"
                    value="<?php echo e($user->position ?? ''); ?>">
            </div>
        </div>


        <!--[UPCOMING] change account owner-->
        <?php if(config('visibility.contacts_modal_account_owner')): ?>
        <div class="form-group form-group-checkbox row hidden">
            <label class="col-sm-12 col-lg-3 col-form-label text-left"><?php echo e(cleanLang(__('lang.account_owner'))); ?>?</label>
            <div class="col-6 text-left p-t-5">
                <input type="checkbox" id="account_owner" name="account_owner" class="filled-in chk-col-light-blue"
                    <?php echo e(runtimeAccountOwnerDisabled($user['account_owner'] ?? '')); ?>

                    <?php echo e(runtimeAccountOwnerCheckbox($user['account_owner'] ?? '')); ?>>
                <label for="account_owner"></label>
            </div>
        </div>
        <?php endif; ?>

        <?php if(isset($page['section']) && $page['section'] == 'edit'): ?>
        <!--social profile-->
        <div class="spacer row">
            <div class="col-sm-12 col-lg-8">
                <?php echo e(cleanLang(__('lang.social_profile'))); ?>

            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="switch  text-right">
                    <label>
                        <input type="checkbox" name="toggle_social_profile" id="toggle_social_profile"
                            class="js-switch-toggle-hidden-content" data-target="social_profile_section">
                        <span class="lever switch-col-light-blue"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="hidden" id="social_profile_section">
            <!--twitter-->
            <div class="form-group row">
                <label class="col-sm-12 col-lg-3 text-left control-label col-form-label">Twitter</label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" id="social_twitter" name="social_twitter"
                        value="<?php echo e($user->social_twitter ?? ''); ?>" placeholder="<?php echo e(cleanLang(__('lang.social_profile_username'))); ?>">
                </div>
            </div>
            <!--facebook-->
            <div class="form-group row">
                <label class="col-sm-12 col-lg-3 text-left control-label col-form-label">Facebook</label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" id="social_facebook" name="social_facebook"
                        value="<?php echo e($user->social_facebook ?? ''); ?>" placeholder="<?php echo e(cleanLang(__('lang.social_profile_username'))); ?>">
                </div>
            </div>
            <!--linkedin-->
            <div class="form-group row">
                <label class="col-sm-12 col-lg-3 text-left control-label col-form-label">LinkedIn</label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" id="social_linkedin" name="social_linkedin"
                        value="<?php echo e($user->social_linkedin ?? ''); ?>" placeholder="<?php echo e(cleanLang(__('lang.social_profile_username'))); ?>">
                </div>
            </div>
            <!--github-->
            <div class="form-group row">
                <label class="col-sm-12 col-lg-3 text-left control-label col-form-label">Github</label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" id="social_github" name="social_github"
                        value="<?php echo e($user->social_github ?? ''); ?>" placeholder="<?php echo e(cleanLang(__('lang.social_profile_username'))); ?>">
                </div>
            </div>
            <!--dribble-->
            <div class="form-group row">
                <label class="col-sm-12 col-lg-3 text-left control-label col-form-label">Dribble</label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" id="social_dribble" name="social_dribble"
                        value="<?php echo e($user->social_dribble ?? ''); ?>" placeholder="<?php echo e(cleanLang(__('lang.social_profile_username'))); ?>">
                </div>
            </div>
        </div>
        <!--social profile-->
        <?php endif; ?>

        <!--pass source-->
        <input type="hidden" name="source" value="<?php echo e(request('source')); ?>">

        <!--notes-->
        <div class="row">
            <div class="col-12">
                <div><small><strong>* <?php echo e(cleanLang(__('lang.required'))); ?></strong></small></div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/contacts/components/modals/add-edit-inc.blade.php ENDPATH**/ ?>