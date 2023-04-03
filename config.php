<?php
   $dbHost = 'LocalHost';
   $dbUserame = 'root';
   $dbPassword = '';
   $dbName = 'formleo';

   $conexao = new mysqli($dbHost, $dbUserame, $dbPassword, $dbName);

   /* if($conexao->connect_errno)
   {
    echo "Erro";
   }
   else 
   {
    echo "conexao efetuada";
   } */
?>