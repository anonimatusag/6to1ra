<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>    
    <main>
    <body>

<?php
// Incluimos el archivo que contiene nuestras variables 
include 'config.php';

// Ahora podemos usar las variables definidas en config.php
echo "

<h1>Bienvenido a " . $nombre_sitio . "</h1>";
?>


<p>Este sitio fue creado en el año <?php 
echo $año_actual; ?>.</p>
    <?php
   // Código PHP aquí
   echo "Hola mundo en PHP!";
     ?>
    </main>
    <footer>2025 Agustin Ayvar.</footer>
</body>
</html>
