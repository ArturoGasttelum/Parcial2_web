<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 2. PHP dentro de HTML</title>
</head>
<body>
	<?php 
       $numero = rand(1,4);
       $color = ["#487e8a", "#7747b6", "#85b41d", "#1457c4"];
       $numcolor = rand(0, 3);

       echo "Numero generado = " . $numero ."<br>";
       echo "color generado = ".$color[$numcolor];

       if ($numero == 1){
    ?>
       <h1 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 1</h1>

     <?php } elseif($numero == 2) { ?>

       <h2 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 2</h2> 
          
     <?php } elseif($numero == 3) { ?>
     
       <h3 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 3</h3>

     <?php } else { ?>

       <h4 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 4</h4>
     <?php } ?>  

     <h3>Nombre: Gastelum Rocha Jose Arturo</h3>
</body>
</html>