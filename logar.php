<?php
               
    if($_POST){
        $recebenome = $_POST["nome"];
        $recebesenha = $_POST["senha"];

        if ($recebenome === 'glaice'){
            if ($recebesenha === '1234'){
              header("Location: "."./index.php"); 
              setcookie("logado", "sim", time()+3600, "/");
            }else{
                $mensagem = 'Senha incorreta';
            }
        }else{
            $mensagem = 'Nome incorreto';
        }
    }

    
    if ($mensagem){
        header("Location: "."./index.php?mensagem=".$mensagem."#login");
    }else{
        header("Location: "."./index.php#login");
    }

?>
