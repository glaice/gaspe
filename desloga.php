<?php
             header("Location: "."./index.php");
            $valor = "falso";  //dado gravado no  cookie
            setcookie("logado", $valor, time()-3600,"/");
?>

