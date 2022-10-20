<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo</title>
</head>
<body>
    <h1>Pagina de texte</h1>
    <p>Marcas de carros</p>
    <?php  
    $tan=count($Marca);
  for ($i=0; $i < $tan; $i++) { 
   echo $Marca[$i]."<br>";
  }

    ?>
</body>
</html>