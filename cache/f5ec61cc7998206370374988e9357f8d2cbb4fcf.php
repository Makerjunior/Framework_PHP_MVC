
<?php $__env->startSection('title','Produtos'); ?>
<?php $__env->startSection('content'); ?>
<h1 class="text-center m-5">Meus Produtos</h1>


<table>
 <tr>
        <td>Nome</td>
        <td>Preço</td>
        <td>Ação</td>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produtos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($produtos->name); ?></td>
        <td><?php echo e($produtos->price); ?></td>
        <td> <a href="<?php echo DIRPAGE . 'MVC/produtos/' . $produtos->id ?>">Ler</a>
        <a href="<?php echo DIRPAGE.'MVC/produto_edit/'.$produtos->id; ?>">Editar</a> 
        <a href="<?php echo DIRPAGE.'MVC/produto_delete/'.$produtos->id; ?>">Deletar</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MVC\views/produtos.blade.php ENDPATH**/ ?>