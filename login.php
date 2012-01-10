
         <form id="FORM1" name="form1" method="post" action="logar.php">
                  <p >Login:</p>
                  <p><input name="nome" type="text" id="nome" /></p>
                  <p>Senha:</p>
                  <p><input name="senha" type="text" id="senha" /></p>
                  <p style="text-align:center; padding-left: 4px;"><input style=" width:100px;" type="submit" name="Submit" value="Entrar" /></p>
            </form>  

<?php

if ( isset($_GET["mensagem"]) ){
    echo "<p class='erro'>". $_GET["mensagem"]."</p>";
}

?>
