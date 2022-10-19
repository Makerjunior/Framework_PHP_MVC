
<?php $__env->startSection('title','Produtos'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Produtos</h1>
<p>Produto:<?php echo e($produto ?? "Não encontrado"); ?></p>
<p>Marca:<?php echo e($marca ?? "Não encontrado"); ?></p>

<?php $__env->stopSection(); ?>    
 
    

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MVC\views/produtos.blade.php ENDPATH**/ ?>