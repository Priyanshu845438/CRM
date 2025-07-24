    <div class="col-lg-8  col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex m-b-30">
                    <h5 class="card-title m-b-0 align-self-center"><?php echo e(cleanLang(__('lang.income_vs_expense'))); ?></h5>
                    <div class="ml-auto align-self-center">
                        <ul class="list-inline font-12">
                            <li><span class="label label-success label-rounded"><i class="fa fa-circle"></i> <?php echo e(cleanLang(__('lang.income'))); ?></span></li>
                            <li><span class="label label-info label-rounded"><i class="fa fa-circle text-info"></i> <?php echo e(cleanLang(__('lang.expense'))); ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="incomeexpenses ct-charts" id="admin-dhasboard-income-vs-expenses"></div>
                <div class="row text-center">
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h2 class="m-b-0 font-light"><?php echo e($payload['income']['year']); ?></h2>
                        <small><?php echo e(cleanLang(__('lang.period'))); ?></small>
                    </div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h2 class="m-b-0 font-light"><?php echo e(runtimeMoneyFormat($payload['income']['total'])); ?></h2>
                        <small><?php echo e(cleanLang(__('lang.income'))); ?></small>
                    </div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h2 class="m-b-0 font-light"><?php echo e(runtimeMoneyFormat($payload['expenses']['total'])); ?></h2>
                        <small><?php echo e(cleanLang(__('lang.expenses'))); ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--[DYNAMIC INLINE SCRIPT] - Backend Variables to Javascript Variables-->
    <script>
        NX.admin_home_chart_income = JSON.parse('<?php echo json_encode(clean($payload["income"]["monthly"])); ?>', true);
        NX.admin_home_chart_expenses = JSON.parse('<?php echo json_encode(clean($payload["expenses"]["monthly"])); ?>', true);
        NX.admin_home_c3_leads_title = "<?php echo e($payload['leads_chart_center_title']); ?>";
    </script><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/home/admin/widgets/second-row/income.blade.php ENDPATH**/ ?>