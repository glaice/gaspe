<?php

include "../sessao.php";

verifica_admin();   

cabecalho('Cadastro de Usuarios');

?>

    <div id="noticia"><h3> Cadastro de Usuários</h3>
        <p><br></p>
        <div style="float: left;">
            <form id="form1" name="form1" method="post" action="cadastrarUsuario.php">
                <table width="400" border="0" cellspacing="2" cellpadding="5">
                <tr>
                  <td>Nome:</td>
                  <td><input name="nome" type="text" id="nome" /></td>
                </tr>
                <tr>
                  <td>Senha:</td>
                  <td><input name="email" type="text" id="email" /></td>
                </tr>
                <tr>
                  <td>É adminstrador?:</td>
                  <td><textarea name="mensagem" cols="35" rows="10" id="mensagem"></textarea></td>
                </tr>
                <tr>
                  <td> </td>
                  <td><input type="submit" name="Submit" value="Enviar Mensagem" /></td>
                </tr>
                </table>
            </form>
        </div>
        <img src="/images/grupo.jpg" style="float: right; margin-right: 5px;">
    </div>

<?php



include "../rodape.php";

?>
