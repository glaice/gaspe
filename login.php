<?php

include "cabecalho.php";

?>

    <title> GASPE </title>

<?php

include "pos_cabecalho.php";

?>

    <div id="noticia"><h3>Faça seu login</h3>


        <p><br></p>
        <div style="float: left;margin-left: 10px;">
            <br><br><br><br><br>
            <form id="form1" name="form1" method="post" action="enviar_contato.php">
                <table width="380" border="0" cellspacing="2" cellpadding="5">
                <tr>
                  <td>Nome ou e-mail:</td>
                  <td><input name="nome" type="text" id="nome" /></td>
                </tr>
                <tr>
                  <td>senha:</td>
                  <td><input name="senha" type="text" id="senha" /></td>
                </tr>
                <tr>
                  <td> </td>
                  <td><input type="submit" name="Submit" value="Entrar" /></td>
                </tr>
                </table>
            </form>
        </div>
        <img src="images/grupo.jpg" style="float: right; margin-right: 10px; margin-bottom:10px;">

    </div>

<?php

include "rodape.php";

?>
