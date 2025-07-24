<div class="setup-welcome" id="setup-welcome">

    <!--image-->
    <div class="x-image">
        <img src="public/images/wizard.png">
    </div>

    <!--title-->
    <div class="x-title">
        <h2 class="text-info">Installation</h2>
    </div>

    <div class="x-subtitle">
        This wizard will guide you through the installation process. For help, please refer to our <a
            href="https://growcrm.io/documentation/">documentation</a>.
        </br>
    </div>

    <!--item-->
    <div class="form-group row">
        <label class="col-sm-12 control-label col-form-label required">Product Purchase Code</label>
        <div class="col-sm-12">
            <input type="text" placeholder="Enter random value" class="form-control form-control-sm" name="purchase_code"
                value="">
        </div>
    </div>

       
    <div class="x-button m-t-30">
        <button type="button" class="btn waves-effect waves-light btn-block btn-info js-ajax-request"
            data-button-loading-annimation="yes" data-button-disable-on-click="yes"
            data-type="form" 
            data-form-id="setup-welcome" 
            data-ajax-type="post"
            data-url="<?php echo e(url('setup/requirements')); ?>">Start Installation</button>
    </div>

</div><?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/pages/setup/welcome.blade.php ENDPATH**/ ?>