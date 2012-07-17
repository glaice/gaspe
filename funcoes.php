<?php

include "mysqlConfig.php";
include "menu.php";
include "cabecalho.php";


$usuarioLogado = "anonimo";
$admin = 0;
$logado = false;
//fazer query para deletar sessoes antigas!!!!

function carrega_sessao(){
    global $usuarioLogado;
    global $admin;
    global $logado;

     if(isset($_COOKIE["idDaSessao"])){

        $result = mysql_query('DELETE FROM `Logado` WHERE dataLogin < DATE_SUB( NOW(), INTERVAL 1 HOUR)');
        $query = 'SELECT Usuario.nome, Usuario.admin FROM `Logado` join `Usuario` on `Logado`.idUsuario = `Usuario`.id WHERE `Logado`.id = "'.$_COOKIE["idDaSessao"].'"';
        $result = mysql_query($query);
        if (mysql_num_rows($result)>0){        
           $line  = mysql_fetch_array($result, MYSQL_NUM);
           $usuarioLogado = $line[0];
           $admin = $line[1];
           $logado = true;

        }
    }
}

function verifica_admin(){
    global $admin;
    if(!$admin){

        echo 'PERMISSÃO NEGADA!';
        exit(0);
    }

}


?>
