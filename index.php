<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hoja de vida PHP</title>
</head>
<body>
    <?php
    $nombre = "Haider Riascos";
    $profesion = "Ingeniero de Sistemas";
    $edad = 20;
    $habilidades = [
        "html","css","javascript","php","mysql","python","java"
    ]; //arreglo
   
    ?>
   <h1><?php echo $nombre; ?></h1>
    <h2><?php echo $profesion; ?></h2>
    <p> <?php echo "soy". $nombre. "y soy ". $profesion; ?></p> <!--- concatenacion -->
    
    <?php if ($edad >=18):?> <!--- condicionales -->
    <p> disponible para trabajar</p>
    <?php else: ?>
        <p>menor de edad - no puede trabajar</p>
        <?php endif; ?>


</body>
</html>