<?php if(auth()->user()->is_team): ?>
<?php echo $__env->make('nav.leftmenu-team', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(auth()->user()->is_client): ?>
<?php echo $__env->make('nav.leftmenu-client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<!--[AFFILIATE]-->
<?php if(config('settings.custom_modules.cs_affiliate') && auth()->user()->type == 'cs_affiliate'): ?>
<?php echo $__env->make('pages.cs_affiliates.home.widgets.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/u361343093/domains/acadifysolution.com/public_html/crm/application/resources/views/nav/leftmenu.blade.php ENDPATH**/ ?>