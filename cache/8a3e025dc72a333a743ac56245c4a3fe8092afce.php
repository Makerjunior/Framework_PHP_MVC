

<?php $__env->startSection('title','Homepage'); ?>
<?php $__env->startSection('content'); ?>
<div class="text-center mt-5">
<h1>Minha primeira seção</h1>
    Bem vindo <?php echo e($name); ?>

    <br><br>
</div>

<?php $__env->stopSection(); ?>  

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MVC\views/home.blade.php ENDPATH**/ ?>