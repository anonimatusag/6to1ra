<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
           <?php
         //punto 1
         $nombre = "Agustin Ayvar";
         $ciudad = "Buenos Aires";           
         echo "<p>Mi nombre es $nombre y soy de $ciudad</p>";
    //punto 2
         $edad = 17;   
         echo "<p>¿Eres mayor de edad?</p>";
         if($edad>=18)
         {
            echo "<p>¡Eres mayor de edad, tienes :$edad, puedes entrar!</p>";
         }
         else
         {
            echo "<p>¡Lo siento, eres menor de edad, tienes: $edad!</p>";
         }
    //punto 3
        
         echo "<p>Esta es la lista:</p> ";
         echo "<ol>";
         for($i = 1; $i < 10;$i++ )
         {
                echo "<li>Elemento número:$i</li>";
         }
        echo "</ol>";
        ?>
</body>
</html>