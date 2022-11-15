<?php
   $variavelNome = 'Victor';
   $variavelApelido = 'Itapuã';
   $totalDeCaractersNome = strlen($variavelNome);
   $totalDeCaractersApelido = mb_strlen($variavelApelido);
   $totalDeCaracters = $totalDeCaractersNome + $totalDeCaractersApelido;
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body>
      <span>Meu nome é:</span> <br>
      <h1>
         <?= $variavelNome ?>
      </h1>
      <span>Total de caracteres no meu nome: <?=$totalDeCaractersNome ?></span> <br>
      <span><?=strtoupper($variavelNome)?></span>
      <hr>
      <span>Meu apelido é:</span> <br>
      <h1>
         <?= $variavelApelido ?>
      </h1>
      <span><?=mb_strtoupper($variavelApelido)?></span>
      <span>Total de caracteres no meu nome: <?=$totalDeCaractersApelido ?></span> <br>
      <span>Calculo Total de caracters no meu nome e sobrenome: <?=$totalDeCaracters ?></span>
   </body>
   </html>
