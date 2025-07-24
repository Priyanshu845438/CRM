<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" id="meta-csrf" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo e(config('system.settings_company_name')); ?></title>


    <!--
        web preview example
        http://example.com/invoices/29/pdf?view=preview
        <?php echo e(BASE_DIR.'/'); ?>

    -->

    <?php if(request('view') == 'preview'): ?>
    <base href="<?php echo e(url('/')); ?>" target="_self">
    <link href="public/vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <?php else: ?>
    <base href="" target="_self">
    <link href="<?php echo e(BASE_DIR); ?>/public/vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <?php endif; ?>

    <!-- [DYNAMIC] style sets dynamic paths to font files-->
    <style>
        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: normal;
            src: url('<?php echo e(storage_path("app/DejaVuSans.ttf")); ?>') format("truetype");
        }

        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: 400;
            src: url('<?php echo e(storage_path("app/DejaVuSans.ttf")); ?>') format("truetype");
        }

        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: bold;
            src: url('<?php echo e(storage_path("app/DejaVuSans-Bold.ttf")); ?>') format("truetype");
        }

        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: 600;
            src: url('<?php echo e(storage_path("app/DejaVuSans-Bold.ttf")); ?>') format("truetype");
        }
    </style>



<?php if(request('view') == 'preview'): ?>
<link href="<?php echo e(config('theme.selected_theme_pdf_css')); ?>" rel="stylesheet">
<?php else: ?>
<link href="<?php echo e(BASE_DIR); ?>/<?php echo e(config('theme.selected_theme_pdf_css')); ?>" rel="stylesheet">
<?php endif; ?>

<!--custom CSS file (DB) -->
<?php echo customDPFCSS(config('system.settings2_bills_pdf_css')); ?>


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
</head>

<body class="pdf-page">

    <div class="bill-pdf <?php echo e(config('css.bill_mode')); ?> <?php echo e($page['bill_mode'] ?? ''); ?>">

        <!--HEADER-->
        <div class="bill-header">
            <!--INVOICE HEADER-->
            <?php if($bill->bill_type =='invoice'): ?>
            <table>
                <tbody>
                    <tr>
                        <td class="x-left">
                            <div class="x-logo">
                                <img
                                    src="<?php echo e(BASE_DIR); ?>/storage/logos/app/<?php echo e(config('system.settings_system_logo_large_name')); ?>">
                            </div>
                        </td>
                        <td class="x-right">
                            <div class="x-bill-type">
                                <!--draft-->
                                <span
                                    class="js-invoice-statuses <?php echo e(runtimeInvoiceStatus('draft', $bill->bill_status)); ?>"
                                    id="invoice-status-draft">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeInvoiceStatusColors($bill->bill_status, 'text')); ?> muted">
                                        <?php echo e(cleanLang(__('lang.draft'))); ?></h2>
                                </span>
                                <!--due-->
                                <span class="js-invoice-statuses <?php echo e(runtimeInvoiceStatus('due', $bill->bill_status)); ?>"
                                    id="invoice-status-due">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeInvoiceStatusColors($bill->bill_status, 'text')); ?>">
                                        <?php echo e(cleanLang(__('lang.due'))); ?></h2>
                                </span>
                                <!--overdue-->
                                <span
                                    class="js-invoice-statuses <?php echo e(runtimeInvoiceStatus('overdue', $bill->bill_status)); ?>"
                                    id="invoice-status-overdue">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeInvoiceStatusColors($bill->bill_status, 'text')); ?>">
                                        <?php echo e(cleanLang(__('lang.overdue'))); ?></h2>
                                </span>
                                <!--paid-->
                                <span class="js-invoice-statuses <?php echo e(runtimeInvoiceStatus('paid', $bill->bill_status)); ?>"
                                    id="invoice-status-paid">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeInvoiceStatusColors($bill->bill_status, 'text')); ?>">
                                        <?php echo e(cleanLang(__('lang.paid'))); ?></h2>
                                </span>
                            </div>
                            <div class="x-bill-type">
                                <h4><strong><?php echo e(cleanLang(__('lang.invoice'))); ?></strong></h4>
                                <h5><?php echo e($bill->formatted_bill_invoiceid); ?></h5>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php endif; ?>
            <!--ESTIMATE HEADER-->
            <?php if($bill->bill_type =='estimate'): ?>
            <table>
                <tbody>
                    <tr>
                        <td class="x-left">
                            <div class="x-logo">
                                <img
                                    src="<?php echo e(BASE_DIR); ?>/storage/logos/app/<?php echo e(config('system.settings_system_logo_large_name')); ?>">
                            </div>
                        </td>
                        <td class="x-right">
                            <div class="x-bill-type">
                                <!--draft-->
                                <span
                                    class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('draft', $bill->bill_status)); ?>"
                                    id="estimate-status-draft">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeEstimateStatusColors($bill->bill_status, 'text')); ?> muted">
                                        <?php echo e(cleanLang(__('lang.draft'))); ?></h2>
                                </span>
                                <!--new-->
                                <span
                                    class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('new', $bill->bill_status)); ?>"
                                    id="estimate-status-new">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeEstimateStatusColors($bill->bill_status, 'text')); ?>">
                                        <?php echo e(cleanLang(__('lang.new'))); ?></h2>
                                </span>
                                <!--accepted-->
                                <span
                                    class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('accepted', $bill->bill_status)); ?>"
                                    id="estimate-status-accpeted">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeEstimateStatusColors($bill->bill_status, 'text')); ?>">
                                        <?php echo e(cleanLang(__('lang.accepted'))); ?></h2>
                                </span>
                                <!--declined-->
                                <span
                                    class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('declined', $bill->bill_status)); ?>"
                                    id="estimate-status-declined">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeEstimateStatusColors($bill->bill_status, 'text')); ?>">
                                        <?php echo e(cleanLang(__('lang.declined'))); ?></h2>
                                </span>
                                <!--revised-->
                                <span
                                    class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('revised', $bill->bill_status)); ?>"
                                    id="estimate-status-revised">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeEstimateStatusColors($bill->bill_status, 'text')); ?>">
                                        <?php echo e(cleanLang(__('lang.revised'))); ?></h2>
                                </span>
                                <!--expired-->
                                <span
                                    class="js-estimate-statuses <?php echo e(runtimeEstimateStatus('expired', $bill->bill_status)); ?>"
                                    id="estimate-status-expired">
                                    <h2
                                        class="text-uppercase <?php echo e(runtimeEstimateStatusColors($bill->bill_status, 'text')); ?>">
                                        <?php echo e(cleanLang(__('lang.expired'))); ?></h2>
                                </span>
                            </div>
                            <div class="x-bill-type">
                                <h4><strong><?php echo e(cleanLang(__('lang.estimate'))); ?></strong></h4>
                                <h5>#<?php echo e($bill->formatted_bill_estimateid); ?></h5>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php endif; ?>
        </div>

        <!--ADDRESSES & DATES-->
        <div class="bill-addresses">
            <table>
                <tbody>
                    <tr>
                        <!--company-->
                        <td class="x-left">
                            <div class="x-company-name">
                                <h5 class="p-b-0 m-b-0"><strong><?php echo e(config('system.settings_company_name')); ?></strong>
                                </h5>
                            </div>
                            <?php if(config('system.settings_company_address_line_1')): ?>
                            <div class="x-line"><?php echo e(config('system.settings_company_address_line_1')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_state')): ?>
                            <div class="x-line">
                                <?php echo e(config('system.settings_company_state')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_city')): ?>
                            <div class="x-line">
                                <?php echo e(config('system.settings_company_city')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_zipcode')): ?>
                            <div class="x-line">
                                <?php echo e(config('system.settings_company_zipcode')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_country')): ?>
                            <div class="x-line">
                                <?php echo e(config('system.settings_company_country')); ?>

                            </div>
                            <?php endif; ?>

                            <!--custom company fields-->
                            <?php if(config('system.settings_company_customfield_1') != ''): ?>
                            <div class="x-line">
                                <?php echo e(config('system.settings_company_customfield_1')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_customfield_2') != ''): ?>
                            <div class="x-line">
                                <?php echo e(config('system.settings_company_customfield_2')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_customfield_3') != ''): ?>
                            <div class="x-line">
                                <?php echo e(config('system.settings_company_customfield_3')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_customfield_4') != ''): ?>
                            <div class="x-line">
                                <?php echo e(config('system.settings_company_customfield_4')); ?>

                            </div>
                            <?php endif; ?>
                        </td>
                        <td></td>
                        <!--customer-->
                        <td class="x-right">
                            <div class="x-company-name">
                                <h5 class="p-b-0 m-b-0"><strong><?php echo e($bill->client_company_name); ?></strong></h5>
                            </div>
                            <?php if($bill->client_billing_street): ?>
                            <div class="x-line">
                                <?php echo e($bill->client_billing_street); ?>

                            </div>
                            <?php endif; ?>
                            <?php if($bill->client_billing_city): ?>
                            <div class="x-line">
                                <?php echo e($bill->client_billing_city); ?>

                            </div>
                            <?php endif; ?>
                            <?php if($bill->client_billing_state): ?>
                            <div class="x-line">
                                <?php echo e($bill->client_billing_state); ?>

                            </div>
                            <?php endif; ?>
                            <?php if($bill->client_billing_zip): ?>
                            <div class="x-line">
                                <?php echo e($bill->client_billing_zip); ?>

                            </div>
                            <?php endif; ?>
                            <?php if($bill->client_billing_country): ?>
                            <div class="x-line">
                                <?php echo e($bill->client_billing_country); ?>

                            </div>
                            <?php endif; ?>

                            <!--custom fields-->
                            <?php $__currentLoopData = $customfields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($field->customfields_show_invoice == 'yes' && $field->customfields_status == 'enabled'): ?>
                            <?php $key = $field->customfields_name; ?>
                            <?php $customfield = $bill[$key] ?? ''; ?>
                            <?php if($customfield != ''): ?>
                            <div class="x-line">
                                <?php echo e($field->customfields_title); ?>: <?php echo e(runtimeCustomFieldsFormat($customfield, $field->customfields_datatype)); ?>

                            </div>
                            <?php endif; ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="bill-dates">
                <tbody>
                    <tr>
                        <td class="x-left">
                            <?php if($bill->bill_type == 'invoice'): ?>
                            <?php echo $__env->make('pages.bill.components.elements.invoice.dates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                            <?php if($bill->bill_type == 'estimate'): ?>
                            <?php echo $__env->make('pages.bill.components.elements.estimate.dates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </td>
                        <td class="x-right">
                            <?php if($bill->bill_type == 'invoice'): ?>
                            <?php echo $__env->make('pages.bill.components.elements.invoice.payments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!--DATES & AMOUNT DUE-->




        <!--INVOICE TABLE-->
        <div class="bill-table-pdf">
            <?php echo $__env->make('pages.bill.components.elements.main-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- TOTAL & SUMMARY -->
        <div class="bill-totals-table-pdf">
            <?php echo $__env->make('pages.bill.components.elements.totals-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!--TERMS-->
        <div class="invoice-pdf-terms">
            <h6><strong><?php echo e(cleanLang(__('lang.terms'))); ?></strong></h6>
            <?php echo clean($bill->bill_terms); ?>

        </div>
    </div>
</body>

</html><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/bill/bill-pdf.blade.php ENDPATH**/ ?>