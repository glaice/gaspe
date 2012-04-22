<?php

    // Nesse arquivo passamos as configurações para nosso servidor MySQL
    // Configuração endereço MySQL
    $hostname ="localhost";

    // Configuração do nome da base de dados MySQL
    $database="GASPE";

    // Configuração do nome do usuário de acesso a base de dados MySQL
    $usuario="glaice";

    // Configuração da senha para acesso a base de dados MySQL
    $senha="senhadbd";

    // Conectamos ao nosso servidor MySQL
    if(!($conect = mysql_connect($hostname,$usuario,$senha)))
    {
      echo "Erro ao conectar ao MySQL.";
      exit;
    }

    // Selecionamos nossa base de dados MySQL
    if(!($con = mysql_select_db($database,$conect)))
    {
      echo "Erro ao selecionar ao MySQL.";
      exit;
    }
?>
