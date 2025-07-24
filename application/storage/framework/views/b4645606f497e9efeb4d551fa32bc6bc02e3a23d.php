<!DOCTYPE html>
<html lang="en" class="direct-view webform">

<!--LITE MINIMAL HEADER-->
<?php echo $__env->make('layout.header-lite', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<body class="<?php echo e(config('visibility.webform_view')); ?>">

    <!--preloader-->
    <div class="preloader">
        <div class="loader">
            <div class="loader-loading"></div>
        </div>
    </div>
    <!--preloader-->

    <!--logo-->
    <div class="webform-logo hidden">
        <img src="<?php echo e(runtimeLogoLarge()); ?>" alt="homepage" class="logo-large" />
    </div>

    <!--SHOW FORM-->
    <?php if(config('visibility.webform') == 'show'): ?>
    <div class="wrapper p-b-50 p-t-50">

        <!--the form-->
        <div id="webform">
            <!--form fields-->
            <div class="webform-fields-wrapper" id="webform-fields-wrapper">
                <?php echo $fields; ?>

            </div>

            <!--form errors-->
            <div class="webform-errors-wrapper hidden" id="webform-errors-wrapper">
                <div class="alert alert-danger">
                    <h5 class="text-danger"><i class="sl-icon-info"></i> <?php echo app('translator')->get('lang.fill_in_all_required_fields'); ?>
                    </h5>
                    <ul id="webform-errors">
                        <!--dynamic-->
                    </ul>
                </div>
            </div>

            <!--form buttons-->
            <div class="text-right p-t-30" id="webform-buttons-container">
                <button type="submit" id="submitButton" class="btn btn-info waves-effect text-left ajax-request"
                    data-url="<?php echo e(url('webform/submit/'.$webform->webform_id)); ?>" data-type="form" data-form-id="webform"
                    data-progress-bar="hidden" data-ajax-type="post"
                    data-loading-target="webform-buttons-container"><?php echo e($webform->webform_submit_button_text ?? __('lang.submit')); ?></button>

            </div>
        </div>

        <!--error message-->
        <div class="page-notification hidden" id="webform-system-error">
            <img class="m-b-30" src="<?php echo e(url('/')); ?>/public/images/404.png" alt="404 - Not found" />
            <h3 class="m-b-30 font-weight-200"> <?php echo app('translator')->get('lang.application_error'); ?> </h3>
        </div>

        <!--error message-->
        <div class="p-t-10 hidden" id="webform-submit-success">

        </div>


    </div>
    <?php endif; ?>


    <!--SHOW ERROR-->
    <?php if(config('visibility.webform') == 'error'): ?>
    <div class="wrapper p-b-50">

    </div>
    <?php endif; ?>


</body>


<!--JS FOOTER - LITE-->
<?php echo $__env->make('layout.footerjs-lite', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--REMOVE LOADER-->
<script>
    $(window).bind("load", function () {
        $(".preloader").hide();
    });
</script>

</html><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/webform/form.blade.php ENDPATH**/ ?>