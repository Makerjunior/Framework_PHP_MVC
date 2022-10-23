
<?php $__env->startSection('title','Pesquisa'); ?>
<?php $__env->startSection('content'); ?>

<div id="Container">


   <h2 class="text-center m-4">Pesquisar produtos:</h2>
   <div id="Pesquisar" class="text-center">
      <form action="C:\wamp64\www\MVC\index.php" method="post" name="form" id="form">
         <input type="text" name="nome" id="nome" placeholder="Digite o nome:">
         <input type="submit" value="Buscar">
      </form>

   </div>
   <hr />

   <h2 class="text-center">Resultados da pesquisa:</h2>
   <div id="Resultado"></div>



   <?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MVC\views/Pesquisaajax.blade.php ENDPATH**/ ?>