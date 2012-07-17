<?php

    include "mysqlConfig.php";

            $valor = $_COOKIE["idDaSessao"];  //dado gravado no  cookie
            $query = 'DELETE FROM `Logado` WHERE `Logado`.`id` = "'.$valor.'"';
            $result = mysql_query($query) or die ("Desculpe o transtorno, ocorreu um erro interno no servidor. Tente novamente mais tarde.");

             header("Location: "."./index.php");
            setcookie("idDaSessao", $valor, time()-3600,"/");

            

?>

