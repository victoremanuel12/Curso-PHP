<?php
   //importação de scripts via include(require)

   include 'requisicaoInclude.php';
   require '../requisicaoIncludeForaDaPasta.php';
   //pode ser require tbm 
   // echo VARIAVEL_NONME;
   // echo '</br>';
   // echo NOME_NAMORADA;

   //diferenças entre include e require: caso o include falhar o codigo segue normalmente, caso o require falhar a aplicação para c um erro 
   //mais aconcelhavel usar o require
   // existe o include_once e require_once ambos são para evitar a requisição de forma duplificada do mesmo fixeiro
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
   <h1><?php echo VARIAVEL_NONME?></h1>
   
</body>
</html>