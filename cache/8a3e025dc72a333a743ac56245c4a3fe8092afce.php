

<?php $__env->startSection('title','Homepage'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Minha primeira seção</h1>
    Bem vindo <?php echo e($name); ?>


<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MVC\views/home.blade.php ENDPATH**/ ?>