<?php

include "../sessao.php";

cabecalho('Entre em contato');

?>
   <div id="noticia"><h3> Entre em contato conosco!!!</h3>
        <p><br></p>
        <div style="float: left;">
            <form id="form1" name="form1" method="post" action="enviar_contato.php">
                <table width="400" border="0" cellspacing="2" cellpadding="5">
                <tr>
                  <td>Nome:</td>
                  <td><input name="nome" type="text" id="nome" /></td>
                </tr>
                <tr>
                  <td>E-mail:</td>
                  <td><input name="email" type="text" id="email" /></td>
                </tr>
                <tr>
                  <td>Mensagem:</td>
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
        <p><br><br>Paróquia Santa Teresinha do Menino Jesus<br>(27) 3296-1319
        <br>
        <br>
        <b>Venha nos visitar! Estamos na igreja nos sábados entre as 17:00 e as 19:00 horas.</b>
        </p>
    </div>

<?php

include "../rodape.php";

?>
