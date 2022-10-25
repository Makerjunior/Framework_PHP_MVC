<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- CSS only -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo DIRPAGE.'MVC/views/css/style.css'; ?>">



    <title><?php echo $__env->yieldContent('title'); ?></title>


</head>

<body>

<nav class="nav justify-content-center  ">
  <a class="nav-link " href="/MVC/home" >Home</a>
  <a class="nav-link" href="/MVC/produtos">Produtos</a>
  <a class="nav-link" href="<?php echo DIRPAGE.'MVC/produtos_create'; ?>">Adicionar</a>

</nav>



    <?php echo $__env->yieldContent('content'); ?>

  
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo DIRPAGE.'MVC/views/js/javascript.js'; ?>"></script>
 

</script> 

</body>
</html><?php /**PATH C:\wamp64\www\MVC\views/templates/default.blade.php ENDPATH**/ ?>