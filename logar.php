<?php

// Fazemos o include do arquivo com as config do banco de dados
include "mysqlConfig.php";              

  
    if($_POST){
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $query = 'SELECT * FROM `Usuario` WHERE nome ="'. $nome .'" and senha = password("'.$senha.'")';


        $result = mysql_query($query); 
  
        if (mysql_num_rows($result)>0){
                $idSessao = md5($nome);
                echo $idSessao;
                $line = mysql_fetch_array($result, MYSQL_ASSOC);
                $idUsuario = $line["id"];
                $query = 'INSERT INTO `GASPE`.`Logado` (`id`, `idUsuario` , `dataLogin`)
                           VALUES ("'.$idSessao.'", "'.$idUsuario.'", NOW( ))';
                echo $query;
                $result = mysql_query($query) or die ("<p class=err>Error - Query failed: ".mysql_error()."</p>");


              header("Location: "."./index.php"); 
              setcookie("idDaSessao",$idSessao, time()+3600, "/");
        }else{
            $mensagem = 'Nome ou senha incorretos!';
        }
    }

    
    if (isset($mensagem)){
        header("Location: "."./index.php?mensagem=".$mensagem."#login");
    }else{
        header("Location: "."./index.php#login");
    }

?>
