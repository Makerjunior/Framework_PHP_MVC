
<?php $__env->startSection('title','Adicionar Produtos'); ?>
<?php $__env->startSection('content'); ?>
<div class="container  text-center mt-5 border">
    <?php echo e($success ?? ''); ?>

    <?php if(isset($data)): ?>
    <div class="container">
    <form name="form1" id="form" method="post" action="<?php echo DIRPAGE.'MVC/produto_edit/'.$data->id; ?>">
    <h2 class="text-center">Editar Produto</h2>  
    <?php else: ?> 
    <form name="form1" id="form" method="post" action="<?php echo DIRPAGE.'MVC/produtos_create'; ?>">
     <h2 class="text-center">Adicionar Produto</h2>   
    <?php endif; ?>
    
        <input class="m-2" name="name" id="name" placeholder="Nome:" type="text"  value="<?php echo e($data->name ?? ''); ?>" required> <br>
        <input class="m-2" name="price" id="price" placeholder="Preço:" type="text" value="<?php echo e($data->price ?? ''); ?>" required> <br>
        <input type="submit" value="Cadastrar"> <br>
    </form>
    </div>
  
<?php $__env->stopSection(); ?>

</div>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MVC\views/produtos_create.blade.php ENDPATH**/ ?>