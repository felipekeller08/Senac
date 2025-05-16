<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          $ano = 2025;
          $nascimento = 2006;
          $idade = $ano - $nascimento;
          echo "idade é $idade";
          if ($idade >= 16) {
              echo "<h1>você pode votar</h1>";
          }
          else {
              echo "<h1>você não pode votar</h1>";
          }
            
        ?>
    </body>
</html>
