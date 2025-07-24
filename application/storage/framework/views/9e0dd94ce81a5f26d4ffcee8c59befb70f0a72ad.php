<head>

    <!--CRM COPYWRIGHT - GROWCRM.IO-->

    <!--HEADER-LITE - USED FOR EMBEDD AND DIRECT ACCESS CONTENT-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" id="meta-csrf" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo e(config('system.settings_company_name')); ?> <?php echo e(clean($page['meta_title'] ?? '')); ?></title>

    <!--BASEURL-->
    <base href="<?php echo e(url('/')); ?>" target="_self">

    <!--JQUERY & OTHER LITE JS-->
    <script src="public/vendor/js/vendor-lite.header.js?v=<?php echo e(config('system.versioning')); ?>"></script>

    <!--BOOTSTRAP-->
    <link href="public/vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"
        type="text/css">


    <!--VENDORS CSS-->
    <link rel="stylesheet" href="public/vendor/css/vendor-lite.css?v=<?php echo e(config('system.versioning')); ?>">

    <!--THEME STYLE (always use the default theme)-->
    <link href="public/themes/default/css/style.css?v=<?php echo e(config('system.versioning')); ?>" rel="stylesheet">

    <!--USERS CUSTON CSS FILE-->
    <link href="public/css/custom.css?v=<?php echo e(config('system.versioning')); ?>" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon/favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">

    <!--SET DYNAMIC VARIABLE IN JAVASCRIPT-->
    <script type="text/javascript">
        //name space & settings
        NX = (typeof NX == 'undefined') ? {} : NX;
        NXJS = (typeof NXJS == 'undefined') ? {} : NXJS;
        NXLANG = (typeof NXLANG == 'undefined') ? {} : NXLANG;
        NXINVOICE = (typeof NXINVOICE == 'undefined') ? {} : NXINVOICE;
        NX.data = (typeof NX.data == 'undefined') ? {} : NX.data;

        NXINVOICE.DATA = {};
        NXINVOICE.DOM = {};
        NXINVOICE.CALC = {};

        //variables
        NX.site_url = "<?php echo e(url('/')); ?>";
        NX.system_type = "tenant"; //landlord/tenant/frontend
        NX.csrf_token = "<?php echo e(csrf_token()); ?>";
        NX.system_language = "<?php echo e(request('system_language')); ?>";
        NX.date_format = "<?php echo e(config('system.settings_system_date_format')); ?>";
        NX.date_picker_format = "<?php echo e(config('system.settings_system_datepicker_format')); ?>";
        NX.date_moment_format = "<?php echo e(runtimeMomentFormat(config('system.settings_system_date_format'))); ?>";
        NX.upload_maximum_file_size = "<?php echo e(config('system.settings_files_max_size_mb')); ?>";
        NX.settings_system_currency_symbol = "<?php echo e(config('system.settings_system_currency_symbol')); ?>";
        NX.settings_system_decimal_separator =
            "<?php echo e(runtimeCurrrencySeperators(config('system.settings_system_decimal_separator'))); ?>";
        NX.settings_system_thousand_separator =
            "<?php echo e(runtimeCurrrencySeperators(config('system.settings_system_thousand_separator'))); ?>";
        NX.settings_system_currency_position = "<?php echo e(config('system.settings_system_currency_position')); ?>";
        NX.show_action_button_tooltips = "<?php echo e(config('settings.show_action_button_tooltips')); ?>";
        NX.notification_position = "<?php echo e(config('settings.notification_position')); ?>";
        NX.notification_error_duration = "<?php echo e(config('settings.notification_error_duration')); ?>";
        NX.notification_success_duration = "<?php echo e(config('settings.notification_success_duration')); ?>";
        NX.session_login_popup = "<?php echo e(config('system.settings_system_session_login_popup')); ?>";


        //javascript console debug modes
        NX.debug_javascript = "<?php echo e(config('app.debug_javascript')); ?>";

        //popover template
        NX.basic_popover_template = '<div class="popover card-popover" role="tooltip">' +
            '<span class="popover-close" onclick="$(this).closest(\'div.popover\').popover(\'hide\');" aria-hidden="true">' +
            '<i class="ti-close"></i></span>' +
            '<div class="popover-header"></div><div class="popover-body" id="popover-body"></div></div>';

        //lang - used in .js files
        NXLANG.delete_confirmation = "<?php echo e(cleanLang(__('lang.delete_confirmation'))); ?>";
        NXLANG.are_you_sure_delete = "<?php echo e(cleanLang(__('lang.are_you_sure_delete'))); ?>";
        NXLANG.cancel = "<?php echo e(cleanLang(__('lang.cancel'))); ?>";
        NXLANG.continue = "<?php echo e(cleanLang(__('lang.continue'))); ?>";
        NXLANG.file_too_big = "<?php echo e(cleanLang(__('lang.file_too_big'))); ?>";
        NXLANG.maximum = "<?php echo e(cleanLang(__('lang.maximum'))); ?>";
        NXLANG.generic_error = "<?php echo e(cleanLang(__('lang.error_request_could_not_be_completed'))); ?>";
        NXLANG.drag_drop_not_supported = "<?php echo e(cleanLang(__('lang.drag_drop_not_supported'))); ?>";
        NXLANG.use_the_button_to_upload = "<?php echo e(cleanLang(__('lang.use_the_button_to_upload'))); ?>";
        NXLANG.file_type_not_allowed = "<?php echo e(cleanLang(__('lang.file_type_not_allowed'))); ?>";
        NXLANG.cancel_upload = "<?php echo e(cleanLang(__('lang.cancel_upload'))); ?>";
        NXLANG.remove_file = "<?php echo e(cleanLang(__('lang.remove_file'))); ?>";
        NXLANG.maximum_upload_files_reached = "<?php echo e(cleanLang(__('lang.maximum_upload_files_reached'))); ?>";
        NXLANG.upload_maximum_file_size = "<?php echo e(cleanLang(__('lang.upload_maximum_file_size'))); ?>";
        NXLANG.upload_canceled = "<?php echo e(cleanLang(__('lang.upload_canceled'))); ?>";
        NXLANG.are_you_sure = "<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>";
        NXLANG.image_dimensions_not_allowed = "<?php echo e(cleanLang(__('lang.image_dimensions_not_allowed'))); ?>";
        NXLANG.ok = "<?php echo e(cleanLang(__('lang.ok'))); ?>";
        NXLANG.cancel = "<?php echo e(cleanLang(__('lang.cancel'))); ?>";
        NXLANG.close = "<?php echo e(cleanLang(__('lang.close'))); ?>";
        NXLANG.system_default_category_cannot_be_deleted =
            "<?php echo e(cleanLang(__('lang.system_default_category_cannot_be_deleted'))); ?>";
        NXLANG.default_category = "<?php echo e(cleanLang(__('lang.default_category'))); ?>";
        NXLANG.select_atleast_one_item = "<?php echo e(cleanLang(__('lang.select_atleast_one_item'))); ?>";
        NXLANG.invalid_discount = "<?php echo e(cleanLang(__('lang.invalid_discount'))); ?>";
        NXLANG.add_lineitem_items_first = "<?php echo e(cleanLang(__('lang.add_lineitem_items_first'))); ?>";
        NXLANG.fixed = "<?php echo e(cleanLang(__('lang.fixed'))); ?>";
        NXLANG.percentage = "<?php echo e(cleanLang(__('lang.percentage'))); ?>";
        NXLANG.action_not_completed_errors_found = "<?php echo e(cleanLang(__('lang.action_not_completed_errors_found'))); ?>";
        NXLANG.selected_expense_is_already_on_invoice =
            "<?php echo e(cleanLang(__('lang.selected_expense_is_already_on_invoice'))); ?>";
        NXLANG.please_wait = "<?php echo e(cleanLang(__('lang.please_wait'))); ?>";
        NXLANG.invoice_time_unit = "<?php echo e(cleanLang(__('lang.time'))); ?>";

        //arrays to use generically
        NX.array_1 = [];
        NX.array_2 = [];
        NX.array_3 = [];
        NX.array_4 = [];
    </script>

</head><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/layout/header-lite.blade.php ENDPATH**/ ?>